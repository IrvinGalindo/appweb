<?php

$tipos = array("image/gif","image/jpeg","image/bmp","image/pjpeg","image/png");
$maximo = 3072000; //100Kb
if (is_uploaded_file($_FILES['imagen']['tmp_name']))
{ // Se ha subido?
if (in_array($_FILES['imagen']['type'],$tipos) && $_FILES['imagen']['size'] <= $maximo)
{ // Es correcto?
$fp = fopen($_FILES['imagen']['tmp_name'], 'r'); //Abrimos la imagen
$imagen = fread($fp, filesize($_FILES['imagen']['tmp_name'])); //Extraemos el contenido de la imagen
$imagen = addslashes($imagen);
fclose($fp); //Cerramos imagen
if(!get_magic_quotes_gpc())
$nombre = addslashes($_FILES['imagen']['name']); // Arreglamos el Nombre
else $nombre = $_FILES['imagen']['name'];
} else $errors[] = "El formato del archivo no es correcto o es mayor de 100Kb";
} else $errors[]= "La imagen no ha sido subida";

if($_FILES['imagen']['tmp_name']!=""){
NuevoProducto($_REQUEST['id'], $_REQUEST['pwd'], $_REQUEST['nombre'], $_REQUEST['paterno'], $_REQUEST['materno'], $_REQUEST['cel'], $_REQUEST['email'], $_REQUEST['tipo'], $_REQUEST['sexo'],$imagen);
}
	
	function NuevoProducto($idempleado, $contrasenia, $nombres,$paterno,$materno,$celular,$correoE,$tipo,$sexo,$imagen)
	{	
				include 'conexion.php';
		$sentencia= "INSERT INTO empleado (idempleado, contrasenia, nombres,paterno,materno,celular,correoE,tipo,sexo,foto) VALUES ('".$idempleado."', '".$contrasenia."', '".$nombres."','".$paterno."', '".$materno."', '".$celular."','".$correoE."', ".$tipo.", '".$sexo."','$imagen') ";
		$query_update = mysqli_query($conexion,$sentencia);
			if ($query_update){
				$messages[] = "Los datos han sido actualizados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($conexion);
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
