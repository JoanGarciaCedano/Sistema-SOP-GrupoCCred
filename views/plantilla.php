<?php

  session_start();

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema de Inventarios - GRUPO CCRED</title>
  <link rel="icon" href="views/img/plantilla/logASISA1.png">
  <!--=================================
  =            PLUGINS CSS            =
  ==================================-->
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/bower_components/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/AdminLTE.css">

  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="views/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- Data Tables-->
  <link rel="stylesheet" href="views/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!--====  End of PLUGINS CSS  ====-->
    
  <!--=====================================
  =             PLUGINS DE JAVSCRIPT        =
  ======================================-->

    <!-- jQuery 3 -->
  <script src="views/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="views/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="views/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="views/dist/js/adminlte.min.js"></script>
  <!-- Data Tables -->
  <script src="views/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="views/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <!--====  End PLUGINS DE JAVSCRIPT  ====-->
</head>

  <!--==========================================
  =            CUERPO DEL DOCUMENTO            =
  ===========================================-->
    
<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">
<!-- Site wrapper -->

  <?php

  if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){
    echo '<div class="wrapper">';
    /*================================
    =            CABEZOTE            =
    ================================*/
    include "modules/cabezote.php";

    /*============================
    =            MENU            =
    ============================*/
    include "modules/menu.php";
    
    /*=================================
    =            CONTENIDO            =
    =================================*/

    if(isset($_GET["ruta"])){
      if($_GET["ruta"] == "inicio" ||
         $_GET["ruta"] == "usuarios" || 
         $_GET["ruta"] == "categorias" ||
         $_GET["ruta"] == "productos" ||
         $_GET["ruta"] == "clientes" ||
         $_GET["ruta"] == "ventas" ||
         $_GET["ruta"] == "crear-venta" ||
         $_GET["ruta"] == "reporte" || 
         $_GET["ruta"] == "salir"){

        include "modules/".$_GET["ruta"].".php";
      }else{
        include "modules/404.php";
      }
    }else{
      include "modules/inicio.php";
    }

    /*==============================
    =            FOOTER            =
    ==============================*/
    include "modules/footer.php";
    
    echo '</div>';

  }else{

    include "modules/login.php";

  }

    
  ?>  

<script src="views/js/plantilla.js"></script>
</body>
</html>
