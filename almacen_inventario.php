<?php include 'inc/header.php';
      include 'inc/header2.php';
        $contador=0;
        $conex3= new Database(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        $conex3->preparar("SELECT p.nombre, p.codigo, c.nombre, p.stock,p.id_producto, p.verificar_color from producto p, categoria c where c.categoria_id= p.categoria_id");
        $conex3->ejecutar();
        $conex3->prep()->bind_result($nombre,$codigo,$categoria,$stock,$id_p,$cantc);

?>
            <div class="col-md-12" align="center">
                <h1  style="color:white;">Inventario General de Productos</h1>
                <div class="col-md-8 col-md-offset-2" align="center">
                    <h3 style="background: white;"> Si va Modificar algun producto machuque el boton Modificar <span class="glyphicon glyphicon-pencil"></span></h3>
                     <h3 style="background: white;"> Si va Generar una salida hacia un punto de venta machuque el boton Generar Salida  <span class="glyphicon glyphicon-download-alt"></span></h3>
                
                </div>
                <table class="tabla_registro">
                <tr bgcolor="#D5EAFF">
                    <td bgcolor="#D5EAFF" align="middle" width="3%"><strong>N°</strong></td>
                    <td bgcolor="#D5EAFF" align="middle" width="15%"><strong>Producto</strong></td>
                    <td bgcolor="#D5EAFF" align="middle" width="5%"><strong>Codigo</strong></td>
                    <td bgcolor="#D5EAFF" align="middle" width="6%"><strong>Categoria</strong></td>
                    <td bgcolor="#D5EAFF" align="middle" width="7%"><strong>Color</strong></td>
                    <td bgcolor="#D5EAFF" align="middle" width="5%"><strong>Stock</strong></td>
                    <td colspan="2" bgcolor="#D5EAFF" align="middle" width="13%"><strong>Accion</strong></td>
                </tr>
                <!--Lista de Productos: Contador, Nombre, Codigo, Categoria, Colores, Stock -->
<?php 
        while($conex3->resultado()){
              $contador++;
              echo 
                "<tr>
                    <td  bgcolor='white' align='center'>$contador</td>
                    <td  bgcolor='white' align='center'>$nombre</td>
                    <td  bgcolor='white' align='center'>$codigo</td>
                    <td  bgcolor='white' align='center'>$categoria</td>
                    <form action='detalle_producto.php' enctype='multipart/form-data' method='POST' >
                        
                        <input type='number' value='$cantc' name='cantidad_color' hidden>
                        <input type='text' value='$id_p' name='id_producto' hidden> 
                        <input type='text' value='$codigo' name='codigo_producto' hidden>
                        <input type='text' value='$nombre' name='nombre_producto' hidden>
                    
                        <td  bgcolor='white' align='center'> <button type='submit' data> <span class='glyphicon glyphicon-search'></span>Ver Detalle</button></td>
                    </form>

                    <td  bgcolor='white' align='center' >$stock</td>
                    
                    <form action='almacen_modificar.php' method='POST' role='form' name='form3_modificar'>
                    <input type='text' id='codigo_producto' value='$codigo' hidden>
                    <td  bgcolor='white' align='center' >
                    <button type='submit'><span class='glyphicon glyphicon-pencil'></span> Modificar</button>
                    </td>
                    </form>
                  ";
                echo"
                    <form action='almacen_salida_ventas.php' method='POST' role='form' name='form4_salida'>
                        <input type='text' id='codigo_producto' value='$codigo' hidden>
                        <td  bgcolor='white' align='center' ><button type='submit'> <span class='glyphicon glyphicon-download-alt'></span> Generar Salida</button></td>
                    </form>
                </tr>
                ";
                }
                ?>               
        </table>                               
            </div>
  
 <?php include 'inc/footer.php';?>
