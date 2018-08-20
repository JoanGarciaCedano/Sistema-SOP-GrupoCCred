<?php 

require_once "../controllers/productos.controlador.php";
require_once "../models/productos.modelo.php";

require_once "../controllers/categorias.controlador.php";
require_once "../models/categorias.modelo.php";



 class AjaxProductos{

 	/*===============================================================
	=            GENERAR CÓDIGO A PARTIR DE ID CATEGORIA            =
	===============================================================*/

	public $idCategoria;

	public function ajaxCrearCodigoProducto(){

		$item = "id_categoria";
		$valor = $this->idCategoria;

		$respuesta = ControladorProductos::ctrMostrarProductos($item, $valor);

		echo json_encode($respuesta);

	}

	/*=====  End of GENERAR CÓDIGO A PARTIR DE ID CATEGORIA  ======*/


	 /*=======================================
	 =            EDITAR PRODUCTO            =
	 =======================================*/
	 
	 public $idProducto;

	 public function ajaxEditarProducto(){

	 	$item = "id";
	 	$valor = $this->idProducto;

	 	$respuesta = ControladorProductos::ctrMostrarProductos($item, $valor);

	 	echo json_encode($respuesta);

	 }
	 
	 /*=====  End of EDITAR PRODUCTO  ======*/

 }


 /*==============================================================================
=            CREAMOS EL OBJETO PARA CREAR EL CODIGO DEL PRODUCTO            =
==============================================================================*/

if(isset($_POST["idCategoria"])){

	$codigoProducto = new AjaxProductos();
	$codigoProducto -> idCategoria = $_POST["idCategoria"];
	$codigoProducto -> ajaxCrearCodigoProducto();

}

/*=====  End of CREAMOS EL OBJETO PARA CREAR EL CODIGO DEL PRODUCTO  ======*/

 	/*=======================================
	 =            EDITAR PRODUCTO            =
	 =======================================*/

if(isset($_POST["idProducto"])){

	$editarProducto = new AjaxProductos();
	$editarProducto -> idProducto = $_POST["idProducto"];
	$editarProducto -> ajaxEditarProducto();


}