<form id="asi" name="asi" action="pdfasistencia.php" method="GET" target="_blank">
<div class="modal fade" id="asistencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Reporte de asistencia</h4>
      </div>
      <div class="modal-body">
      <div class="form-group">
            <label for="fecha" class="control-label">Seleccione una fecha:</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required >
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary"> Generar</button>
      </div>
      <div id="mensaje" name="mensaje"></div>
    </div>
  </div>
</div>
</form>