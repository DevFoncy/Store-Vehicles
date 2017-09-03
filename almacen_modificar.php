<?php include 'inc/header.php';
      include 'inc/header2.php';
?>  
        <div class="col-md-12">
                    <h1 align="center" style="color:white;">Modificar Productos</h1>
                    <h4 style="color:white" align="center"> Seleccione el producto a modificar 
                    <button type="button" onclick="llamar_almacen()" style="background-color: black"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </h4>


                        <!--Datos del Producto-->         
                        <div class="col-md-6">

                        <!--Datos de la Caja-->
                            <h3 style="color:white"><strong style="color:red">1) </strong> Detalle de la Caja</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 style="color:white">STOCK DE LA CAJA</h5>
                                    <div class="form-group">
                                        <input name =stock_total_caja type="number" class="form-control" id="stock_total_caja" placeholder="Ingrese el stock aqui" value=200> 
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h5 style="color:white">DESCRIPCION(Opcional)</h5>
                                     <div class="form-group">
                                        <input name =descripcion_caja type="text" class="form-control" id="" placeholder="ingrese la descripcion aqui" value="Caja en buen estado">
                                     </div>
                                </div>                                
                            </div>

                        <!--Datos del Producto-->
                            <h3 style="color:white"><strong style="color:red">2) </strong> Detalle del Producto</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 style="color:white">CÓDIGO</h5>
                                    <div class="form-group">
                                        <input name =codigo_producto type="text" class="form-control" id="codigo_producto" placeholder="Ingrese el código aqui" value="A1"> 
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h5 style="color:white">NOMBRE</h5>
                                     <div class="form-group">
                                        <input name =nombre_producto type="text" class="form-control" id="" placeholder="ingrese el nombre aquí" value="Luces interminentes">
                                     </div>
                                </div>                                
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <h5 style="color:white">CATEGORIA</h5>
                                    <div class="form-group">
                                        <input name =categoria_producto type="text" class="form-control" id="" placeholder="Ingrese la categoria aqui" value="Luces">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h5 style="color:white">DESCRIPCION (Opcional)</h5>
                                    <div class="form-group">
                                        <input name =descripcion_producto type="text" class="form-control" id="" placeholder="Ingrese la descripcion aqui">
                                    </div>
                                </div>
                            </div>

                        </div>    
                        <div class="col-md-6">

                            <!--Detalles del color -->
                            <h3 style="color:white"><strong style="color:red">3) </strong> Detalles del Color</h3>
                            <div class="row">
                                <div class="col-md-5">
                                    <input id="color_puro" style="margin-right:5px; " type="radio" name="gender" value="male"> <label style="font-size: 16px">Color puro en la caja</label> 
                                </div>
                                <div class="col-md-6">
                                    <input id="color_mezclado" style="margin-right:8px; " type="radio" name="gender" value="male" ><label style="font-size: 16px">Colores mezclados en la caja</label> 
                                </div>
                            </div>
                                <!--Cuando el color es puro en la caja-->
                                <div class="row" style="display: none;" id="CajaColor">
                                   
                                            <div class="col-md-6" id="Color">
                                                <h5 style="color:white">COLOR</h5>
                                                <!--Aca va la lista de Colores-->
                                                <input type="text" size="25" class="color" id="color1" value="Amarillo">
                                                <input type="text" size="25" class="color" id="color2" value="Rojo">
                                                <input type="text" size="25" class="color" id="color3" value="Azul">
                                                
                                            </div>
                                            <div class="col-md-2 " id="Cantidad">
                                                <h5 style="color:white">UNIDADES</h5>
                                                <!--Aca va la lista de Unidades-->                    
                                                <input type="number"  class="cantidad" id="cantidad1" onchange="validar(1)" value=200>
                                                <input type="number" class="cantidad" id="cantidad2" onchange="validar(2)" value=150 >
                                                <input type="number" class="cantidad" id="cantidad3" onchange="validar(3)" value=200>
                                                
                                            </div>
                                            <div class="col-md-1" id="Cajas">
                                                <h5 style="color:white">CAJAS</h5>
                                                <!--Aca va la lista de Caja-->
                                                <input type="number" class="caja" id="caja1" value=2>

                                                <input type="number" class="caja" id="caja2" value=2>

                                                <input type="number" class="caja" id="caja3" value=2>
                                            </div>
                                     
                                <!--Boton para disminuir registros-->

                                        <button id="less" type="button"  style="height: 40px ; width: 45px; padding-right: 20px; padding-left: 8px;" class="btn btn-info pull-right"><i class="fa fa-minus-square fa-2x" aria-hidden="true"></i></button>

                                        <!--Boton para aumentar registros-->                                       
                                        <button id="add" name="suma" type="button" style="height: 40px ; width: 45px; padding-right: 20px; padding-left: 10px; margin-right: 10px;" class="btn btn-info pull-right" ><i class="fa fa-plus-square fa-2x" aria-hidden="true"></i></button>
                                        
                                        <div class="col-md-1 col-md-offset-1" id="Imagen">
                                            
                                        </div>
                                </div>
                                <!--Fin-->

                                <!--Cuando el color es mezclado-->
                                <div class="row" id="ColorMezclado" style="display: none;">

                                            <div class="col-md-7" id="Colorm">
                                                <h5 style="color:white">LISTA DE COLORES</h5>
                                                <input type="text" size="30" value="Rojo" class="color" id="colorm1">
                                                <input type="text" size="30" value="Amarillo" class="color" id="colorm2">
                                                
                                            </div>
                                            <div class="col-md-2 " id="Cantidadm">
                                                <h5 style="color:white">CANTIDAD</h5>
                                                <input type="number" class="cantidad" id="cantidadm1" value="150">
                                                <input type="number" class="cantidad" id="cantidadm2" value="50">
                                                
                                            </div>

                                            <div class="col-md-1 col-md-offset-1">                                 
                                                <button id="add2" name="suma" type="button" style="height: 40px ; width: 45px; padding-right: 20px; padding-left: 10px; margin-right: 10px;" class="btn btn-info " ><i class="fa fa-plus-square fa-2x" aria-hidden="true"></i></button>
                                            </div>

                                         <div class="col-md-1">
                                            <button id="less2" type="button"  style="height: 40px ; width: 45px; padding-right: 20px; padding-left: 8px;" class="btn btn-info "><i class="fa fa-minus-square fa-2x" aria-hidden="true"></i></button>
                                         </div>    
                                     
                                </div>
                                <!--FIN-->
                                <br><br><br>
                                <div class="row">
                                    
                                     <button type="button" class="btn btn-lg pull-right" style="margin-right: 20px;" onclick="mandar()">
                                      <span class="glyphicon glyphicon-floppy-disk"></span> Registrar Productos
                                    </button>


                                </div>

                                <!--Fin-->
                        </div>
                    </div>
        </div>
   <?php include 'inc/footer.php';?>
