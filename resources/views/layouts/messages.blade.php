
        <div class="alert-icon shadow-inner wrap-alert-b">
            @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-st-one" role="alert">
                        <i class="fa fa-check edu-checked-pro admin-check-pro" >
                        <p class="message-mg-rt"><strong>Creación existosa!</strong> {{ $message }}</p></i>
                    </div>
            @endif
            @if(count($errors)>0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger alert-mg-b alert-st-four alert-st-bg3" role="alert">
                        <i class="fa fa-times edu-danger-error admin-check-pro admin-check-pro-clr3" aria-hidden="true"></i>
                        <p class="message-mg-rt"><strong>Oh snap!</strong> {{ $error }}</p>
                    </div>
                @endforeach
            @endif
        </div>

