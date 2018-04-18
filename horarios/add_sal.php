<form id="guardarDatosSal">
<div class="modal fade" id="addDataSal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Agregar Salon:</h4>
      </div>
      <div class="modal-body">
      <div id="datos_ajax_register"></div>
      <div class="form-group">
            <label for="numSal" class="control-label">Numero de salon:</label>
            <input type="number" class="form-control" id="numSal" name="numSal" required >
          </div>
      <div class="form-group">
            <label for="cap" class="control-label">Capacidad:</label>
            <input type="number" class="form-control" id="cap" name="cap" required >
          </div>
      <div class="form-group">
            <label for="area" class="control-label">Area:</label>
            <select type="text" class="form-control" id="area" name="area" required>
            <?php
            include("conexion.php");
            $resultado= mysqli_query($conexion,"SELECT areas_count FROM institucion");
            if($fila=mysqli_fetch_array($resultado)){
              for($i=1;$i<=$fila['areas_count'];$i++){
                echo "<option value= ".$i."> ".$i."</option>";
              }
            }
            ?>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar Salon</button>
      </div>
    </div>
  </div>
</div>
</form>