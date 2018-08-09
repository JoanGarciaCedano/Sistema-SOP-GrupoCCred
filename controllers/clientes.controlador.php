<?php 

class ControladorClientes{

	/*======================================
	=            CREAR CLIENTES            =
	======================================*/
	
	static public function ctrCrearCliente(){

		if(isset($_POST["nuevoCliente"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoCliente"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaEmpresa"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}+$/', $_POST["nuevoEmail"]) &&
			   preg_match('/^[()\-0-9 ]+$/', $_POST["nuevoTelefono"]) &&
			   preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["nuevaDireccion"])){

				$tabla = "clientes";

				$datos = array("nombre" => $_POST["nuevoCliente"],
							   "empresa" => $_POST["nuevaEmpresa"],
							   "email" => $_POST["nuevoEmail"],
							   "telefono" => $_POST["nuevoTelefono"],
							   "direccion" => $_POST["nuevaDireccion"]
							  );

				$respuesta = ModeloClientes::mdlIngresarCliente($tabla, $datos);

				if($respuesta == "ok"){

				   		echo '<script>
						swal({

							type: "success",
							title: "¡El cliente ha sido guardado correctamente!",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							
							}).then((result)=>{
									if(result.value){
										window.location = "clientes";
									}
								});	
						</script>';

					}

			}else{

				echo '<script>
						swal({

							type: "error",
							title: "¡El cliente no puede ir con los campos vacíos o llevar caracteres especiales!",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							
							}).then((result)=>{
									if(result.value){
										window.location = "clientes";
									}
								});	
					</script>';

			}//else preg_match

		}//if

	}//function ctrCrearCliente
	
	/*=====  End of CREAR CLIENTES  ======*/



	/*========================================
	=            MOSTRAR CLIENTES            =
	========================================*/
	
	static public function ctrMostrarClientes($item, $valor){

		$tabla = "clientes";

		$respuesta = ModeloClientes::mdlMostrarClientes($tabla, $item, $valor);

		return $respuesta;


	}	
	
	/*=====  End of MOSTRAR CLIENTES  ======*/
	
	


}
