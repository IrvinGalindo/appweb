<form id="institu" name="institu">
<div class="modal fade" id="escuela" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Agregar Institución</h4>
      </div>
      <div class="modal-body">
      <div class="form-group">
            <label for="nombre" class="control-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required >
          </div>
      <div class="form-group">
            <label for="areas" class="control-label">N° areas:</label>
            <input type="number" class="form-control" id="areas" name="areas" required >
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </div>
      <div id="mensaje" name="mensaje"></div>
    </div>
  </div>
</div>
</form>