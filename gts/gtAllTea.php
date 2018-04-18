<?php
session_start();
include '../config.php';

if (!empty($_SESSION['idempleado']))
	echo "Error de autentificacion";


$a=$_REQUEST['a'];
$h=$_REQUEST['h'];
$hf=$_REQUEST['hf'];

$qry="SELECT e.idempleado,h.idhorario,g.numsalon,CONCAT(e.nombres,' ',e.paterno) AS nombre,e.foto,h.hora_fin FROM horario h,curso c, empleado e,grupo g, salon s WHERE e.idempleado=c.idempleado && h.idnCurso=c.idnCurso && g.numsalon=s.numsalon && c.idGrupo=g.idGrupo && dia=(SELECT (ELT(WEEKDAY(CURRENT_DATE) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS DIA) && s.area=$a && h.hora<='$h' && h.hora_fin>='$hf'";

$rs=mysqli_query($conexion,$qry) or die("Error en base de datos");

if(mysqli_num_rows($rs)>0)
{
 while ($sch=mysqli_fetch_array($rs)) {
     $datos[]=array(
         'idempleado'=>$sch['idempleado'],
         'idhorario'=>$sch['idhorario'],
 	     'numsalon'=>$sch['numsalon'],
 	     'nombre'=>$sch['nombre'],
 	     'hora_fin'=>$sch['hora_fin'],
 	    'foto'=> base64_encode($sch['foto']));
 }
 echo json_encode($datos);
 

}

//author IOGB - Irvin Omar Galindo Becerra
?>