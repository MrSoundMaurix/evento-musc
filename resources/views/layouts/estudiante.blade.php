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
            <div>
                <button type="submit">Editar</button>
            </div>
        </div>
        <div class="col-sm-6"></div>
    </div>

</div>
