<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Database\Eloquent\Collection;
use Auth;
USE DB;
use App\Http\Requests\UserRequest;
use App\Role;
use Illuminate\Database\QueryException;

use Illuminate\Auth\Events\Registered;
use Tavo\ValidadorEc as ValidatorEcPackage;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/usuario-home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'cedula' => ['required', 'string', 'max:50','unique:users'],
            'name' => ['required', 'string', 'max:50'],
            'apellido' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
    $usuario= User::create
        ([
            'pais' => $data['pais'],
            'cedula' => $data['cedula'],
            'name' => $data['name'],
            'apellido' => $data['apellido'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]); 
        $usuario
        ->roles()
        ->attach(Role::where('name', 'usuario')->first());
    
      return $usuario;
    }
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();  
        $validatorEc = new ValidatorEcPackage();
        $isValid = $validatorEc->validarCedula($user->cedula);
        if (!$isValid) {
            return back()->with('error_prov', 'La cédula es INCORRECTA')->withInput();
        }      
        event(new Registered($user = $this->create($request->all())));
        $this->guard()->login($user);
      
    
    
        $data = array('name' => $request['name'], 'email' => $request['email']);
        Mail::send('emails.email', $data, function($message) use ($data) {
            $message->to($data['email'])
                    ->subject('Welcome!');
            $message->from('s.sajid@artisansweb.net','MUSC');
        });

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
 
    }
    
}
