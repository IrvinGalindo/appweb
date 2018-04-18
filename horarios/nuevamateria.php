<?php
/*-----------------------
Autor: Obed Alvarado
http://www.obedalvarado.pw
Fecha: 27-02-2016
Version de PHP: 5.6.3
----------------------------*/
	# conectare la base de datos
    $conexion=@mysqli_connect("localhost", "scheduletown", "contra123", "itsdb");
    if(!$conexion){
        die("imposible conectarse: ".mysqli_error($conexion));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	/*Inicia validacion del lado del servidor*/
	 if (empty($_POST['numSal'])){
			$errors[] = "Numero de salon vacío";
		} else if (empty($_POST['cap'])){
			$errors[] = "Capacidad vacía";
		} else if (empty($_POST['area'])){
			$errors[] = "Area vacía";
		}   else if (
			!empty($_POST['numSal']) && 
			!empty($_POST['cap']) &&
			!empty($_POST['area']) 
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$numSal=mysqli_real_escape_string($conexion,(strip_tags($_POST["numSal"],ENT_QUOTES)));
		$cap=mysqli_real_escape_string($conexion,(strip_tags($_POST["cap"],ENT_QUOTES)));
		$area=mysqli_real_escape_string($conexion,(strip_tags($_POST["area"],ENT_QUOTES)));
		
		$sql="INSERT INTO salon VALUES ('".$numSal."', '".$cap."', '".$area."')";
		$query_update = mysqli_query($conexion,$sql);
			if ($query_update){
				$messages[] = "Los datos han sido guardados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($conexion);
			}
		} else {
			$errors []= "Error desconocido.";
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