<form id="guardarDatos" enctype="multipart/form-data" action="nuevoempleado.php" method="POST">
<div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Agregar Empleado:</h4>
      </div>
      <div class="modal-body">
			<div id="datos_ajax_register"></div>
      <div class="form-group">
            <label for="id" class="control-label">ID Empleado:</label>
            <input type="text" class="form-control" id="id" name="id" required >
          </div>
      <div class="form-group">
            <label for="pwd" class="control-label">Contraseña:</label>
            <input type="text" class="form-control" id="pwd" name="pwd" required >
          </div>
		  <div class="form-group">
            <label for="nombre" class="control-label">Nombre(s):</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
          </div>
		  <div class="form-group">
            <label for="paterno" class="control-label">Apellido Paterno:</label>
            <input type="text" class="form-control" id="paterno" name="paterno" required>
          </div>
		  <div class="form-group">
            <label for="materno" class="control-label">Apellido Materno:</label>
            <input type="text" class="form-control" id="materno" name="materno" required > 
          </div>
      <div class="form-group">
            <label for="email" class="control-label">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" required">
          </div>
      <div class="form-group">
            <label for="cel" class="control-label">Celular:</label>
            <input type="number" class="form-control" id="cel" name="cel" required">
          </div>
      <div class="form-group">
            <label for="tipo">Tipo de cuenta: </label>
            <select type="text" name="tipo" class="form-control" id="tipo">
            <option value='0'>Administrador</option>
            <option value='1'>Prefecto</option>
            <option value='2'>Maestro</option>
            </select>
      </div>
      <div class="form-group">
            <label for="tipo">Sexo: </label>
            <select type="text" name="sexo" class="form-control" id="sexo">
            <option value='F'>Femenino</option>
            <option value='M'>Masculino</option>
            </select>
      </div>
        <div class="form-group">
            <label for="imagen" class="control-label">Foto:</label>
            <input type="file" class="form-control" id="imagen" name="imagen" required">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Agregar datos</button>
      </div>
    </div>
  </div>
</div>
</form>