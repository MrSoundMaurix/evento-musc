<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function sistemasc(){
        $hola='hola';
        return view('sistemasc',compact('hola'));
    }

    public function sistemast(){
        return view('sistemast');
    }

    public function publicidadc(){
        return view('publicidadc');
    }

    public function publicidadt(){
        return view('publicidadt');
    }

    public function contabilidad(){
        return view('contabilidad');
    }

    public function biotecnologia(){
        return view('biotecnologia');
    }
}
