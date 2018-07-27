<?php 

require_once "../controllers/categorias.controlador.php";
require_once "../models/categorias.modelo.php";

class AjaxCategorias{

	/*========================================
	=            EDITAR CATEGORIA            =
	========================================*/
	
	public $idCategoria;

	public function ajaxEditarCategoria(){

		$item = "id";
		$valor = $this->idCategoria;

		$respuesta = ControladorCategorias::ctrMostrarCategorias($item, $valor);

		echo json_encode($respuesta);
	}
	
	/*=====  End of EDITAR CATEGORIA  ======*/
	

}


/*===============================================
=            EDITAR CATEGORIA OBJETO            =
===============================================*/

if(isset($_POST["idCategoria"])){

	$categoria = new AjaxCategorias();
	$categoria -> idCategoria = $_POST["idCategoria"];
	$categoria -> ajaxEditarCategoria();


}

/*=====  End of EDITAR CATEGORIA OBJETO  ======*/

