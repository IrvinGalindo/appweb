<?php
		include 'conexion.php';
		$hora=$_REQUEST['idgrupo'];
	 	$sentencia="DELETE FROM grupo WHERE idGrupo=".$hora."";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));
				  $messages[]="Horario registrado";


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
