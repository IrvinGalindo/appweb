<?php
	EliminarProducto($_GET['idempleado']);

	function EliminarProducto($idempleado)
	{
		include 'conexion.php';
		$sentencia="DELETE FROM empleado WHERE idempleado='".$idempleado."' ";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));

	}
?>

<script type="text/javascript">
	alert("Empleado Eliminado!!");
	window.location.href='agregaremp.php';
</script>