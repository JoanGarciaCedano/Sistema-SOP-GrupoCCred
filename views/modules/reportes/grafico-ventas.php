<?php 

	error_reporting(0);

	if(isset($_GET["fechaInicial"])){

      $fechaInicial = $_GET["fechaInicial"];
      $fechaFinal = $_GET["fechaFinal"];
    }else{

      $fechaInicial = null;
      $fechaFinal = null;

    }

    $respuesta = ControladorVentas::ctrRangoFechasVentas($fechaInicial, $fechaFinal);

    $arrayFechas = array();
    $arrayVentas = array();
    $sumaPagosMes = array();

	foreach ($respuesta as $key => $value) {

		// CAPTURAMOS SOLO EL AÑO Y EL MES
		$fecha = substr($value["fecha"], 0, 7);
		// INTRODUCIMOS LAS FECHAS EN EL $arrayFechas
		array_push($arrayFechas, $fecha);

		// CAPTURAMOS LAS VENTAS
		$arrayVentas = array($fecha => $value["total"]);

		// SUMAMOS LOS PAGOS QUE OCURRIERON EL MISMO MES
		foreach ($arrayVentas as $key => $value){

			$sumaPagosMes[$key] += $value;

		}
	
	}

	$noRepetirFechas = array_unique($arrayFechas);

 ?>

 <!-- GRAFICO DE VENTAS -->

 <div class="box box-solid bg-teal-gradient">
 	
	<div class="box-header">
		
		<i class="fa fa-th"></i>
	
		<h3 class="box-title">Gráfico de Ventas</h3>

	</div>

	<div class="box-body border-radius-none nuevoGraficoVentas">
		
		<div class="chart" id="line-chart-ventas" style="height: 250px;"></div>

	</div>

 </div>

 <script>
 	
/* Morris.js Charts */
  var line = new Morris.Line({
    element          : 'line-chart-ventas',
    resize           : true,
    data             : [

      <?php
      if($noRepetirFechas != null){

      	foreach($noRepetirFechas as $key){

	      	echo "{ y: '".$key."', ventas: ".$sumaPagosMes[$key]." },";

	      }
	      echo "{ y: '".$key."', ventas: ".$sumaPagosMes[$key]." }"; 

      }else{

      	echo "{ y: '0', ventas: '0'}";

      }
      

       ?>      
    ],
    xkey             : 'y',
    ykeys            : ['ventas'],
    labels           : ['ventas'],
    lineColors       : ['#efefef'],
    lineWidth        : 2,
    hideHover        : 'auto',
    gridTextColor    : '#fff',
    gridStrokeWidth  : 0.4,
    pointSize        : 4,
    pointStrokeColors: ['#efefef'],
    gridLineColor    : '#efefef',
    gridTextFamily   : 'Open Sans',
    preUnits : "$",
    gridTextSize     : 10
  });

 </script>