<?php

require_once "../../../controllers/ventas.controlador.php";
require_once "../../../models/ventas.modelo.php";

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
//SALIDA DEL ARCHIVO

$pdf->Output('factura.pdf');

}

}

$factura = new imprimirFactura();
$factura -> codigo = $_GET["codigo"];
$factura -> traerImpresionFactura();


?>