<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Proyecto de Motos</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="alertas/dist/sweetalert.css">
    </head>

    <body>

        <!-- Top content -->
        
        <!-- Top content -->
        <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                    <div class="navbar-header">
                      <a class="navbar-brand" href="ventas.html"><i class="fa fa-windows" aria-hidden="true"></i> Módulo de Almacén </a>
                    </div>
                    <ul class="nav navbar-nav">
                          <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="almacen_registrar.html"><span class="glyphicon glyphicon-import"></span> Entrada de Productos
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                  <li><a href="almacen_registrar.html">Registrar Productos</a></li>
                                  <li><a href="almacen_modificar.html">Modificar Productos</a></li>
                            </ul>
                          </li>

                          <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="glyphicon glyphicon-export"></span> Salida de Productos
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                  <li><a href="almacen_salida_ventas">Local de Ventas</a></li>
                                  <li><a href="#">Local de Venta 2</a></li>
                                  <li><a href="#">Local de Venta 3</a></li>
                            </ul>
                          </li>

                          <li><a href="almacen_inventario.html"><span class="glyphicon glyphicon-th-list"></span>  Mi inventario</a></li>

                    </ul>
                    <!--Salir Session -->
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Mi Perfil</a></li>
                      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Desconectarse</a></li>
                    </ul>
              </div>
        </nav>
        

            <div class="col-md-12">
                <h1 align="center" style="color:white;">Salida de Productos : <strong> Nuevo Local de Ventas</strong></h1>
                  <div class="form-group" align="center">
                    <label style="font-size:18px;"> Seleccione el producto del almacen a mandar al Local de Ventas :</label>
                    <button onclick="llamar_almacen()"> <strong>Buscar</strong> <i class="fa fa-search" aria-hidden="true"></i> </button>
                    <h3 style="color:white"><strong>PRODUCTO ELEGIDO -> </strong> Luces Interminentes</h3>
                    
                   </div>
                  <div class="row">
                  <div class="col-md-6">
                <h3 align="center" style="color: white">Lista de colores del producto Luces Interminentes</h3>
                    <table class="tabla_registro">
                    <tr bgcolor="#D5EAFF">
                        <td bgcolor="#D5EAFF" align="center" width="3%" ><strong>N°</strong></td>
                        <td bgcolor="#D5EAFF" align="center" width="25%"><strong>Cantidad de Unidades-Color</strong></td>
                        <td bgcolor="#D5EAFF" align="center" width="10%"><strong>Cantidad de Cajas</strong></td>
                        <td bgcolor="#D5EAFF" align="center" width="10%"><strong>Accion</strong></td>
                    </tr>
                    <tr>
                        <td  bgcolor="white" align="center">1</td>
                        <td  bgcolor="white" align="center">200 Negro Puro</td>
                        <td  bgcolor="white" align="center">2</td>
                        <input id="cantidad_cajas1" value="2" name="" hidden="true"></input>
                        <input id="nombre_caja1" value="200 Negro Puro" hidden="true"></input>
                        <td  bgcolor="white" align="center"><button onclick="agregar_salida(1)" data-toggle="modal" data-target="#Carrito_Salida" ><i class="fa fa-cart-plus fa-1x" aria-hidden="true"></i> Agregar</button></td>
                    </tr>

                    <tr>
                        <td  bgcolor="white" align="center">2</td>
                        <td  bgcolor="white" align="center">200 Rojo Puro</td>
                        <td  id="cantidad_cajas2" bgcolor="white" align="center">1</td>
                        <input id="cantidad_cajas2" value="1" name="" hidden="true"></input>
                        <input id="nombre_caja2" value="200 Rojo Puro" hidden="true"></input>                
                        <td  bgcolor="white" align="center"><button onclick="agregar_salida(2)" data-toggle="modal" data-target="#Carrito_Salida"  ><i class="fa fa-cart-plus fa-1x" aria-hidden="true"></i> Agregar</button></td>
                    </tr>


                    <tr>
                        <td  bgcolor="white" align="center">3</td>
                        <td  bgcolor="white" align="center">100 rojo y 100 negro</td>
                        <td  bgcolor="white" align="center">1</td>
                        <input id="cantidad_cajas3" value="1" name="" hidden="true"></input>
                        <input id="nombre_caja3" value="100 rojo y 100 negro" hidden="true"></input>
                        <td  bgcolor="white" align="center"><button onclick="agregar_salida(3)" data-toggle="modal" data-target="#Carrito_Salida" ><i class="fa fa-cart-plus fa-1x" aria-hidden="true"></i> Agregar</button></td>
                    </tr>

                    <tr>
                        <td  bgcolor="white" align="center">4</td>
                        <td  bgcolor="white" align="center">100 azul</td>
                        <td  bgcolor="white" align="center">1</td>
                        <input id="cantidad_cajas4" value="1" name="" hidden="true"></input>
                        <input id="nombre_caja4" value="100 azul" hidden="true"></input>
                        <td  bgcolor="white" align="center"><button onclick="agregar_salida(4)" data-toggle="modal" data-target="#Carrito_Salida" ><i class="fa fa-cart-plus fa-1x" aria-hidden="true"></i> Agregar</button></td>
                    </tr>
                    
                    </table>
                  </div>  
                  <!--Lista de productos que se enviaran a la zona de ventas con las cantidades en caja-->  
                  <div class="col-md-6">
                        <h3 align="center" style="color: white">Lista de Productos a enviar</h3>
                        <form method="POST" role="form" id="form_envio_productos">
                        <table id="lista_final" class="tabla_registro">
                        <tr bgcolor="#D5EAFF">
                            <td bgcolor="#D5EAFF" align="center" width="3%" ><strong>N°</strong></td>
                            <td bgcolor="#D5EAFF" align="center" width="25%"><strong>Cantidad de Unidades-Color</strong></td>
                            <td bgcolor="#D5EAFF" align="center" width="10%"><strong>Cantidad de Cajas</strong></td>
                            <td bgcolor="#D5EAFF" align="center" width="10%"><strong>Accion</strong></td>
                        </tr>

                        <!--Aca se agregan dinamicamente los colores a enviar del producto-->

                        <!--Fin-->
            
                    </table>
                    <br><br>
                    <button type="button" onclick="mandar_salida();" class="pull-right"> <span class="glyphicon glyphicon-envelope"></span> Enviar Productos </button> 
                    </form>     
                  </div>

        </div>
            
           
        <!--Modal-->
        <div class="modal fade" id="Carrito_Salida">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                  <div class="modal-header">
                      <h3 class="modal-title"><strong>Ingrese cantidad de cajas</strong></h3>
                      
                  </div>
                  <div class="modal-body">
                      <!--El input se pone para capturar el valor del Color-->
                      <h4 id="nombre_actual" align="center" style="color:#1646C9"> </h4>
                      <input id="nombre_actual1" type="text" name="" hidden="">
                
                      <h4  id="cantidad_actual" style="color: red"> </h4>
                      
                      <div class="row">
                        <div class="col-md-3">
                          <input id="cantidad_escogida_caja" type="number" name="" placeholder="Ingrese la cantidad aca">
                        </div>
                        <div class="col-md-3 col-md-offset-1">
                          <button id="boton_cerrado" onclick="verificar_cantidad()"> Añadir pedido</button> 
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                  <button id="" type="button" data-dismiss="modal"> Cerrar </button>
                  </div>
            </div>
          </div>
        </div>
        <!--FinModal-->
 </div>
       
        <!-- Javascript -->
        <script src="assets/js/envio_productos.js"></script>
        <script src="assets/js/confirmaciones/almacen.js" ></script>
        <script src="alertas/dist/sweetalert.min.js"></script>
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="assets/js/campos_dinamicos.js"> </script>
    </body>

</html>