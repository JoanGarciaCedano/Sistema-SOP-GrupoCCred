<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrar productos
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Administrar productos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-header with-border">
      
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">
            Agregar Producto
          </button>  

        </div><!--.box-header-->

        <div class="box-body">

          <table class="table table-bordered table-striped dt-responsive tablas">
          
            <thead>
              
              <tr>
                <th style="width: 10px">#</th>
                <th>Imagen</th>
                <th>Código</th>
                <th>Código CCred</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Stock</th>
                <th>Unidad</th>
                <th>Precio de compra</th>
                <th>Precio de venta</th>
                <th>Agregado</th>
                <th>Acciones</th>
              </tr>

            </thead>
        
            <tbody>
              
              <tr>
                <td>1</td>
                <td><img src="views/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                <td>1010101010</td>
                <td>CCR-1010101010</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nobis.</td>
                <td>TUBERÍA</td>
                <td>20</td>
                <td>ML</td>
                <td>$20.00</td>
                <td>$25.00</td>
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
                <td><img src="views/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                <td>1010101010</td>
                <td>CCR-1010101010</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nobis.</td>
                <td>TUBERÍA</td>
                <td>20</td>
                <td>ML</td>
                <td>$20.00</td>
                <td>$25.00</td>
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
                <td><img src="views/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                <td>1010101010</td>
                <td>CCR-1010101010</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nobis.</td>
                <td>TUBERÍA</td>
                <td>20</td>
                <td>ML</td>
                <td>$20.00</td>
                <td>$25.00</td>
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
  =            MODAL AGREGAR PRODUCTO           =
  ============================================-->
  
  <div id="modalAgregarProducto" class="modal fade" role="dialog">

      <div class="modal-dialog">
          
        <div class="modal-content">

          <form role="form" method="post" enctype="multipart/form-data">

            <!--===========================================
            =           CABEZA DEL MODAL            =
            ============================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Agregar Producto</h4>

          </div>

          <!--===========================================
            =           CUERPO DEL MODAL            =
            ============================================-->

          <div class="modal-body">

            <div class="box-body">
              
              <!-- ENTRADA PARA EL CODIGO PROVEEDOR -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-code"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoCodigo" placeholder="Ingresar Código Proveedor" required>

                </div><!--.input-group-->

              </div><!--.form-group-->

              <!-- ENTRADA PARA EL CODIGO CCRED -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-code"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoCodigoCCR" placeholder="Ingresar Código CCred" required>

                </div><!--.input-group-->

              </div><!--.form-group-->

               <!-- ENTRADA PARA LA DESCRIPCIÓN -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar Descripción" required>

                </div><!--.input-group-->

              </div><!--.form-group-->

               <!-- ENTRADA PARA SELECCIONAR CATEGORIA -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                  <select class="form-control input-lg" name="nuevaCategoria">

                    <option value="">Seleccionar Categoría</option>

                    <option value="Administrador">Taladros</option>

                    <option value="Especial">Andamios</option>

                    <option value="Vendedor">Tubería</option>

                  </select>

                </div><!--.input-group-->

              </div><!--.form-group-->

               <!-- ENTRADA PARA STOCK -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-check"></i></span>
                  <input type="number" class="form-control input-lg" name="nuevoStock" min="0" placeholder="Ingresar Cantidad" required>

                </div><!--.input-group-->

              </div><!--.form-group-->

               <!-- ENTRADA PARA UNIDAD -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-code"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevaUnidad" placeholder="Ingresar Unidad" required>

                </div><!--.input-group-->

              </div><!--.form-group-->

               <!-- ENTRADA PARA PRECIO COMPRA -->

              <div class="form-group row">

                <div class="col-xs-6">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span>
                    <input type="text" class="form-control input-lg" name="nuevoPrecioCompra" placeholder="Ingresar Precio de Compra" required>

                  </div><!--.input-group-->

                </div>

               <!-- ENTRADA PARA PRECIO DE VENTA -->
                  
                <div class="col-xs-6">  

                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span>
                    <input type="text" class="form-control input-lg" name="nuevoPrecioVenta" placeholder="Ingresar Precio de Venta" required>

                  </div><!--.input-group-->
              
                  <br>
          
                  <!-- CHECKBOX PARA PORCENTAJE -->
  
                  <div class="col-xs-6">
                    
                    <div class="form-group">
                      
                      <label>

                        <input type="checkbox" class="minimal porcentaje" checked>
                        Utilizar porcentaje

                      </label>

                    </div>

                  </div>

                  <!-- ENTRADA PARA PORCENTAJE -->

                  <div class="col-xs-6" style="padding: 0">
                    
                    <div class="input-group">
                      
                      <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>

                      <span class="input-group-addon"><i class="fa fa-percent"></i></span>

                    </div>

                  </div>

                </div>

              </div><!--.form-group-->


               <!-- ENTRADA PARA SUBIR FOTO -->
              <div class="form-group">
                  
                <div class="panel">Subir Imagen</div>
                <input type="file" id="nuevaImagen" name="nuevaImagen">

                <p class="help-block">Peso máximo de la foto 2MB</p>

                <img src="views/img/productos/default/anonymous.png"  class="img-thumbnail" width="100px" alt="">

              </div><!--.form-group-->

            </div>

          </div>

          <!--===========================================
            =           PIE DEL MODAL            =
            ============================================-->

          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary pull-right">Guardar Producto</button>

          </div>

          </form>

        </div>

      </div>

  </div>
  
  <!--====  End of MODAL AGREGAR USUARIO  ====-->
  