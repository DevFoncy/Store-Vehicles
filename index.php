<?php include 'inc/header.php';
$ok=false;
if($_POST){ 
        $nombre=$_POST['username'];
        $contra=$_POST['password'];
        session_start();
        $conex2= new Database(DB_HOST,DB_USER,DB_PASS,DB_NAME);

        $validar_usuario = $conex2->validar_datos('nombre_usuario','usuario',$nombre);
        $validar_contra= $conex2->validar_datos('contra','usuario',$contra);

        if($validar_usuario==1 && $validar_contra==1){
                 $conex2->preparar("SELECT u.tipo_privilegio from usuario u where u.nombre_usuario='$nombre' and u.contra='$contra'");
                 $conex2->ejecutar();
                 $conex2->prep()->bind_result($priv);
                   while($conex2->resultado()){
                  }
            $_SESSION['usuario']=$nombre;
        
            echo "<div class='col-md-12'>
            <div class='alert alert-success' align='center'>
              <strong><span class='glyphicon glyphicon-ok'> </span> Correcto!</strong> Datos correctos
            <h5>Seras dirigido a tu perfil en 3 segundos </h5> 
            </div>
            </div> 
            <br><br>";
            if($priv=='almacenero'){
                header("Refresh:2; url=almacen_registrar.php");
            }
        }
        else{
            //crypt($contra); 
            $ok=true;
        }
}
?>
<?php 
    if($ok==true){
    echo "<div class='col-md-12'>
            <div class='alert alert-danger' align='center'>
              <strong><span class='glyphicon glyphicon-remove'> </span> Error!</strong> Datos ingresados incorrectos
            </div> </div> <br>";
    }
 ?>


        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-3 text">
                            <h1><strong>Sistema de Ventas</strong> 1era edición</h1>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login</h3>
                            		<p>Ingresa su usuario y contraseña para ingresar:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" name="form1_login" action="index.php" method="post" class="login-form">
                                    <div class="form-group col-sm-8 col-sm-offset-2" >
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="username" placeholder="Usuario..." class="form-username form-control" id="form-username" required="">
			                        </div>
			                        <div class="form-group col-sm-8 col-sm-offset-2" >
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Contraseña..." class="form-password form-control" id="form-password" required="">
			                        </div>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <button  type="submit" class="btn">Ingresar!</button>    
                                        </div>
                                    </div>    
                                </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>

<?php include 'inc/footer.php';?>
