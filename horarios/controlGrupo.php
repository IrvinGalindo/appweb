<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>Grupo</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1"> 
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Latest minified bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/DF9FD10F-3407-9E4C-8ABF-2496C6B870AC/main.js" charset="UTF-8"></script>
<link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/597988EB-EBDE-264A-9CEA-EBE328650EEB/abn/main.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest minified bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    footer{
      background-color:#1f1f20;
    }
  </style>
  <title>SOCIOS</title>
</head>
<body>
   <?php include("mod_asist.php");?>
  <?php include("mod_elimi_gr.php");?>
  <?php include("addGrup.php");?>
  <?php include("mod_grup.php");?>
  <?php include("mod_inst.php");?>

    <div class="container"> <!--siempre se debe colocar todo dentro de un div container-->
    <br>
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
                    <li><a href="#" target="_blank" data-toggle='modal' data-target='#asistencia' >Imprimir asistencia</a></li>
                  </ul>
              </li>
                    
                    <li><a href="cerrar_conexion.php">SALIR</a></li>
        
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <br><br>

    <div class="container">
        <div class="row"> <!--aqui va estar un titulo-->
                <div class="col-md-3">

                </div>
                    <div class="col-md-6">
                        <center><h1>CONTROL DE GRUPOS</h1></center>
                    </div>
                <div class="col-md-3"></div>
                </div>
                </div>
             

                <br><br>
              <div class="container">    
      <div class="row"> <!--aqui van a estar los botones de agregar, eliminar  actualizar-->
                <div class="col-md-4"></div> 
                    <div class="col-md-4">
                      <form method="POST" action="controlGrupo.php" ><center>
           <input type="submit" value="Ver Lista de grupos" class="btn btn-primary" name="btn1">

          <button type='button' class='btn btn-success' data-toggle='modal' data-target='#modalGr'>Agregar grupo</button></center>
           </form>
                    </div>
                    <br><br>
                <div class="delete-grupo" id="eli" name="eli"></div>
           </div>
        </div>
        <br><br>
     
        <?php      
            echo "
              <table class=\"table table-striped table-bordered table-hover\">
                <tr>
                  <th><center>ID</center></th>
                  <th><center>N° Salón</center></th>
                  <th><center>Sección</center></th>
                  <th><center>Grado</center></th>
                  
                </tr>
                </table";
              

            if(isset($_POST['btn1']))  

    {

      include("conexion.php");
     
        $resultados = mysqli_query($conexion,"SELECT * FROM grupo");

        while ($consulta = mysqli_fetch_array($resultados))
        {

         echo "<tr>"; 
                  echo "<td>"; echo $consulta['idGrupo'];  
                  echo "</center></td>";
                  echo "<td><center>"; echo $consulta['numSalon'];  
                  echo"</center></center></td>";
                  echo "<td><center>"; echo $consulta['seccion']; 
                  echo"</center></center></td>";
                  echo "<td><center>"; echo $consulta['grado'];  
                  echo"</center></center></td>";
                  echo "<td><center> <button type='button' class='btn btn-success' data-toggle='modal' data-target='#modalGrp' data-idgrupo='".$consulta['idGrupo']."' data-numsalon='".$consulta['numSalon']."' data-seccion='".$consulta['seccion']."' 
                  data-periodo='".$consulta['periodo']."' data-grado='".$consulta['grado']."'><i class='glyphicon glyphicon-edit'></i> Modificar</button></center></td>";
                echo " <td><center><button type='button' class='btn btn-danger' data-toggle='modal' data-idgrupo='".$consulta['idGrupo']."' data-target='#modalEli-gr'><i class='glyphicon glyphicon-trash'></i> Eliminar</button></center></td>";
                echo "</tr>";
           }
           
         }

  ?>
  <!-- Modal -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/app.js"></script>
</body>
</html>