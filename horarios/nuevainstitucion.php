<?php
    include 'conexion.php';

    $nombre=$_REQUEST['nombre'];
    $areas=$_REQUEST['areas'];

    $resultados = mysqli_query($conexion,"SELECT count(nombre) FROM institucion");
     if (mysql_num_rows($resultados)<1) {
     
  $sentencia= "INSERT INTO institucion (nombre,areas) VALUES ('".$nombre."', '".$areas."')";
    $conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));

  $messages[]="institucion creada";
}
else 
$errors[]="Ya existe una institucion";

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