<?php include 'inc/header.php';
      include 'inc/header2.php';
?>

        <div class="col-md-12">
                    <h1 align="center" style="color:white;">Registro de Nuevos Productos</h1>
                    <h4 style="color:white"> Ingrese el codigo del producto en función a la caja sellada que le ha llegado, luego complete los demas datos y finalmente los colores (puro o mezclado )</h4> 

                        <!--Datos del Producto-->         
                        <div class="col-md-6">

                        <!--Datos de la Caja-->
                            <h3 style="color:white"><strong style="color:red">1) </strong> Detalle de la Caja</h3>
                            <div class="row">
                           <form name="form2_registrar_almacen" action="prueba.php" enctype="multipart/form-data" method="POST" role="form" id="post_registro">
                                <div class="col-md-4">
                                    <!--Stock de la Caja-->
                                    <h5 style="color:white">STOCK DE LA CAJA</h5>
                                    <div class="form-group">
                                        <input name="stock_total_caja" type="number" class="form-control" id="stock_total_caja" placeholder="Ingrese el stock aqui"> 
                                    </div>
                                    <!--Fin-->
                                </div>
                                <div class="col-md-8">
                                    <h5 style="color:white">DESCRIPCION(Opcional)</h5>
                                     <div class="form-group">
                                        <input name =descripcion_caja type="text" class="form-control" id="" placeholder="ingrese la descripcion aqui">
                                     </div>
                                </div>                                
                            </div>

                        <!--Datos del Producto-->
                            <h3 style="color:white"><strong style="color:red">2) </strong> Detalle del Producto</h3>
                            <div class="row">
                                <!--Codigo del Producto-->
                                <div class="col-md-4">
                                    <h5 style="color:white">CÓDIGO </h5>
                                    <div class="form-group">
                                        <input name =codigo_producto type="text" class="form-control" id="codigo_producto" placeholder="Ingrese el código aqui"> 
                                    </div>
                                </div>
                                <!--Nombre del Producto-->
                                <div class="col-md-8">
                                    <h5 style="color:white">NOMBRE</h5>
                                     <div class="form-group">
                                        <input name =nombre_producto type="text" class="form-control" id="nombre_producto" placeholder="ingrese el nombre aquí">
                                     </div>
                                </div>                                
                            </div>

                            <div class="row">
                                <!--Categoria del Producto-->
                                <div class="col-md-4">
                                    <h5 style="color:white">CATEGORIA <button  type="button" style="background-color: black"  data-toggle="modal" data-target="#categoria"><i class="fa fa-search" aria-hidden="true"></i></button> </h5>
                                    <div class="form-group">
                                        <input name =categoria_name type="text" class="form-control" id="categoria_name" placeholder="Ingrese la categoria aqui">
                                    </div>
                                </div>
                                <!--Fin-->
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
                                                
                                            </div>
                                            <div class="col-md-2 " id="Cantidad">
                                                <h5 style="color:white">UNIDADES</h5>
                                                
                                            </div>
                                            <div class="col-md-1" id="Cajas">
                                                <h5 style="color:white">CAJAS</h5>
                                                
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
                                                
                                            </div>
                                            <div class="col-md-2 " id="Cantidadm">
                                                <h5 style="color:white">CANTIDAD</h5>
                                                
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
                                <div class=row>
                                    <!--Boton para mandar el registro de productos-->
                                     <button id="boton_post2" name="boton_post2" type="button" class="btn btn-lg pull-right" style="margin-right: 20px;" onclick="mandar_registro()">
                                      <span class="glyphicon glyphicon-floppy-disk"></span> Registrar Productos
                                    </button>
                                    <!--Fin-->
                                    </form>
                                </div>
                                <!--Fin-->
                        </div>
                    </div>
    
        <!--Modal de Categorias-->
        <div class="modal fade" id="categoria">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                  <div class="modal-header">
                      <h3 class="modal-title"><strong>Lista de Categorias</strong></h3>
                      <button type="button" data-dismiss="modal"> Cerrar </button>
                  
                  </div>
                  <div class="modal-body">
                       <table  class="tabla_registro">
                    <tr bgcolor="#3DF230">
                        <td bgcolor="#3DF230" align="center" width="3%"><strong>N°</strong></td>
                        <td bgcolor="#3DF230" align="center" width="10%"><strong>Categoria</strong></td>
                        <td bgcolor="#3DF230" align="center" width="8%"><strong>Acción</strong></td>
                    </tr>
    <?php  
    /*Extraccion de datos para el model */
        $contador=0;
        $conex2= new Database(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        $conex2->preparar("SELECT nombre from categoria");
        $conex2->ejecutar();
        $conex2->prep()->bind_result($nom);
        while($conex2->resultado()){
              $contador++;
              echo "<tr>   
                    <td align='center'>$contador</td>
                    <td align='center' >$nom</td>
                    <input type='text' id='categoria$contador' value='$nom' hidden>
                    <td align='center' >
                    <button data-dismiss='modal' onclick='ingresar_categoria($contador)'>Escoger</button></td>
                    </tr>";
        }

    ?>
                    </table>
                  </div>
                  <div class="modal-footer">
                  <button type="button" data-dismiss="modal"> Cerrar </button>
                  </div>
            </div>
          </div>
        </div>
        <!--FinModal-->
       
<?php include 'inc/footer.php';?>
