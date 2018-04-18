<?php
error_reporting(E_ALL ^ E_NOTICE);
  $consulta=ConsultarProducto($_REQUEST['idempleado']);

  function ConsultarProducto($id_empleado)
  {
   include 'conexion.php';
   $sentencia="SELECT * FROM empleado WHERE idempleado='".$id_empleado."' ";
   $resultado= $conexion->query($sentencia) or die ("Error al consultar contrasenia".mysqli_error($conexion)); 
   $fila=$resultado->fetch_assoc();

   return [
   
    $fila['idempleado'],
    $fila['contrasenia'],
    $fila['nombres'],
    $fila['paterno'],
    $fila['materno'],
    $fila['celular'],
    $fila['correoE'],
    $fila['tipo'],
    $fila['sexo']
   ];
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>NS</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1"> 
  <link rel="stylesheet" href="css/bootstrap.min.css">

<title>Modificar Empleado</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
 <div class="container">
 <div class="row">
 <div class="col-md-4"></div>
 <div class="col-md-4">
<form method="POST" action="nuevoempleado.php" ><br><br>


      <div class="form-group">
        <label for="idempleadp">ID de empleado </label>
        <input type="text" name="idempleado" class="form-control" id="idempleado" autocomplete="off" value="<?php echo $consulta[0] ?>">
    </div>
     <div class="form-group">
        <label for="idempleadp">Password </label>
        <input type="text" name="idempleado" class="form-control" id="idempleado" autocomplete="off" value="<?php echo $consulta[1] ?>">
    </div>

      <div class="form-group">
        <label for="contrasenia">Password </label>
        <input type="text" name="contrasenia" class="form-control" id="contrasenia" autocomplete="off" value="<?php echo $consulta[2] ?>">
    </div>

    <div class="form-group">
        <label for="nombres">Nombres</label>
        <input type="text" name="nombres" class="form-control" id="nombres" autocomplete="off" value="<?php echo $consulta[3] ?>">
       <!-- <input type="text" name="hr" class="form-control" id="hr"> -->
    </div>

    <div class="form-group">
      <label for="paterno">Apellido paterno</label>
      <input type="text" name="paterno" class="form-control" id="paterno" autocomplete="off" value="<?php echo $consulta[4] ?>">
  </div>

  <div class="form-group">
      <label for="materno">Apellido materno </label>
      <input type="text" name="materno" class="form-control" id="materno" autocomplete="off" value="<?php echo $consulta[5] ?>">
  </div>

  <div class="form-group">
      <label for="celular">Telefono</label>
      <input type="text" name="celular" class="form-control" id="celular" autocomplete="off" value="<?php echo $consulta[6] ?>">
  </div>

<div class="form-group">
      <label for="correoE">Correo</label>
      <input type="text" name="correoE" class="form-control" id="correoE" autocomplete="off" value="<?php echo $consulta[7] ?>">
  </div>

 <div class="form-group">
      <label for="tipo">Tipo de cuenta </label>
      <select type="text" name="tipo" class="form-control" id="tipo" value="<?php echo $consulta[7] ?>">
        <option>Admin</option>
        <option>Usuer</option>
        
    </select>
  </div>

  <div class="form-group">
      <label for="sexo">Sexo </label>
      <select type="text" name="sexo" class="form-control" id="sexo" value="<?php echo $consulta[8] ?>">
        <option>H</option>
        <option>M</option>
        
    </select>
  </div>

</center>
  <br>
  <input type="submit" value="REGISTRAR EMPLEADO" class="btn btn-success">
  </form>
  </div>
  <div class="col-md-4"></div>

  </div>
 </div>
</div>
  

</div>
 <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>