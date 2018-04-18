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
	 if (empty($_POST['idE'])){
			$errors[] = "empleado vacio";
		} else if (empty($_POST['idM'])){
			$errors[] = "Maestro vacío";
		} else if (empty($_POST['idG'])){
			$errors[] = "Grupo vacío";
		}   else if (
			!empty($_POST['idE']) && 
			!empty($_POST['idM']) &&
			!empty($_POST['idG']) 
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$idE=mysqli_real_escape_string($conexion,(strip_tags($_POST["idE"],ENT_QUOTES)));
		$idM=mysqli_real_escape_string($conexion,(strip_tags($_POST["idM"],ENT_QUOTES)));
		$idG=mysqli_real_escape_string($conexion,(strip_tags($_POST["idG"],ENT_QUOTES)));
		
		$sql="INSERT INTO curso(cveMateria,idempleado,idGrupo) VALUES ('".$idM."', '".$idE."', '".$idG."')";
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