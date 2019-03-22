<?php

namespace App\Http\Controllers\Asistente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Taller;
use App\AsistenteTaller;
use Auth;

class TallerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $talleres = Taller::orderByDesc('tal_updated_at')->paginate(10);
            return view('Asistente.talleres.index',compact('talleres'));
        }catch(\Exception | QueryException $e){
            return back()->withErrors(['exception'=>$e->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->tal_id;
         try{

            $usuario = Auth::user();
            $Asistaller = new AsistenteTaller;
            $Asistaller->asi_id=$usuario->id;
            $Asistaller->tal_id=$request->tal_id;
            $Asistaller->save();
            return redirect('asistente-talleres/'.$request->tal_id)->with('success','Us se ha registrado a ese taller');
        }catch(\Exception | QueryException $e){
            return back()->withErrors(['exception'=>$e->getMessage()]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $taller = Taller::find($id);
        return view('Asistente.talleres.show',compact('taller'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
