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

    <!-- Main content -->
    <section class="content">
  
      <div class="row">

        <!--===================================
        =            EL FORMULARIO            =
        ====================================-->    
        
        <div class="col-lg-5 col-xs-12">
          
          <div class="box box-success">
            
            <div class="box-header with-border"></div>
              
              <form role="form" method="post">

                <div class="box-body">
                
                  <div class="box">

                  <!--==========================================
                  =            ENTRADA DEL VENDEDOR            =
                  ===========================================-->
                  
                  <div class="form-group">
                    
                    <div class="input-group">
                      
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>

                      <input type="text" class="form-control" id="nuevoVendedor" name="nuevoVendedor" value="Usuario Administrador" readonly>
  
                    </div><!--.input-group-->

                  </div><!--.form-group-->



                  <!--========================================
                  =       ENTRADA CODIGO DE LA VENTA         =
                  =========================================-->
                  
                  <div class="form-group">
                    
                    <div class="input-group">
                      
                      <span class="input-group-addon"><i class="fa fa-key"></i></span>
                      <input type="text" class="form-control" id="nuevaVenta" name="nuevaVenta" value="10002343" readonly>
  
                    </div><!--.input-group-->

                  </div><!--.form-group-->
                  
                  <!--========================================
                  =            ENTRADE DEL CLIENTE            =
                  =========================================-->
                  
                  <div class="form-group">
                    
                    <div class="input-group">
                      
                      <span class="input-group-addon"><i class="fa fa-users"></i></span>
                      <select type="text" class="form-control" id="seleccionarCliente" name="seleccionarCliente" value="Agregar cliente" required>

                      <option value="">Seleccionar cliente</option>

                      </select>

                      <span class="input-group-addon"><button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#modalAgregarCliente" data-dismiss="modal">Agregar cliente</button></span>
  
                    </div><!--.input-group-->

                  </div><!--.form-group-->

                  <!--========================================
                  =    ENTRADE PARA AGREGAR PRODUCTO          =
                  =========================================-->
                  
                  <div class="form-group row nuevoProducto">

                    <!-- Descripción del producto -->
                    
                    <div class="col-xs-6" style="padding-right: 0px">
                      
                      <div class="input-group">
                        
                        <span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></span>

                        <input type="text" class="form-control" id="agregarProducto" name="agregarProducto" placeholder="Descripción del producto" required>

                      </div>

                    </div><!--.col-xs-6-->

                    <!-- Cantidad del producto -->

                    <div class="col-xs-3">
                      
                      <input type="number" class="form-control" id="nuevaCantidadProducto" name="nuevaCantidadProducto" min="1" placeholder="0" required>

                    </div><!--.col-xs-3-->

                    <!-- Precio del producto -->

                    <div class="col-xs-3" style="padding-left: 0px">
                      
                      <div class="input-group">
                        
                        <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                        <input type="number" min="1" class="form-control" id="nuevoPrecioProducto" name="nuevoPrecioProducto" placeholder="0000000" readonly required>
 
                      </div><!--.input-group-->
            
                    </div><!--.col-xs-3-->

                  </div> 

                  <!--=================================================
                  =            BOTON PARA AGREGAR PRODUCTO            =
                  ==================================================-->  

                  <button type="button" class="btn btn-default hidden-lg">Agregar producto</button>

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
                                <input type="number" class="form-control" min="0" id="nuevoImpuestoVenta" name="nuevoImpuestoVenta" placeholder="0" required>
                                <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                              </div>
                            </td>

                            <td style="width: 50%">
                              <div class="input-group">
                                <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
                                <input type="number" min="1" class="form-control" id="nuevoTotalVenta" name="nuevoTotalVenta" placeholder="000000" readonly required>
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
                          <option value="efectivo">Efectivo</option>
                          <option value="tarjetaCredito">Tarjeta de Crédito</option>
                          <option value="tarjetaDebito">Tarjeta de Débito</option>
                        </select>

                      </div> <!--.form-group--> 

                    </div><!--.col-xs-6-->

                    <div class="col-xs-6" style="padding-left: 0px;">
                      
                      <div class="input-group">
                        
                        <input type="text" class="form-control" id="nuevoCodigoTransaccion" name="nuevoCodigoTransaccion" placeholder="Código transacción" required>

                        <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                      </div><!--.input-group-->
          
                    </div><!--.col-xs-6-->

                  </div> <!--.row-->

                  <br>       

                </div><!--.box-principal-->

              </div><!--.box-body-->

            <div class="box-footer">
                
              <button type="submit" class="btn btn-primary pull-right">Guardar venta</button>

            </div> <!--.box-footer-->

          </form><!--.form-->
        
        </div>

      </div><!--.box-->

        <!--=========================================================
        =            LA TABLA DE PRODUCTOS EN ESCRITORIO            =
        ==========================================================-->

            <div class="col-lg-7 hidden-md hidden-sm hidden-xs">
              
              <div class="box box-warning">
                
                <div class="box-header with-border"></div>

                <div class="box-body">
                  
                  <table class="table table-bordered table-striped dt-responsive tablas">
                    
                    <thead>
                      
                      <tr>
                        
                        <th style="width: 10px">#</th>
                        <th>Imagen</th>
                        <th>Código</th>
                        <th>Descripción</th>
                        <th>Categoría</th>
                        <th>Stock</th>
                        <th>Acciones</th>

                      </tr>

                    </thead>

                    <tbody>
                      
                      <tr>
                        
                        <td>1.</td>
                        <td><img src="views/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                        <td>00123</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, vitae!</td>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>20</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-success">Agregar</button>
                          </div>
                        </td>
  

                      </tr>

                    </tbody>

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

  
  