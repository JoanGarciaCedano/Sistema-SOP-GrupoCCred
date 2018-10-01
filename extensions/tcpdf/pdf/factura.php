<?php

require_once "../../../controllers/ventas.controlador.php";
require_once "../../../models/ventas.modelo.php";

require_once "../../../controllers/clientes.controlador.php";
require_once "../../../models/clientes.modelo.php";

require_once "../../../controllers/usuarios.controlador.php";
require_once "../../../models/usuarios.modelo.php";

require_once "../../../controllers/productos.controlador.php";
require_once "../../../models/productos.modelo.php";




class imprimirFactura{

public $codigo;

public function traerImpresionFactura(){

//TRAEMOS LA INFORMACIÓN DE LA VENTA
$itemVenta = "codigo";
$valorVenta = $this->codigo;

$respuestaVenta = ControladorVentas::ctrMostrarVentas($itemVenta, $valorVenta);

//RECUPERAMOS CADA VALOR DE LA VENTA CON LA CONSULTA Y LOS ALMACENO EN VARIABLES
$fecha = substr($respuestaVenta["fecha"],0,-8);
$productos = json_decode($respuestaVenta["productos"], true);
$neto = number_format($respuestaVenta["neto"], 2);
$impuesto = number_format($respuestaVenta["impuesto"], 2);
$total = number_format($respuestaVenta["total"], 2);

//TRAEMOS LA INFORMACIÓN DEL CLIENTE

$itemCliente = "id";
$valorCliente = $respuestaVenta["id_cliente"];

$respuestaCliente = ControladorClientes::ctrMostrarClientes($itemCliente, $valorCliente);

//TRAEMOS LA INFORMACIÓN DEL VENDEDOR

$itemVendedor = "id";
$valorVendedor = $respuestaVenta["id_vendedor"];

$respuestaVendedor = ControladorUsuarios::ctrMostrarUsuarios($itemVendedor, $valorVendedor);

require_once('tcpdf_include.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->startPageGroup();

$pdf->AddPage();

// ---------------------------------------------------------

$bloque1 = <<<EOF

	<table>
		
		<tr>
			<br>
			<td style="width:150px"><img src="images/logoCCred.png"></td>

			<td style="background-color:white; width:140px">
		
				<div style="font-size:8.5px; text-align:left; line-height:15px;">
					TELEFONO: (55) 76938158
					<br>
					DIRECCIÓN: Retorno 30 de Fray Servando Teresa de Mier #10
				</div>

			</td>

			<td style="background-color:white; width:140px">
		
				<div style="font-size:8.5px; text-align:left; line-height:15px;">
					COLONIA: Jardín Balbuena
					<br>
					E-MAIL: Facturas@ccred.com.mx
				</div>

			</td>

			<td style="background-color:white; width:110px; text-align:center; color:red">
				<br>			
				FACTURA N.
				<br>
				$valorVenta
			</td>

		</tr>

	</table>

EOF;

$pdf->writeHTML($bloque1, false, false, false, false, '');

// ---------------------------------------------------------
$bloque2 = <<<EOF
	
	<table>

		<tr>

			<td style="witdh:540px"><img src="images/back.jpg"></td>

		</tr>

	</table>
	
	<table style="font-size:10px; padding:5px 10px;">

		<tr>
	
			<td style="border: 1px solid #666; background-color:white; width:390px">
	
				Cliente: $respuestaCliente[nombre]

			</td>

			<td style="border: 1px solid #666; background-color:white; width:150px; text-align:right">

				Fecha: $fecha

			</td>

		</tr>

		<tr>

			<td style="border: 1px solid #666; background-color:white; width:540px">
	
				Vendedor: $respuestaVendedor[nombre]

			</td>

		</tr>

		<tr>

			<td style="border-bottom: 1px solid #666; background-color:white; width:540px"></td>

		</tr>

	</table>

EOF;

$pdf->writeHTML($bloque2, false, false, false, false, '');

// ---------------------------------------------------------

$bloque3 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">
		<tr>
			<td style="border: 1px solid #666; background-color:white; width:260px; text-align:center">Producto</td>
			<td style="border: 1px solid #666; background-color:white; width:80px; text-align:center">Cantidad</td>
			<td style="border: 1px solid #666; background-color:white; width:100px; text-align:center">Valor Unit.</td>
			<td style="border: 1px solid #666; background-color:white; width:100px; text-align:center">Valor Total</td>
		</tr>
	</table>

EOF;

$pdf->writeHTML($bloque3, false, false, false, false, '');

// ---------------------------------------------------------

foreach ($productos as $key => $item) {

$itemProducto = "descripcion";
$valorProducto = $item["descripcion"];
$orden = null;

$respuestaProducto = ControladorProductos::ctrMostrarProductos($itemProducto, $valorProducto, $orden);

$valorUnitario = number_format($respuestaProducto["precio_venta"], 2);

$precioTotal = $item["total"];

$bloque4 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">
		<tr>
			<td style="border: 1px solid #666; background-color:white; width:260px; text-align:center">$item[descripcion]</td>
			<td style="border: 1px solid #666; background-color:white; width:80px; text-align:center">$item[cantidad]</td>
			<td style="border: 1px solid #666; background-color:white; width:100px; text-align:center">$$valorUnitario</td>
			<td style="border: 1px solid #666; background-color:white; width:100px; text-align:center">$$precioTotal</td>
		</tr>
	</table>

EOF;

$pdf->writeHTML($bloque4, false, false, false, false, '');

}

// ---------------------------------------------------------

$bloque5 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		<tr>

			<td style="background-color:white; width:340px; text-align:center"></td>

			<td style="border-bottom: 1px solid #666; background-color:white; width:100px; text-align:center"></td>

			<td style="border-bottom: 1px solid #666; color:#333; background-color:white; width:100px; text-align:center"></td>

		</tr>

		<tr>
	
			<td style="border-right: 1px solid #666; background-color:white; width:340px; text-align:center"></td>

			<td style="border: 1px solid #666; background-color:white; width:100px; text-align:center; font-weight:bold;">Neto:</td>

			<td style="border: 1px solid #666; background-color:white; width: 100px; text-align:center">$$neto</td>

		</tr>

		<tr>
			
			<td style="border-right: 1px solid #666; background-color:white; width:340px; text-align:center"></td>

			<td style="border: 1px solid #666; background-color:white; width:100px; text-align:center; font-weight:bold;">Impuesto:</td>

			<td style="border: 1px solid #666; background-color:white; width: 100px; text-align:center">$$impuesto</td>
			

		</tr>

		<tr>
			
			<td style="border-right: 1px solid #666; background-color:white; width:340px; text-align:center"></td>

			<td style="border: 1px solid #666; background-color:white; width:100px; text-align:center; font-weight:bold;">Total:</td>

			<td style="border: 1px solid #666; background-color:white; width: 100px; text-align:center">$$total</td>
			

		</tr>



	</table>

EOF;

$pdf->writeHTML($bloque5, false, false, false, false, '');

// ---------------------------------------------------------

//SALIDA DEL ARCHIVO

$pdf->Output('factura.pdf');

}

}

$factura = new imprimirFactura();
$factura -> codigo = $_GET["codigo"];
$factura -> traerImpresionFactura();


?>