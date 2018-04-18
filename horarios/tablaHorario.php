<?php
include 'conexion.php';

  $dia=$_REQUEST['hr'];
	$e=$_REQUEST['i'];

$sentencia= "SELECT CONCAT(TIME_FORMAT(h.hora, '%h:%i'),' ',TIME_FORMAT(h.hora_fin,'%h:%i')) as hora,g.numsalon,m.nombre FROM horario h,curso c, materia m,grupo g WHERE h.idnCurso=c.idnCurso && c.cveMateria=m.cveMateria && c.idGrupo=g.idGrupo && dia='$dia' && c.idempleado='$e' order by h.hora";
$resultado= mysqli_query($conexion,$sentencia);
     if (isset($resultado)) {
     echo "	<table class='table table-striped table-bordered table-hover'>
       <tr>
           <td><center>Salón</center></td>
           <td><center>Materia</center></td>
           <td><center>Hora</center></td>
  		</tr>
  		
  		";
     while($fila=mysqli_fetch_array($resultado)){
 	  echo "<tr><td><center>".$fila['numsalon']."</center></td>
			<td><center>".$fila['nombre']."</center></td>
			<td><center>".$fila['hora']."</center></td></tr>";
	}
	echo "</table>";
		}else
		$messages[]="Dia sin horar";

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