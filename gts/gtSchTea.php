<?php
session_start();
include '../config.php';

if (!empty($_SESSION['idempleado']))
	echo "Error de autentificacion";


$d=$_REQUEST['d'];
$e=$_REQUEST['e'];

$qry="SELECT CONCAT(TIME_FORMAT(h.hora, '%h:%i'),' ',TIME_FORMAT(h.hora_fin,'%h:%i')) as hora,g.numsalon,m.nombre FROM horario h,curso c, materia m,grupo g WHERE h.idnCurso=c.idnCurso && c.cveMateria=m.cveMateria && c.idGrupo=g.idGrupo && dia='$d' && c.idempleado='$e' order by h.hora";

$rs=mysqli_query($conexion,$qry) or die("Error en base de datos");

$datos=array();
if(mysqli_num_rows($rs)>0)
{
 while ($sch=mysqli_fetch_object($rs)) {
 	$datos[]=$sch;
 }
 echo json_encode($datos);
}

//author IOGB - Irvin Omar Galindo Becerra
?>