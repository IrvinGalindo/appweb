<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Mi horario</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1"> 
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="../../jquery-validation-1.16.0/demo/css/screen.css">
  <script type="text/javascript" src="../../jquery-validation-1.16.0/lib/jquery-3.1.1.js"></script>
	<style>
		footer{
			background-color:#1f1f20;
		}
	</style>
	<title>SOCIOS</title>
  <script type="text/javascript">
    //FUNCION QUE RECIBE POR PARAMETROS UN VALOR QUE SE OBTIENE DE UN TEXTO POR MEDIO DE UN BOTON
    function funcionchecar (id,hr)
    {
      // ASIGNACION DE UN ARREGLO DE VALORES
    var parametros = {"i":id,"hr":hr};
        // FUNCION AJAX DONDE SE PASAN LOS DATOS QUE SE ATRAPARAN POR MEDIO DE UN POST EN EL ARCHIVO qryCalifas.php 
      $.ajax({
        data:parametros,
         url:"tablaHorario.php",
         type:'post',
         // FUNCION QUE ENVIA UN MENSAJE ANTES DE ENTRAR AL CASO EXITO O A LA FUNCION SUCCESS
         beforeSend:function()
         {$('#table').html("Procesando datos..")},
         // SI ES SUCCES ENTRA A LA FUNCION DONDE SE MANDA EL RESULTADO A UN DIV DENTRO DE ESTE HTML CON
         // EL RESULTADO OBTENIDO
         success:function(result){
          $('#table').html(result);
         }});
    
    }
  </script>
</head>
<body>
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
                    <li><a href="cerrar_conexion.php">CERRAR SESION</a></li>
        
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
                        <center><h1>HORARIO</h1></center>
                    </div>
                <div class="col-md-3"></div>
</div>
</div>

<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <form method="POST" class="cmxform" >
       <?php
    echo "<input id='i' type='text' name='i' style='display:none' value='".$dos=$_REQUEST["i"]."'/>";
  ?>
    <div class="form-group">
        <CENTER><label for="hr">DIA</label></CENTER>
        <select type="text" name="hr" class="form-control" id="hr">
            <option value="Lunes">Lunes</option>
            <option value="Martes">Martes</option>
            <option value="Miercoles">Miercoles</option>
            <option value="Jueves">Jueves</option>
            <option value="Viernes">Viernes</option>
            
        </select>
       <!-- <input type="text" name="hr" class="form-control" id="hr"> -->
    </div>
    <CENTER><button type="button" onclick="funcionchecar($('#i').val(),$('#hr').val())" class="btn btn-primary" name="btn2">Buscar</button></CENTER>
    </form>
    </div>
    </div>
    <br><br><br>
        <div id="table" name="table">  </div>               
        </div>
  </div>
    <br>

<br><br><br>
<footer>
  <div class="container">
  <font color="#5dade2">
    <h3>Instituto Tecnologico de saltillo </h3>
    <p>Desarrollo de Aplicaciones Web</p>
    </font>
  </div>
</footer>

  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>