<?php
    session_start();

    include 'conexion.php';

     $usr=$_REQUEST['usr'];
     $pwd=$_REQUEST['pwd'];
    
  echo  $qry = "SELECT tipo FROM empleado WHERE idempleado='$usr' && contrasenia='$pwd'";
     $rg=mysqli_query($conexion,$qry) or die (mysql_error());
    
    if(mysqli_num_rows($rg)>0)
    {
         
        $empleado=mysqli_fetch_array($rg);
        $tipo=$empleado['tipo'];
        if($tipo==1)
        {
             $_SESSION['idempleado']=$usr;
            header("Location: generic.html");
        }
         else
            if($tipo==2)
            {
                 $_SESSION['idempleado']=$usr;
             echo "<script>window.location.replace('maestroVista.php?i=$usr')</script>";
            }
         
                else
                {
               $_SESSION['idempleado']=$usr;
                echo "<script>window.location.replace('controlHorario.php')</script>"; 
                }
                   
    
         
    } else{
        $errors[]= "Usuario o password incorrectos";

    }
    if (isset($errors)){
            
            ?>
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Error!</strong> 
                    <?php
                        foreach ($errors as $error) {
                                echo $error;
                            }
                        ?>
            </div>
            <?php
            }
?>