<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Control Empleado</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1"> 
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Latest minified bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/DF9FD10F-3407-9E4C-8ABF-2496C6B870AC/main.js" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/597988EB-EBDE-264A-9CEA-EBE328650EEB/abn/main.css"/><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<style>
		footer{
			background-color:#1f1f20;
		}
	</style>
	<title>SOCIOS</title>
</head>
<body>
  <?php include("mod_emp.php");?>
  <?php include("add_emp.php");?>
  <?php include("modal_eliminar_emp.php");?>
  <?php include("mod_asist.php");?>
  <?php include("mod_inst.php");?>

		<div class="container"> <!--siempre se debe colocar todo dentro de un div container-->
    <br>
    <header>
      <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
        <div class="container-fluid"><!--siempre se debe colocar todo dentro de un div container-->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1"><!--Aqui se hace el boton para menu responsive-->
              <span class="sr-only">Menu</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="" class="navbar-brand"><font color="white">Schedul</font><font color="#5dade2">eTown</font></a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-1"> <!--aqui se empezara a añadir los botones de lo que compone el nav-->
            <ul class="nav navbar-nav navbar-right">
                    <li><a href="" data-toggle='modal' data-target='#escuela'>INSTITUCION</a></li>
                    <li><a href="agregaremp.php">EMPLEADO</a></li>
                    <li><a href="agregarmat.php">MATERIA</a></li>
                    <li><a href="controlGrupo.php">GRUPO</a></li>
                    <li><a href="agregarsal.php">SALON</a></li>
                    <li><a href="agregarcurso.php">CURSO</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        HORARIO<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                    <li><a href="controlHorario.php">Ver horarios</a></li>
                    <li><a href="" target="_blank" data-toggle='modal' data-target='#asistencia' >Imprimir asistencia</a></li>
                  </ul>
              </li>
                    
                    <li><a href="cerrar_conexion.php">SALIR</a></li>
        
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <br><br><br><br>

    <div class="container">
        <div class="row"> <!--aqui va estar un titulo-->
                <div class="col-md-3">

                </div>
                    <div class="col-md-6">
                        <center><h1>CONTROL DE EMPLEADOS</h1></center>
                    </div>
                <div class="col-md-3"></div>
                </div>
                </div>
             

                <br><br>
              <div class="container">    
      <div class="row"> <!--aqui van a estar los botones de agregar, eliminar  actualizar-->
                <div class="col-md-4"></div> 
                    <div class="col-md-4">
                      <form method="POST" action="agregaremp.php" ><center>
           <input type="submit" value="Ver Lista de Empleados" class="btn btn-primary" name="btn1">
          <button type='button' class='btn btn-success' data-toggle='modal' data-target='#addDataEmp'>Agregar Empleado</button></center>
           </form>
                    </div>
                <div class="col-md-4"></div>
           </div>
        </div>
        <br>
           </form>
           <div class="row"> 
    <div class="col-xs-12">
    <div class="datos_ajax_delete"></div><!-- Datos ajax Final -->
    <div class="outer_div"></div><!-- Datos ajax Final -->
    </div>
        <br>
      
        <?php      
            echo "
              <table class=\"table table-striped table-bordered table-hover\">
                <tr>
                  <th>ID</th>
                  <th>contraseña</th>
                  <th>Nombres</th>
                  <th>Paterno</th>
                  <th>Materno</th>
                  <th>N. Celular</th>
                  <th>Correo</th>
                  <th>Tipo</th>
                  <th>Sexo</th>
                  
                  
                  
                </tr>
                </table";
              

            if(isset($_POST['btn1']))  

    {

      include("conexion.php");
     
        $resultados = mysqli_query($conexion,"SELECT * FROM empleado");

        while ($consulta = mysqli_fetch_array($resultados))
        {

         echo "<tr>"; 
                  echo "<td>"; echo $consulta['idempleado'];  echo"</td>";
                  echo "<td>"; echo $consulta['contrasenia'];  echo"</td>";
                  echo "<td>"; echo $consulta['nombres'];  echo"</td>";
                  echo "<td>"; echo $consulta['paterno'];  echo"</td>";
                  echo "<td>"; echo $consulta['materno'];  echo"</td>";
                  echo "<td>"; echo $consulta['celular'];  echo"</td>";
                  echo "<td>"; echo $consulta['correoE'];  echo"</td>";
                  echo "<td>"; echo $consulta['tipo'];  echo"</td>";
                  echo "<td>"; echo $consulta['sexo'];  echo"</td>";
                  echo "<td><center> <button type='button' class='btn btn-success' data-toggle='modal' data-target='#dataUpdate' data-id=".$consulta['idempleado']." data-pwd= '".$consulta['contrasenia']."' data-nombre=".$consulta['nombres']." data-paterno=".$consulta['paterno']." data-materno=".$consulta['materno']." data-cel=".$consulta['celular']." data-email=".$consulta['correoE']." data-tipo=".$consulta['tipo']." data-sexo=".$consulta['sexo']."><i class='glyphicon glyphicon-edit'></i>Modificar</button></center></td>";
                echo " <td><center><button type='button'class='btn btn-danger'  data-toggle='modal' data-target='#dataDelete' data-id=".$consulta['idempleado']."  ><i class='glyphicon glyphicon-trash'></i> Eliminar</button></center></td>";
                echo "</tr>";

               
           }
           
         }

  ?>
  <!-- Modal -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/app.js"></script>
</body>
</html>