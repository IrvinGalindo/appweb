<?php
$host_db = 'localhost';
$usuario_db = 'scheduletown';
$password_db = "contra123";
$nombre_db = 'itsdb';

$tabla_db1 = "empleado";
$conexion = mysqli_connect("$host_db", "$usuario_db", "$password_db", "$nombre_db");

if (!$conexion) {
    die('No se puede conectar a la BD'.mysqli_connect_error());
}
//author IOGB - Irvin Omar Galindo Becerra
?>