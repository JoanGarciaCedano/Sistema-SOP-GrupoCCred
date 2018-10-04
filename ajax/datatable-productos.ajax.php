<?php 

require_once "../controllers/productos.controlador.php";
require_once "../models/productos.modelo.php";

require_once "../controllers/categorias.controlador.php";
require_once "../models/categorias.modelo.php";

class TablaProductos{


	// MOSTRAR LA TABLA DE PRODUCTOS
	public function mostrarTablaProductos(){

		$item = null;
		$valor = null;
		$orden = "id";

		$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

		$datosJson = '{
				"data": [';

				for ($i = 0; $i < count($productos); $i++) { 

					// TRAEMOS LA IMAGEN

				    $imagen = "<img src='".$productos[$i]["imagen"]."' width='40px'>";

				    // TRAEMOS LA CATEGORIA

				    $item = "id";
				    $valor = $productos[$i]["id_categoria"];

				    $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

				    // STOCK

				    if($productos[$i]["stock"] <= 10){
				    	$stock = "<button class='btn btn-danger'>".$productos[$i]["stock"]."</button>";
				    }else if($productos[$i]["stock"] > 11 && $productos[$i]["stock"] <= 30 ){
				    	$stock = "<button class='btn btn-warning'>".$productos[$i]["stock"]."</button>";
				    }else{
				    	$stock = "<button class='btn btn-success'>".$productos[$i]["stock"]."</button>";
				    }				    

				   	// ACCIONES PARA LOS BOTONES

				    $botones = "<div class='btn-group'><button class='btn btn-warning btnEditarProducto' idProducto='".$productos[$i]["id"]."' data-toggle='modal' data-target='#modalEditarProducto'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarProducto' idProducto='".$productos[$i]["id"]."' codigo='".$productos[$i]["codigo"]."' imagen='".$productos[$i]["imagen"]."'><i class='fa fa-times'></i></button></div>";


							
					$datosJson .='[
						  "'.($i+1).'",
						  "'.$imagen.'",
						  "'.$productos[$i]["codigo"].'",
						  "'.$productos[$i]["codigoCCR"].'",
						  "'.$productos[$i]["descripcion"].'",
						  "'.$categorias["categoria"].'",
						  "'.$stock.'",
						  "'.$productos[$i]["unidad"].'",
						  "'.$productos[$i]["precio_compra"].'",
						  "'.$productos[$i]["precio_venta"].'",
						  "'.$productos[$i]["fecha"].'",
						  "'.$botones.'"
						   ],';

				}//for

				$datosJson = substr($datosJson, 0, -1);			
		
				
				$datosJson .= ']

					}';
				echo $datosJson;
		
	}

}

/*===============================================
=            ACTIVAR TABLA PRODUCTOS            =
===============================================*/

$activarProductos = new TablaProductos();
$activarProductos -> mostrarTablaProductos();

/*=====  End of ACTIVAR TABLA PRODUCTOS  ======*/
