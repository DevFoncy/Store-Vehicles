<?php include 'inc/header.php';
      include 'inc/header2.php';
?>
<?php 
		$contador=0;
		 $codigo=$_POST['codigo_producto'];
		 $nombre=$_POST['nombre_producto'];
		 $cantidad_c=$_POST['cantidad_color'];
		 $id_p=$_POST['id_producto'];
		 echo $cantidad_c;
     	$conex3= new Database(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if($cantidad_c==1){
       		$conex3->preparar("SELECT c.descripcion, pc.cantidad_producto_color from color c, producto_color pc, producto p where p.id_producto='$id_p' and  pc.id_producto='$id_p' and pc.id_color=c.id_color");
        	$conex3->ejecutar();
	        $conex3->prep()->bind_result($nombre,$cantidad);
        }
        else
        {
        	if($cantidad_c==2){
               $conex3->preparar("SELECT c.descripcion, pc.cantidad_producto_color from color c, producto_color pc, producto p where p.id_producto='$id_p' and  pc.id_producto='$id_p' and pc.id_color=c.id_color");
        	$conex3->ejecutar();
	        $conex3->prep()->bind_result($nombre,$cantidad);
        	}
        }
         ?>
 <div class="row">
		<h1 align="center" style="color:white;">Informe Detallado de Productos </h1> 
	 	<div class="col-md-10 col-md-offset-3">
	    <h3 style="color:white">PRODUCTO ELEGIDO :   <strong><?php echo $nombre."  -   " ?></strong>
	       CÓDIGO:   <strong><?php echo $codigo ?></strong>
	    </h3>
	 	</div>

 	<div class="col-md-8 col-md-offset-2">	    
 	    
 	            <table class="tabla_registro">
                <tr bgcolor="#FF6B6B">

                    <td bgcolor="#FF6B6B" align="middle" width="3%"><strong>N°</strong></td>
                    <td bgcolor="#FF6B6B" align="middle" width="10%"><strong>Color</strong></td>
                    <td bgcolor="#FF6B6B" align="middle" width="5%"><strong>Cantidad</strong></td>
                    <td bgcolor="#FF6B6B" align="middle" width="6%"><strong>Ubicacion</strong></td>
                </tr>
  <?php 
  	     while($conex3->resultado()){
              $contador++;
              echo "<tr>
              		<td bgcolor='white' align='center'>$contador</td>
              		<td bgcolor='white' align='center'>$nombre</td>
              		<td bgcolor='white' align='center'>$cantidad</td>
              		<td bgcolor='white' align='center'>dsaadsdasd</td>
              </tr>";
              }
  
  ?>    
    	     </table>
    	<br>
		<h1 align="center" style="color:white;">Almacenamiento de Cajas </h1> 
   <?php 
   		if($cantidad_c==1){
   			$contador=0;
   			echo " 
   					<h3 style='color:white'> Solo posee 1 Color</h3>
	    			<table class='tabla_registro'>
                	<tr bgcolor='#FF6B6B'>
	                    <td bgcolor='#FF6B6B' align='middle' width='3%'><strong>N°</strong></td>
	                    <td bgcolor='#FF6B6B' align='middle' width='6%'><strong>Color</strong></td>
	                    <td bgcolor='#FF6B6B' align='middle' width='10%'><strong>Unidades x Caja</strong></td>
	                    <td bgcolor='#FF6B6B' align='middle' width='5%'><strong>Cantidad de Cajas</strong></td>
	                </tr>
  				";
  			$conex3->preparar("SELECT c.descripcion, count(cpc.CANTIDAD_CAJA_PRODUCTO_COLOR), cpc.cantidad_caja_producto_color from color c, producto_color pc, producto p, cajas_producto_color cpc where p.id_producto='$id_p' and  pc.id_producto='$id_p' and pc.id_color=c.id_color and pc.ID_COLOR_PRODUCTO=cpc.ID_COLOR_PRODUCTO");
        	$conex3->ejecutar();
	        $conex3->prep()->bind_result($nombre, $cantidad_cajas,$unidadesxcaja);
       
   			 while($conex3->resultado()){
              $contador++;
              echo "<tr>
              		<td bgcolor='white' align='center'>$contador</td>
              		<td bgcolor='white' align='center'>$nombre</td>
              		<td bgcolor='white' align='center'>$unidadesxcaja</td>
              		<td bgcolor='white' align='center'>$cantidad_cajas</td>
              		
              </tr>";
              }
  
   		}
   		else{
   			if($cantidad_c==2){
				$contador=0;
   			echo " 
   					<h3 style='color:white'> Posee más de 1 Color </h3>
	    			<table class='tabla_registro'>
                	<tr bgcolor='#FF6B6B'>
	                    <td bgcolor='#FF6B6B' align='middle' width='3%'><strong>N°</strong></td>
	                    <td bgcolor='#FF6B6B' align='middle' width='6%'><strong>Color</strong></td>
	                    <td bgcolor='#FF6B6B' align='middle' width='5%'><strong>Cantidad Unidades</strong></td>
	                </tr>
  				";
  			$conex3->preparar("SELECT c.descripcion,cpc.cantidad_caja_producto_color from color c, producto_color pc, producto p, cajas_producto_color cpc where p.id_producto='$id_p' and  pc.id_producto='$id_p' and pc.id_color=c.id_color and pc.ID_COLOR_PRODUCTO=cpc.ID_COLOR_PRODUCTO");
        	$conex3->ejecutar();
	        $conex3->prep()->bind_result($nombre,$unidadesxcaja);
       
   			 while($conex3->resultado()){
              $contador++;
              echo "<tr>
              		<td bgcolor='white' align='center'>$contador</td>
              		<td bgcolor='white' align='center'>$nombre</td>
              		<td bgcolor='white' align='center'>$unidadesxcaja</td>
              </tr>";
              }
  

   			}

   		}


    ?>

    </div>
 </div>

 <?php include 'inc/footer.php';?>
