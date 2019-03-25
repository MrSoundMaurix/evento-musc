@auth {!! Form::open(['method'=>'DELETE','route'=>['productos.destroy',$concurso->css_id],'onsubmit'=> 'return confirm("Estas
seguro de borrar este concurso ?")' ]) !!}
<input type="submit" value="Eliminar Concurso ?" class="btn btn-danger"> {!! Form::close() !!} @endauth
