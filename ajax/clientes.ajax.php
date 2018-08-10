<?php 

require_once "../controllers/clientes.controlador.php";
require_once "../models/clientes.modelo.php";

	class AjaxClientes{

		/*======================================
		=            EDITAR CLIENTE            =
		======================================*/
		
		public $idCliente;

		public function ajaxEditarCliente(){

			$item = "id";
			$valor = $this->idCliente;

			$respuesta = ControladorClientes::ctrMostrarClientes($item, $valor);

			echo json_encode($respuesta);

		}
		
		
		/*=====  End of EDITAR CLIENTE  ======*/

	}

	/*======================================
	=            EDITAR CLIENTE            =
	======================================*/
	
	if(isset($_POST["idCliente"])){

		$cliente = new AjaxClientes();
		$cliente -> idCliente = $_POST["idCliente"];
		$cliente -> ajaxEditarCliente();

	}//if


	
	/*=====  End of EDITAR CLIENTE  ======*/


	
