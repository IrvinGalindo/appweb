<?php
include '../config.php';

$idE=$_REQUEST['idE'];
$idH=$_REQUEST['idH'];
$h=$_REQUEST['h'];
$a=$_REQUEST['a'];
$d=$_REQUEST['d'];
$qry="INSERT INTO asistencia(idempleado,idhorario,hora,asistio,dia) VALUES('$idE',$idH,
'$h',$a,'$d')";

mysqli_query($qry,$conexion) or die("Erro al ingresar datos");
mysqli_close();
?>