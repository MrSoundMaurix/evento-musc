<div class="container">
    <div class="row">
        <h1>Estudiante</h1>
        <div class="col-sm-6">
            <div>
                Nombres:<input type="text" class="form" value="{{$estudiante->name}}">
            </div>
            <div>
                Apellidos:<input type="text" class="form" value="{{$estudiante->apellido}}">
            </div>
            <div>
                Cédula:<input type="text" class="form" value="{{$estudiante->cedula}}">
            </div>


            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <a class="btn btn-primary" href="{{URL::action('EstudianteController@edit',$estudiante->id)}}">Editar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6"></div>
    </div>

</div>
