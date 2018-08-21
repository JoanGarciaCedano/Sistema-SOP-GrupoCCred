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

          <table class="table table-bordered table-striped dt-responsive tablaProductos">
          
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
        
            <!-- <tbody>

              <?php 

                $item = null;
                $valor = null;

                $productos = ControladorProductos::ctrMostrarProductos($item, $valor);

                foreach ($productos as $key => $value) {
                    
                    echo '<tr>
                            <td>'.($key+1).'</td>
                            <td><img src="views/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                            <td>'.$value["codigo"].'</td>
                            <td>'.$value["codigoCCR"].'</td>
                            <td>'.$value["descripcion"].'</td>';

                            $item = "id";
                            $valor = $value["id_categoria"];

                            $categoria = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                            echo '<td>'.$categoria["categoria"].'</td>
                            <td>'.$value["stock"].'</td>
                            <td>'.$value["unidad"].'</td>
                            <td>$'.$value["precio_compra"].'</td>
                            <td>$'.$value["precio_venta"].'</td>
                            <td>'.$value["fecha"].'</td>
                            <td>
                              
                              <div class="btn-group">
                                <button class="btn btn-warning"><i clasS="fa fa-pencil"></i></button>
                                <button class="btn btn-danger"><i clasS="fa fa-times"></i></button>
                              </div>
              

                            </td>
                          </tr>';

                }

               ?>
              
            </tbody> -->

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

               <!-- ENTRADA PARA SELECCIONAR CATEGORIA -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                  <select class="form-control input-lg" name="nuevaCategoria" id="nuevaCategoria" required>

                    <option value="">Seleccionar Categoría</option>

                    <?php 

                    $item = null;
                    $valor = null;

                    $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                    foreach ($categorias as $key => $value) {
                      
                      echo ' <option value="'.$value["id"].'">'.$value["categoria"].'</option>';

                    }

                     ?>

                  </select>

                </div><!--.input-group-->

              </div><!--.form-group-->
              
              <!-- ENTRADA PARA EL CODIGO PROVEEDOR -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-code"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoCodigo" id="nuevoCodigo" placeholder="Ingresar Código Proveedor" readonly required>

                </div><!--.input-group-->

              </div><!--.form-group-->

              <!-- ENTRADA PARA EL CODIGO CCRED -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-code"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoCodigoCCR" placeholder="Ingresar Código CCred">

                </div><!--.input-group-->

              </div><!--.form-group-->

               <!-- ENTRADA PARA LA DESCRIPCIÓN -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar Descripción" required>

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
                  <input type="text" class="form-control input-lg" name="nuevaUnidad" placeholder="Ingresar Unidad">

                </div><!--.input-group-->

              </div><!--.form-group-->

               <!-- ENTRADA PARA PRECIO COMPRA -->

              <div class="form-group row">

                <div class="col-xs-12 col-sm-6">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span>
                    <input type="text" class="form-control input-lg" name="nuevoPrecioCompra" id="nuevoPrecioCompra" min="0" step="any" placeholder="Ingresar Precio de Compra" required>

                  </div><!--.input-group-->

                </div>

               <!-- ENTRADA PARA PRECIO DE VENTA -->
                  
                <div class="col-xs-12 col-sm-6">  

                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span>
                    <input type="text" class="form-control input-lg" name="nuevoPrecioVenta" id="nuevoPrecioVenta" min="0" step="any"  placeholder="Ingresar Precio de Venta" required>

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
                <input type="file" class="nuevaImagen" name="nuevaImagen">

                <p class="help-block">Peso máximo de la foto 2MB</p>

                <img src="views/img/productos/default/anonymous.png"  class="img-thumbnail previsualizar" width="100px" alt="">

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
  
          <?php 

          $crearProducto = new ControladorProductos();
          $crearProducto -> ctrCrearProducto();

           ?>

        </div>

      </div>

  </div>
  
  <!--====  End of MODAL AGREGAR PRODUCTO  ====-->
  

  <!--===========================================
  =            MODAL EDITAR PRODUCTO           =
  ============================================-->
  
  <div id="modalEditarProducto" class="modal fade" role="dialog">

      <div class="modal-dialog">
          
        <div class="modal-content">

          <form role="form" method="post" enctype="multipart/form-data">

            <!--===========================================
            =           CABEZA DEL MODAL            =
            ============================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Editar Producto</h4>

          </div>

          <!--===========================================
            =           CUERPO DEL MODAL            =
            ============================================-->

          <div class="modal-body">

            <div class="box-body">

               <!-- ENTRADA PARA SELECCIONAR CATEGORIA -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                  <select class="form-control input-lg" name="editarCategoria" readonly required>

                    <option id="editarCategoria"></option>

                  </select>

                </div><!--.input-group-->

              </div><!--.form-group-->
              
              <!-- ENTRADA PARA EL CODIGO PROVEEDOR -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-code"></i></span>
                  <input type="text" class="form-control input-lg" name="editarCodigo" id="editarCodigo" readonly required>

                </div><!--.input-group-->

              </div><!--.form-group-->

              <!-- ENTRADA PARA EL CODIGO CCRED -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-code"></i></span>
                  <input type="text" class="form-control input-lg" name="editarCodigoCCR" id="editarCodigoCCR" placeholder="Ingresar Código CCred">

                </div><!--.input-group-->

              </div><!--.form-group-->

               <!-- ENTRADA PARA LA DESCRIPCIÓN -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>
                  <input type="text" class="form-control input-lg" name="editarDescripcion" id="editarDescripcion" required>

                </div><!--.input-group-->

              </div><!--.form-group-->

               <!-- ENTRADA PARA STOCK -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-check"></i></span>
                  <input type="number" class="form-control input-lg" name="editarStock" id="editarStock"min="0" required>

                </div><!--.input-group-->

              </div><!--.form-group-->

               <!-- ENTRADA PARA UNIDAD -->
              <div class="form-group">
                  
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-code"></i></span>
                  <input type="text" class="form-control input-lg" name="editarUnidad" id="editarUnidad" placeholder="Ingresar Unidad">

                </div><!--.input-group-->

              </div><!--.form-group-->

               <!-- ENTRADA PARA PRECIO COMPRA -->

              <div class="form-group row">

                <div class="col-xs-12 col-sm-6">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span>
                    <input type="text" class="form-control input-lg" name="editarPrecioCompra" id="editarPrecioCompra" min="0" step="any" required>

                  </div><!--.input-group-->

                </div>

               <!-- ENTRADA PARA PRECIO DE VENTA -->
                  
                <div class="col-xs-12 col-sm-6">  

                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span>
                    <input type="text" class="form-control input-lg" name="editarPrecioVenta" id="editarPrecioVenta" min="0" readonly>

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
                <input type="file" class="nuevaImagen" name="editarImagen">

                <p class="help-block">Peso máximo de la foto 2MB</p>

                <img src="views/img/productos/default/anonymous.png"  class="img-thumbnail previsualizar" width="100px" alt="">

                <input type="hidden" name="imagenActual" id="imagenActual">

              </div><!--.form-group-->

            </div>

          </div>

          <!--===========================================
            =           PIE DEL MODAL            =
            ============================================-->

          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary pull-right">Guardar Cambios</button>

          </div>

          </form>
  
          <?php 

           $editarProducto = new ControladorProductos();
           $editarProducto -> ctrEditarProducto();

           ?>

        </div>

      </div>

  </div>

  <?php 

    $eliminarProducto = new ControladorProductos();
    $eliminarProducto -> ctrEliminarProducto();

   ?>