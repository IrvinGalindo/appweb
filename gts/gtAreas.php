<?php
session_start();
include '../config.php';

if (!empty($_SESSION['idempleado']))
	echo "Error de autentificacion";

$qry="SELECT areas_count FROM institucion";

$rg=mysqli_query($conexion,$qry);

if(mysqli_num_rows($rg)>0)
{
	$datos[]=mysqli_fetch_object($rg);
	
	echo json_encode($datos);

}
//author IOGB - Irvin Omar Galindo Becerra




?>