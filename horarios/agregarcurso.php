<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Control Curso</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1"> 
<link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Latest minified bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<style>
		footer{
			background-color:#1f1f20;
		}
	</style>
	<title>SOCIOS</title>
</head>
<body>
  <?php include("mod_cur.php");?>
  <?php include("add_cur.php");?>
  <?php include("modal_eliminar_cur.php");?>
   <?php include("mod_asist.php");?>
  <?php include("mod_elimi_gr.php");?>
  <?php include("addGrup.php");?>
  <?php include("mod_grup.php");?>
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
                        <center><h1>CONTROL DE CURSOS</h1></center>
                    </div>
                <div class="col-md-3"></div>
                </div>
                </div>
             

                <br><br>
              <div class="container">    
      <div class="row"> <!--aqui van a estar los botones de agregar, eliminar  actualizar-->
                <div class="col-md-4"></div> 
                    <div class="col-md-4">
                      <form method="POST" action="agregarcurso.php" ><center>
           <input type="submit" value="Ver lista de cursos" class="btn btn-primary" name="btn1">
          <button type='button' class='btn btn-success' data-toggle='modal' data-target='#addDataCur'>Agregar curso</button></center>
           </form>
           <div class="row">
    
      
    <div class="col-xs-12"></div>
    <div class="datos_ajax_delete"></div><!-- Datos ajax Final -->
    <div class="outer_div"></div><!-- Datos ajax Final -->
    </div>
                    </div>
                <div class="col-md-4"></div>
           </div>
        </div>
        <br><br>
      
        <?php      
            echo "
              <table class=\"table table-striped table-bordered table-hover\">
                <tr>
                  <th>ID del curso</th>
                  <th>ID empleado</th>
                  <th>Clave Materia</th>
                  <th>ID grupo</th>
                </tr>
                </table";
              

            if(isset($_POST['btn1']))  

    {

      include("conexion.php");
     
        $resultados = mysqli_query($conexion,"SELECT * FROM curso");

        while ($consulta = mysqli_fetch_array($resultados))
        {

         echo "<tr>"; 
                  echo "<td>"; echo $consulta['idncurso'];  echo"</td>";
                  echo "<td>"; echo $consulta['idempleado'];  echo"</td>";
                  echo "<td>"; echo $consulta['cveMateria'];  echo"</td>";
                  echo "<td>"; echo $consulta['idGrupo'];  echo"</td>";
                  echo "<td><center> <button type='button' class='btn btn-success' data-toggle='modal' data-target='#dataUpdateCur' data-idncurso=".$consulta['idncurso']." data-idempleado= ".$consulta['idempleado']." data-cvemateria=".$consulta['cveMateria']." data-idgrupo=".$consulta['idGrupo']." ><i class='glyphicon glyphicon-edit'></i>Modificar</button></center></td>";
                echo " <td><center><button type='button'class='btn btn-danger'  data-toggle='modal' data-target='#dataDelete' data-id=".$consulta['idncurso']."  ><i class='glyphicon glyphicon-trash'></i> Eliminar</button></center></td>";
                echo "</tr>";
           }
           
         }

  ?>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/app.js"></script>
</body>
</html>