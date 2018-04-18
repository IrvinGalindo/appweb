<?php
/*-----------------------
Autor: Obed Alvarado
http://www.obedalvarado.pw
Fecha: 27-02-2016
Version de PHP: 5.6.3
----------------------------*/
	# conectare la base de datos
    $con=@mysqli_connect("localhost", "scheduletown", "contra123", "itsdb");
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	/*Inicia validacion del lado del servidor*/

		// escaping, additionally removing everything that could be (html/javascript-) code
		$id=$_POST["id"];
		$pwd=$_POST["pwd"];
		$nombre=$_POST["nombre"];
		$paterno=$_POST["paterno"];
		$materno=$_POST["materno"];
		$cel=$_POST["cel"];
		$email=$_POST["email"];
		$tipo=$_REQUEST["tipo"];
		$sexo=$_REQUEST["sexo"];

		
		$sql="UPDATE empleado SET  contrasenia='".$pwd."', nombres='".$nombre."', paterno='".$paterno."', materno='".$materno."', celular='".$cel."', correoE='".$email."', tipo='".$tipo."',	 sexo='".$sexo."' WHERE idempleado='".$id."'";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Los datos han sido actualizados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>	