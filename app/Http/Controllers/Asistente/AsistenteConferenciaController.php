<?php

namespace App\Http\Controllers\Asistente;

use Illuminate\Http\Request;
<<<<<<< HEAD:app/Http/Controllers/Asistente/AsistenteConferenciaController.php
use App\Http\Controllers\Controller;
=======
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

>>>>>>> 01cb6ff0169e49e15575a1d14e52086ac8ea3136:app/Http/Controllers/EstudianteController.php

class AsistenteConferenciaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD:app/Http/Controllers/Asistente/AsistenteConferenciaController.php
        //
=======

        $estudiante = User::find(Auth::user()->id);
        return view('Estudiante.index', ["estudiante" => $estudiante]);
>>>>>>> 01cb6ff0169e49e15575a1d14e52086ac8ea3136:app/Http/Controllers/EstudianteController.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Asistente.conferencias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante = User::find($id);
        return view('Estudiante.edit', ["estudiante" => $estudiante]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {

            $estudiante = User::findOrFail($id);
            $estudiante->cedula = $request->get('cedula');
            $estudiante->name = $request->get('nombres');
            $estudiante->apellido = $request->get('apellidos');

            $estudiante->update();
            return redirect('usuarios')->with('success', 'Punto Actualizado con éxito');
        } catch (Exception $e) {
            return back()->withErrors(['exception' => $e->getMessage()])->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //

    }
}