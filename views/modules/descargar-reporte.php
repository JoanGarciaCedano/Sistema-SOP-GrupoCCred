<?php 

	require_once "../../controllers/ventas.controlador.php";
	require_once "../../models/ventas.modelo.php";
	require_once "../../controllers/clientes.controlador.php";
	require_once "../../models/clientes.modelo.php";
	require_once "../../controllers/usuarios.controlador.php";
	require_once "../../models/usuarios.modelo.php";

	$reporte = new ControladorVentas();
	$reporte -> ctrDescargarReporte();

 ?>