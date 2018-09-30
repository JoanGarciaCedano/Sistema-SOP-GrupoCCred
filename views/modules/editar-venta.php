<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>

        Crear venta

      </h1>

      <ol class="breadcrumb">

        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

        <li class="active">Crear Venta</li>

      </ol>

    </section><!--content-header-principal-->

    <section class="content">
  
      <div class="row">

        <!--===================================
        =            EL FORMULARIO            =
        ====================================-->    
        
        <div class="col-lg-5 col-xs-12">
          
          <div class="box box-success">
            
            <div class="box-header with-border"></div>
              
              <form role="form" method="post" class="formularioVenta">

                <div class="box-body">
                
                  <div class="box">

                    <?php 

                          $item = "id";
                          $valor = $_GET["idVenta"];

                          $venta = ControladorVentas::ctrMostrarVentas($item, $valor);

                          $itemUsuario = "id";
                          $valorUsuario = $venta["id_vendedor"];

                          $vendedor = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

                          $itemCliente = "id";
                          $valorCliente = $venta["id_cliente"];

                          $cliente = ControladorClientes::ctrMostrarClientes($itemCliente, $valorCliente);

                          $porcentajeImpuesto = $venta["impuesto"] * 100 / $venta["neto"];
                    ?>
                  <!--==========================================
                  =            ENTRADA DEL VENDEDOR            =
                  ===========================================-->
                  
                  <div class="form-group">
                    
                    <div class="input-group">
                      
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>

                      <input type="text" class="form-control" id="nuevoVendedor" value="<?php echo $vendedor["nombre"];?>" readonly>

                      <input type="hidden" name="idVendedor" value="<?php echo $vendedor["id"];?>">
  
                    </div><!--.input-group-->

                  </div><!--.form-group-->

                  <!--========================================
                  =       ENTRADA CODIGO DEL CODIGO         =
                  =========================================-->
                  
                  <div class="form-group">
                    
                    <div class="input-group">
                      
                      <span class="input-group-addon"><i class="fa fa-key"></i></span>

                            <input type="text" class="form-control" id="nuevaVenta" name="editarVenta" value="<?php echo $venta["codigo"];?>" readonly>
  
                    </div>

                  </div>
                  
                  <!--========================================
                  =            ENTRADA DEL CLIENTE            =
                  =========================================-->
                  
                  <div class="form-group">
                    
                    <div class="input-group">
                      
                      <span class="input-group-addon"><i class="fa fa-users"></i></span>
                      <select type="text" class="form-control" id="seleccionarCliente" name="seleccionarCliente" value="Agregar cliente" required>

                      <option value="<?php echo $cliente["id"];?>"><?php echo $cliente["nombre"]?></option>

                      <?php 

                        $item = null;
                        $valor = null;

                        $categorias = ControladorClientes::ctrMostrarClientes($item,$valor);

                        foreach ($categorias as $key => $value) {
                           
                          echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';

                        }

                       ?>

                      </select>

                      <span class="input-group-addon"><button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#modalAgregarCliente" data-dismiss="modal">Agregar cliente</button></span>
  
                    </div><!--.input-group-->

                  </div><!--.form-group-->

                  <!--========================================
                  =    ENTRADA PARA AGREGAR PRODUCTO          =
                  =========================================-->
                  
                  <div class="form-group row nuevoProducto">

                    <?php 

                    $listaProducto = json_decode($venta["productos"], true);

                    foreach($listaProducto as $key => $value){

                      $item = "id";
                      $valor = $value["id"];

                      $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor);

                      $stockAntiguo = $respuesta["stock"]+$value["cantidad"];

                       echo '<div class="row" style="padding:5px 15px">
                                  
                                  <div class="col-xs-6" style="padding-right:0px">
                                
                                    <div class="input-group">
                                      
                                      <span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs quitarProducto" idProducto="'.$value["id"].'"><i class="fa fa-times"></i></button></span>

                                      <input type="text" class="form-control nuevaDescripcionProducto" idProducto="'.$value["id"].'" name="agregarProducto" value="'.$value["descripcion"].'" readonly required>

                                    </div>

                                  </div>

                                  <div class="col-xs-3">
                                    
                                     <input type="number" class="form-control nuevaCantidadProducto" name="nuevaCantidadProducto" min="1" value="'.$value["cantidad"].'" stock="'.$stockAntiguo.'" nuevoStock="'.$value["stock"].'" required>

                                  </div>

                                  <div class="col-xs-3 ingresoPrecio" style="padding-left:0px">

                                    <div class="input-group">

                                      <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
                                         
                                      <input type="text" class="form-control nuevoPrecioProducto" precioReal="'.$respuesta["precio_venta"].'" name="nuevoPrecioProducto" value="'.$value["total"].'" readonly required>
                         
                                    </div>
                                     
                                  </div>

                                </div>';

                    }

                     ?>

                  </div>

                  <input type="hidden" id="listaProductos" name="listaProductos">   

                  <!--=================================================
                  =            BOTON PARA AGREGAR PRODUCTO            =
                  ==================================================-->  

                  <button type="button" class="btn btn-default hidden-lg btnAgregarProducto">Agregar producto</button>

                  <hr>

                  <div class="row">
                    
                    <div class="col-xs-8 pull-right">
                      
                      <table class="table">
                        
                        <thead>
                          
                          <tr>
                            <th>Impuesto</th>
                            <th>Total</th>
                          </tr>

                        </thead>

                        <tbody>
                            
                          <tr>
                            <td style="width: 50%">
                              <div class="input-group">
                                <input type="number" class="form-control input-lg" min="0" id="nuevoImpuestoVenta" name="nuevoImpuestoVenta" value="<?php echo $porcentajeImpuesto; ?>" required>
  
                                <input type="hidden" name="nuevoPrecioImpuesto" id="nuevoPrecioImpuesto" value="<?php echo $venta["impuesto"];?>" required>

                                <input type="hidden" name="nuevoPrecioNeto" id="nuevoPrecioNeto" value="<?php echo $venta["neto"];?>" required>
  
                                <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                              </div>
                            </td>

                            <td style="width: 50%">
                              <div class="input-group">

                                <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
                                <input type="text" min="1" class="form-control input-lg" id="nuevoTotalVenta" name="nuevoTotalVenta" total="<?php echo $venta["neto"];?>" value="<?php echo $venta["total"];?>" readonly required>

                                <input type="hidden" name="totalVenta" id="totalVenta" value="<?php echo $venta["total"];?>">

                              </div>
                            </td>
                          </tr>
                          

                        </tbody>
                        
                      </table>

                    </div>

                  </div><!--.row-->

                  <hr>
  
                  <!--============================================
                  =            ENTRADA METODO DE PÁGO            =
                  =============================================-->

                  <div class="row">
                    
                    <div class="col-xs-6">
                      
                      <div class="form-group">
                    
                        <select class="form-control" id="nuevoMetodoPago" name="nuevoMetodoPago" required> 
                          <option value="">Seleccione método de pago</option>
                          <option value="Efectivo">Efectivo</option>
                          <option value="TC">Tarjeta de Crédito</option>
                          <option value="TD">Tarjeta de Débito</option>
                        </select>

                      </div> <!--.form-group--> 

                    </div><!--.col-xs-6-->

                    <div class="cajasMetodoPago">
                      


                    </div>

                    <input type="hidden" name="listaMetodoPago" id="listaMetodoPago">

                    <!-- Se retiró caja de 6 columntas para el codigo de transacción -->

                  </div> <!--.row-->

                  <br>       

                </div><!--.box-principal-->

              </div><!--.box-body-->

            <div class="box-footer">
                
              <button type="submit" class="btn btn-primary pull-right">Guardar Cambios</button>

            </div> <!--.box-footer-->

          </form><!--.form-->

          <?php 

          $editarVenta = new ControladorVentas();
          $editarVenta -> ctrEditarVenta();

           ?> 
        
        </div>

      </div><!--.box-->

        <!--=========================================================
        =            LA TABLA DE PRODUCTOS EN ESCRITORIO            =
        ==========================================================-->

            <div class="col-lg-7 hidden-md hidden-sm hidden-xs">
              
              <div class="box box-warning">
                
                <div class="box-header with-border"></div>

                <div class="box-body">
                  
                  <table class="table table-bordered table-striped dt-responsive tablaVentas">
                    
                    <thead>
                      
                      <tr>
                        
                        <th style="width: 10px">#</th>
                        <th>Imagen</th>
                        <th>Código</th>
                        <th>Descripción</th>
                        <th>Stock</th>
                        <th>Unidad</th>
                        <th>Acciones</th>

                      </tr>

                    </thead>

                  </table>

                </div>

              </div><!--.box-->

            </div><!--.col-lg-7-->

        </section><!-- /.content -->
        
      </div> <!-- /.content-wrapper --> 

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

  
  