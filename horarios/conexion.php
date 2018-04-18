<?php

	$conexion= mysqli_connect("localhost", "scheduletown", "contra123");

	//Comprobar conexion
	if(mysqli_connect_errno())
	{
		printf("Fallo la conexion");
	}
	else {
		mysqli_select_db($conexion,"itsdb"); 
	}
?>