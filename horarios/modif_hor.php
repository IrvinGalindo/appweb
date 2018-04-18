<form id="formModif">
<div class="modal fade" id="modalModif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modificar Horario</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
           <input id="idhorario" name="idhorario" class="form-control" type="text"  style="display:none" />
          </div>

      <div class="form-group">
            <label for="idncurso" class="control-label">Id curso:</label>
            <select type="text" class="form-control" id="idncurso" name="idncurso" required>
            <?php
           include("conexion.php");
            $resultado= mysqli_query($conexion,"SELECT distinct idncurso FROM horario");
            while($fila=mysqli_fetch_array($resultado)){
                echo "<option value= ".$fila['idncurso']."> ".$fila['idncurso']."</option>";
            }
            ?>
            </select>
          </div>
      <div class="form-group">
            <label for="dia" class="control-label">Dia:</label>
            <select type="text" class="form-control" id="dia" name="dia" required>
            <option value="Lunes">Lunes</option>
            <option value="Martes">Martes</option>
            <option value="Miercoles">Miercoles</option>
            <option value="Jueves">Jueves</option>
            <option value="Viernes">Viernes</option>
            </select>
          </div>
      <div class="form-group">
            <label for="hora" class="control-label">Hora de inicio:</label>
            <select type="text" class="form-control" id="hora" name="hora" required>
            <option value="07:45:00">07:45:00</option>
            <option value="09:15:00">09:15:00</option>
            <option value="11:05:00">11:05:00</option>
            <option value="12:30:00">12:30:00</option>
            </select>
          </div>
           <div class="form-group">
            <label for="hora_fin" class="control-label">Hora de fin:</label>
            <select type="text" class="form-control" id="hora_fin" name="hora_fin" required>
            <option value="09:15:00">09:15:00</option>
            <option value="10:45:00">10:45:00</option>
            <option value="12:30:00">12:30:00</option>
            <option value="14:00:00">14:00:00</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar datos</button>
      </div>
         <div id="datos"></div>
    </div>
  </div>
</div>
</form>
