<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrar clientes
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Administrar clientes</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-header with-border">
      
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">
            Agregar Cliente
          </button>  

        </div><!--.box-header-->

        <div class="box-body">

          <table class="table table-bordered table-striped dt-responsive tablas">
          
            <thead>
              
              <tr>
                <th style="width: 10px">#</th>
                <th>Nombre</th>
                <th>Empresa</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Total Compras</th>
                <th>Ultima Compra</th>
                <th>Ingreso al sistema</th>
                <th>Acciones</th>
              </tr>

            </thead>
          
            <tbody>

              <?php 

                $item = null;
                $valor = null;

                $clientes = ControladorCLientes::ctrMostrarClientes($item, $valor);

                foreach ($clientes as $key => $value) {
                  echo ' <tr>
                            <td>'.($key+1).'</td>

                            <td>'.$value["nombre"].'</td>

                            <td>'.$value["empresa"].'</td>

                            <td>'.$value["email"].'</td>

                            <td>'.$value["telefono"].'</td>

                            <td>'.$value["direccion"].'</td>

                            <td>'.$value["compras"].'</td>

                            <td>'.$value["ultima_compra"].'</td>

                            <td>'.$value["fecha"].'</td>
                            <td>
                              
                              <div class="btn-group">
                                <button class="btn btn-warning btnEditarCliente" data-toggle="modal" data-target="#modalEditarCliente" idCliente="'.$value["id"].'"><i clasS="fa fa-pencil"></i></button>
                                <button class="btn btn-danger btnEliminarCliente" idCliente="'.$value["id"].'"><i clasS="fa fa-times"></i></button>
                              </div>
              

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
  =            MODAL AGREGAR CLIENTE            =
  ============================================-->
  
  <div id="modalAgregarCliente" class="modal fade" role="dialog">

      <div class="modal-dialog">
          
        <div class="modal-content">

          <form role="form" method="post">

            <!--===========================================
            =           CABEZA DEL MODAL            =
            ============================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Agregar Cliente</h4>

          </div>

          <!--===========================================
            =           CUERPO DEL MODAL            =
            ============================================-->

          <div class="modal-body">

            <div class="box-body">
              
              <!-- ENTRADA PARA EL NOMBRE -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar Nombre" required>

                </div><!--.input-group-->

              </div><!--.form-group-->

              <!-- ENTRADA PARA LA EMPRESA -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-key"></i></span>

                  <input type="text" class="form-control input-lg" name="nuevaEmpresa" placeholder="Ingresar Empresa" required>

                </div><!--.input-group-->

              </div><!--.form-group-->

               <!-- ENTRADA PARA EL EMAIL -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                  <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar Email" required>

                </div><!--.input-group-->

              </div><!--.form-group-->

               <!-- ENTRADA PARA EL TELEFONO -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-phone"></i></span>

                  <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar Teléfono" data-inputmask="'mask':'(99) 9999-9999'" data-mask required>

                </div><!--.input-group-->

              </div><!--.form-group-->

              <!-- ENTRADA PARA LA DIRECCIÓN -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>

                  <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar Dirección" required>

                </div><!--.input-group-->

              </div><!--.form-group-->

            </div><!--.modal-body-->

          </div><!--box-body-->

          <!--===========================================
            =           PIE DEL MODAL            =
            ============================================-->

          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary pull-right">Guardar Cliente</button>

          </div>

          </form>

          <?php 

            $crearCliente = new ControladorCLientes();
            $crearCliente -> ctrCrearCliente();

           ?>

        </div>

      </div>

  </div>
  
  <!--====  End of MODAL AGREGAR CLIENTE  ====-->

   <!--===========================================
  =            MODAL EDITAR CLIENTE          =
  ============================================-->
  
  <div id="modalEditarCliente" class="modal fade" role="dialog">

      <div class="modal-dialog">
          
        <div class="modal-content">

          <form role="form" method="post">

            <!--===========================================
            =           CABEZA DEL MODAL            =
            ============================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Editar Cliente</h4>

          </div>

          <!--===========================================
            =           CUERPO DEL MODAL            =
            ============================================-->

          <div class="modal-body">

            <div class="box-body">
              
              <!-- ENTRADA PARA EL NOMBRE -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="text" class="form-control input-lg" name="editarCliente" id="editarCliente" required>

                  <input type="hidden" id="idCliente" name="idCliente">

                </div><!--.input-group-->

              </div><!--.form-group-->

              <!-- ENTRADA PARA LA EMPRESA -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-key"></i></span>

                  <input type="text" class="form-control input-lg" name="editarEmpresa" id="editarEmpresa" required>

                </div><!--.input-group-->

              </div><!--.form-group-->

               <!-- ENTRADA PARA EL EMAIL -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                  <input type="email" class="form-control input-lg" name="editarEmail" id="editarEmail" required>

                </div><!--.input-group-->

              </div><!--.form-group-->

               <!-- ENTRADA PARA EL TELEFONO -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-phone"></i></span>

                  <input type="text" class="form-control input-lg" name="editarTelefono" id="editarTelefono" data-inputmask="'mask':'(99) 9999-9999'" data-mask required>

                </div><!--.input-group-->

              </div><!--.form-group-->

              <!-- ENTRADA PARA LA DIRECCIÓN -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>

                  <input type="text" class="form-control input-lg" name="editarDireccion" id="editarDireccion" required>

                </div><!--.input-group-->

              </div><!--.form-group-->

            </div><!--.modal-body-->

          </div><!--box-body-->

          <!--===========================================
            =           PIE DEL MODAL            =
            ============================================-->

          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary pull-right">Guardar Cliente</button>

          </div>

          </form>
        
        
        <?php 

          $editarCliente = new ControladorCLientes();
          $editarCliente -> ctrEditarCliente();

         ?>
        


        </div>

      </div>

  </div>
  
  <!--====  End of MODAL EDITAR CLIENTE  ====-->
  
  <!--======================================
  =            ELIMINAR CLIENTE            =
  =======================================-->
  
    <?php 

          $eliminarCliente = new ControladorCLientes();
          $eliminarCliente -> ctrEliminarCliente();

    ?>
  
  <!--====  End of ELIMINAR CLIENTE  ====-->
  