<?php
    include 'conexion.php';

    $idncurso=$_REQUEST['idncurso'];
    $dia=$_REQUEST['dia'];
    $hora=$_REQUEST['hora'];
    $hora_fin=$_REQUEST['hora_fin'];
   
    if (strcmp($hora, $hora_fin)===0) {
    	$errors []="Las horas no deben ser iguales";
    }
    else
    	if ($hora> $hora_fin) {
    	$errors []="La hora de inicio debe ser mayor a la hora de fin";
    }
    else{

  
   $sentencia= "INSERT INTO horario (idhorario, idncurso, hora, hora_fin, dia) VALUES (NULL, '".$idncurso."', '".$hora."', '".$hora_fin."', '".$dia."')";
    $conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));

  $messages[]="Horario registrado";
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