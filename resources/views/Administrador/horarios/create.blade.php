<!-- Modal -->
<div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Registrar Horario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        {{Form::open(['url'=>'admin-horarios'])}}
        <div class="modal-body">
                <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="name" class="col-form-label">Hora Inicio</label>
                        </div>
                        <div class="col-sm-8">
                            <input required type="time" class="form-control" id="horainicio" name="horainicio" >
                        </div>
                </div>
                <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="email" class="col-form-label">Hora Fin</label>
                        </div>
                        <div class="col-sm-8">
                            <input required type="time" class="form-control" id="horafin" name="horafin" >
                        </div>
                </div>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Cancelar">
            <input type="submit" class="btn btn-primary" value="Aceptar">
          </div>
          {{Form::Close()}}
      </div>
    </div>
  </div>
