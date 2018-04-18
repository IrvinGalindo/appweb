<form id="actualizarDatosCur">
<div class="modal fade" id="dataUpdateCur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Modificar Empleado:</h4>
      </div>
      <div class="modal-body">
      <div id="datos_ajax"></div>
      <div class="form-group">
            <input type="hidden" class="form-control" id="id" name="id" required>
          </div>
            <div class="form-group">
            <label for="idEmp" class="control-label">Maestro:</label>
            <select type="text" class="form-control" id="idEmp" name="idEmp" required>
            <?php
            include("conexion.php");
            $resultado= mysqli_query($conexion,"SELECT idempleado,nombres,paterno,materno FROM empleado WHERE tipo='2'");
            while($fila=mysqli_fetch_array($resultado)){
                echo "<option value= ".$fila['idempleado']."> ".$fila['nombres']." ".$fila['paterno']." ".$fila['materno']."</option>";
            }
            ?>
            </select>
          </div>
          <div class="form-group">
            <label for="idM" class="control-label">Clave de la Materia:</label>
            <select type="text" class="form-control" id="idM" name="idM" required>
            <?php
            include("conexion.php");
            $resultado= mysqli_query($conexion,"SELECT cveMateria,nombre FROM materia");
            while($fila=mysqli_fetch_array($resultado)){
                echo "<option value= ".$fila['cveMateria']."> ".$fila['nombre']."</option>";
            }
            ?>
            </select>
          </div>
          <div class="form-group">
            <label for="idG" class="control-label">Grupo:</label>
            <select type="text" class="form-control" id="idG" name="idG" required>
            <?php
            include("conexion.php");
            $resultado= mysqli_query($conexion,"SELECT idGrupo,grado,seccion FROM grupo");
            while($fila=mysqli_fetch_array($resultado)){
                echo "<option value= ".$fila['idGrupo'].">".$fila['grado']." ".$fila['seccion']."</option>";
            }
            ?>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar datos</button>
      </div>
    </div>
  </div>
</div>
</form>