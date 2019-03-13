{!! Form::open(['route' => ['usuarios.update', $estudiante->id],'method' => 'PATCH','files' => 'true']) !!}

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="cedula">Cédula</label> <label for="cedula" style="color:red">*</label>
            <input type="text" name="cedula" maxlength="10" minlength="10" pattern="[0-9]+" value="{{$estudiante->cedula}}" required
                class="form-control">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="nombre">Nombres</label> <label for="nombre" style="color:red">*</label>
            <input type="text" name="nombres" value="{{$estudiante->name}}" required class="form-control">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="apellidos">Apellidos</label> <label for="apellidos" style="color:red">*</label>
            <input type="text" name="apellidos" value="{{$estudiante->apellido}}" required class="form-control">
        </div>
    </div>
    <input type="submit" value="Guardar" class="btn btn-primary">

</div>

{!!Form::close()!!}
