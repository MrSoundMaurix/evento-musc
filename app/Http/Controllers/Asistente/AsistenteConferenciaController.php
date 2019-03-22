<?php

namespace App\Http\Controllers\Asistente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\AsistenteConferencia;
use Auth;
use App\User;
use DB;
use Image;
use App\Http\Requests\AsistenteConferenciaRequest;

class AsistenteConferenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Asistente.conferencias.index');
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
    public function store(AsistenteConferenciaRequest $request)
    {
        try{            
            // info($request.'$$$$$$$$$$$$$$$$444'.Auth::user().'iddddd'.Auth::id());
            // $asistenteConferencia = AsistenteConferencia::create($request->all());
            $asistenteConferencia = new AsistenteConferencia;
            // info('ass: '.$asistenteConferencia);
            // info( Auth::id().'########'.Auth::user());
            $asistenteConferencia->usu_id = Auth::id();            
            $asistenteConferencia->con_id = 1;
            $asistenteConferencia->asc_nrodocumento = $request->asc_nrodocumento;

            if ($request->hasFile('asc_foto')) {
                $image = $request->file( 'asc_foto' );
                $imageType = $image->getClientOriginalExtension();
                $imageStr = (string) Image::make( $image )->
                                        resize( 300, null, function ( $constraint ) {
                                            $constraint->aspectRatio();
                                        })->encode( $imageType );

                $asistenteConferencia->asc_foto = base64_encode( $imageStr );
                $asistenteConferencia->asc_fototype = $imageType;
                $asistenteConferencia->save();
            }

            return redirect('asistente-conferencia')->with('success','asc creado');
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
