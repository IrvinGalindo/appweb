<?php
    include 'conexion.php';

    $numsalon=$_REQUEST['numsalon'];
    $seccion=$_REQUEST['seccion'];
    $grado=$_REQUEST['grado'];
    $periodo=$_REQUEST['periodo'];
  
     
  $sentencia= "INSERT INTO grupo (idGrupo,numSalon, seccion, grado, periodo) VALUES (NULL,".$numsalon.", '".$seccion."', ".$grado.", '".$periodo."')";
    $conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));

  $messages[]="Grupo registrado";


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