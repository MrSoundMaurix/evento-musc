
        <div class="alert-icon shadow-inner wrap-alert-b">
            @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        <strong>Exitoso! </strong>{{ $message }}
                    </div>
            @endif
            @if(count($errors)>0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        <strong>Lo sentimos! </strong> {{ $error }}
                    </div>
                @endforeach
            @endif
        </div>

