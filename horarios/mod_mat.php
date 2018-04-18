<form id="actualizarDatosMat">
<div class="modal fade" id="dataUpdateMat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Modificar Materia:</h4>
      </div>
      <div class="modal-body">
			<div id="datos_ajax"></div>
      <div class="form-group">
            <label for="cveMat" class="control-label">Clave de Materia:</label>
            <input type="text" class="form-control" id="cveMat" name="cveMat" required >
          </div>
      <div class="form-group">
            <label for="name" class="control-label">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" required >
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