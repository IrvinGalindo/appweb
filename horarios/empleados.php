<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>NS</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1"> 
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		footer{
			background-color:#1f1f20;
		}
	</style>
	<title>SOCIOS</title>
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
            <a href="homepage.html" class="navbar-brand"><font color="white">Controld</font><font color="#5dade2">eHorarios </font></a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-1"> <!--aqui se empezara a añadir los botones de lo que compone el nav-->
            <ul class="nav navbar-nav navbar-right">
              
              <li><a href="horarios.php">HORARIOS</a></li>
              <li><a href="agregaremp.php">EMPLEADOS</a></li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                USUARIO<span class="caret"></span>
                </a>
                  <ul class="dropdown-menu">
                    <li><a href="login.html">CERRAR SESION</a></li>
                  </ul>
              </li>
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
                        <center><h1>ADMINISTRADOR</h1></center>
                    </div>
                <div class="col-md-3"></div>
</div>
</div>
           </div><br><br>
           <div class="row">
              <div class="col-md-6"><center>
              <img src="img/z.png" width="150" height="150" alt="..." class="img-rounded"><br><br>
              <a href="agregaremp.php" class="btn btn-primary btn-sm">Empleados</a></div>
              <div class="col-md-6"><center>
              <img src="img/cuaderno.png" width="150" height="150" alt="..." class="img-rounded"><br><br>
              <a href="horarios.php" class="btn btn-primary btn-sm">Horarios</a></div>
                   
        </div>
  

      <br><br><br><br><br><br><br><br>
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