<form id="guardarDatosCur">
<div class="modal fade" id="addDataCur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Modificar Curso:</h4>
      </div>
      <div class="modal-body">
      <div id="datos_ajax_register"></div>

            <div class="form-group">
            <label for="idE" class="control-label">ID del Maestro:</label>
            <select type="text" class="form-control" id="idE" name="idE" required>
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
</div>
</form>