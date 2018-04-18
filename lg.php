<?php
include 'config.php';

$us=$_REQUEST['u'];
$pa=$_REQUEST['p'];

$qr="SELECT tipo,idEmpleado,CONCAT(nombres,' ',paterno,' ',materno) AS nombre FROM empleado WHERE idempleado= '$us' && contrasenia = '$pa'";
$rg=mysqli_query($conexion,$qr) or die("Error, registro no encontrado");
$datos=array();
if(mysqli_num_rows($rg)>0)
{
    	$_SESSION['idempleado']=$us;
	while ($per=mysqli_fetch_object($rg)){
		$datos[]=$per;
	} 
	echo json_encode($datos);
}
//author IOGB - Irvin Omar Galindo Becerra
?>