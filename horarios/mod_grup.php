<form id="formModifGr">
<div class="modal fade" id="modalGrp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="tittleG" name="tittleG">Modificar Grupo:</h4>
      </div>
      <div class="modal-body">
      <div class="form-group">
        <input id="idgrupo" type="text" name="idgrupo" class="form-control" style="display: none">
            <label for="numsalon" class="control-label">N° salón:</label>
            <select type="text" class="form-control" id="numsalon" name="numsalon" required>
            <?php
           include("conexion.php");
            $resultado= mysqli_query($conexion,"SELECT distinct numSalon FROM grupo");
            while($fila=mysqli_fetch_array($resultado)){
                echo "<option value= ".$fila['numSalon']."> ".$fila['numSalon']."</option>";
            }
            ?>
            </select>
          </div>
      <div class="form-group">
            <label for="seccion" class="control-label">Sección:</label>
            <select type="text" class="form-control" id="seccion" name="seccion" required>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="F">F</option>
            </select>
          </div>
      <div class="form-group">
            <label for="grado" class="control-label">Grado:</label>
            <select type="text" class="form-control" id="grado" name="grado" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            </select>
          </div>
           <div class="form-group">
            <label for="periodo" class="control-label">Periodo:</label>
            <select type="text" class="form-control" id="periodo" name="periodo" required>
            <option value="EA17">EA17</option>
            <option value="AD17">AD17</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar datos</button>
      </div>
         <div id="datos_modgr"></div>
    </div>
  </div>
</div>
</form>