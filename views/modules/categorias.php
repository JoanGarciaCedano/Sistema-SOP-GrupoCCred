<?php 

  if($_SESSION["perfil"] == "Vendedor"){

    echo '<script>

      window.location = "inicio";

    </script>';

    return;

  }

 ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrar categorías
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Administrar categorías</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-header with-border">
      
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">
            Agregar Categoría
          </button>  

        </div><!--.box-header-->

        <div class="box-body">

          <table class="table table-bordered table-striped dt-responsive tablas">
          
            <thead>
              
              <tr>
                <th style="width: 10px">#</th>
                <th>Categoría</th>
                <th>Acciones</th>
              </tr>

            </thead>
        
            <tbody>

              <?php 

                $item = null;
                $valor = null;

                $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                foreach ($categorias as $key => $value) {
                  
                  echo ' <tr>
                          <td>'.($key+1).'</td>
                          <td>'.$value["categoria"].'</td>
                          <td>
                            
                            <div class="btn-group">

                              <button class="btn btn-warning btnEditarCategoria" idCategoria="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarCategoria"><i clasS="fa fa-pencil"></i></button>';

                              if($_SESSION["perfil"] == "Administrador"){

                              echo '<button class="btn btn-danger btnEliminarCategoria" idCategoria="'.$value["id"].'"><i clasS="fa fa-times"></i></button>';
                            
                            }

                            echo '</div>
            

                          </td>
                        </tr>';

                }

               ?>

            </tbody>

          </table>

        </div><!-- /.box-body -->
        
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!--===========================================
  =            MODAL AGREGAR CATEGORIA          =
  ============================================-->
  
  <div id="modalAgregarCategoria" class="modal fade" role="dialog">

      <div class="modal-dialog">
          
        <div class="modal-content">

          <form role="form" method="post">

            <!--===========================================
            =           CABEZA DEL MODAL            =
            ============================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Agregar Categoría</h4>

          </div>

          <!--===========================================
            =           CUERPO DEL MODAL            =
            ============================================-->

          <div class="modal-body">

            <div class="box-body">
              
              <!-- ENTRADA PARA LA CATEGORÍA -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevaCategoria" placeholder="Ingresar Categoría" required>

                </div><!--.input-group-->

              </div><!--.form-group-->

            </div><!--.modal-body-->

          </div><!--box-body-->

          <!--===========================================
            =           PIE DEL MODAL            =
            ============================================-->

          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary pull-right">Guardar Categoría</button>

          </div>

          <?php 

            $crearCategoria = new ControladorCategorias();
            $crearCategoria -> ctrCrearCategoria();

           ?>

          </form>

        </div>

      </div>

  </div>
  
<!--===========================================
  =            MODAL EDITAR CATEGORIA          =
  ============================================-->


  <div id="modalEditarCategoria" class="modal fade" role="dialog">

      <div class="modal-dialog">
          
        <div class="modal-content">

          <form role="form" method="post">

            <!--===========================================
            =           CABEZA DEL MODAL            =
            ============================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Editar Categoría</h4>

          </div>

          <!--===========================================
            =           CUERPO DEL MODAL            =
            ============================================-->

          <div class="modal-body">

            <div class="box-body">
              
              <!-- ENTRADA PARA LA CATEGORÍA -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                  <input type="text" class="form-control input-lg" name="editarCategoria" id="editarCategoria" required>


                  <input type="hidden" name="idCategoria" id="idCategoria" required>

                </div><!--.input-group-->

              </div><!--.form-group-->

            </div><!--.modal-body-->

          </div><!--box-body-->

          <!--===========================================
            =           PIE DEL MODAL            =
            ============================================-->

          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary pull-right">Guardar Cambios</button>

          </div>
  
      
          <?php 

            $editarCategoria = new ControladorCategorias();
            $editarCategoria -> ctrEditarCategoria();

           ?>
       

          </form>

        </div>

      </div>

  </div>
  <!--====  End of MODAL AGREGAR USUARIO  ====-->

          <?php 

            $borrarCategoria = new ControladorCategorias();
            $borrarCategoria -> ctrBorrarCategoria();

           ?>