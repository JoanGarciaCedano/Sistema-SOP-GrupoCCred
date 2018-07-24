<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrar usuarios
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Administrar usuarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-header with-border">
      
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
            Agregar Usuario
          </button>  

        </div><!--.box-header-->

        <div class="box-body">

          <table class="table table-bordered table-striped dt-responsive tablas">
          
            <thead>
              
              <tr>
                <th style="width: 10px">#</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Foto</th>
                <th>Perfil</th>
                <th>Estado</th>
                <th>Último login</th>
                <th>Acciones</th>
              </tr>

            </thead>
        
            <tbody>
              
              <tr>
                <td>1</td>
                <td>Usuario Administrador</td>
                <td>admin</td>
                <td><img src="views/img/usuarios/anonymous.png" class="img-thumbnail" width="40px" alt=""></td>
                <td>Administrador</td>
                <td><button class="btn btn-success btn-xs">Activado</button></td>
                <td>2018-24-07 9:56</td>
                <td>
                  
                  <div class="btn-group">
                    <button class="btn btn-warning"><i clasS="fa fa-pencil"></i></button>
                    <button class="btn btn-danger"><i clasS="fa fa-times"></i></button>
                  </div>
  

                </td>
              </tr>

              <tr>
                <td>1</td>
                <td>Usuario Administrador</td>
                <td>admin</td>
                <td><img src="views/img/usuarios/anonymous.png" class="img-thumbnail" width="40px" alt=""></td>
                <td>Administrador</td>
                <td><button class="btn btn-success btn-xs">Activado</button></td>
                <td>2018-24-07 9:56</td>
                <td>
                  
                  <div class="btn-group">
                    <button class="btn btn-warning"><i clasS="fa fa-pencil"></i></button>
                    <button class="btn btn-danger"><i clasS="fa fa-times"></i></button>
                  </div>
  

                </td>
              </tr>

              <tr>
                <td>1</td>
                <td>Usuario Administrador</td>
                <td>admin</td>
                <td><img src="views/img/usuarios/anonymous.png" class="img-thumbnail" width="40px" alt=""></td>
                <td>Administrador</td>
                <td><button class="btn btn-success btn-xs">Activado</button></td>
                <td>2018-24-07 9:56</td>
                <td>
                  
                  <div class="btn-group">
                    <button class="btn btn-warning"><i clasS="fa fa-pencil"></i></button>
                    <button class="btn btn-danger"><i clasS="fa fa-times"></i></button>
                  </div>
  

                </td>
              </tr>



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
  =            MODAL AGREGAR USUARIO            =
  ============================================-->
  
  <div id="modalAgregarUsuario" class="modal fade" role="dialog">

      <div class="modal-dialog">
          
        <div class="modal-content">

          <form role="form" method="post" enctype="multipart/form-data">

            <!--===========================================
            =           CABEZA DEL MODAL            =
            ============================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Agregar Usuario</h4>

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
                  <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar Nombre" required>

                </div><!--.input-group-->

              </div><!--.form-group-->

               <!-- ENTRADA PARA EL USUARIO -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-key"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar Usuario" required>

                </div><!--.input-group-->

              </div><!--.form-group-->

               <!-- ENTRADA PARA LA CONTRASEÑA -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar Contraseña" required>

                </div><!--.input-group-->

              </div><!--.form-group-->

               <!-- ENTRADA PARA EL PERFIL -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-users"></i></span>
                  <select class="form-control input-lg" name="nuevoPerfil">
                    <option value="">Seleccionar Perfil</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Especial">Especial</option>
                    <option value="Vendedor">Vendedor</option>
                  </select>

                </div><!--.input-group-->

              </div><!--.form-group-->

               <!-- ENTRADA PARA SUBIR FOTO -->
              <div class="form-group">
                  
                <div class="panel">Subir Foto</div>
                <input type="file" id="nuevaFoto" name="nuevaFoto">

                <p class="help-block">Peso máximo de la foto 200 MB</p>

                <img src="views/img/usuarios/anonymous.png"  class="img-thumbnail" width="100px" alt="">

              </div><!--.form-group-->

            </div>

          </div>

          <!--===========================================
            =           PIE DEL MODAL            =
            ============================================-->

          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary pull-right">Guardar Usuario</button>

          </div>

          </form>

        </div>

      </div>

  </div>
  
  <!--====  End of MODAL AGREGAR USUARIO  ====-->
  