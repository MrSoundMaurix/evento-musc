<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Espacio;
use App\Taller;
use App\Categoria;
use App\Instructor;
use App\Http\Requests\TallerRequest;
use Image;

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
            return view('Administrador.Talleres.index',compact('talleres'));
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
        $espacios = Espacio::all();
        $categorias = Categoria::all();
        $instructores = Instructor::all();
        return view('Administrador.Talleres.create',compact('categorias','instructores','espacios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TallerRequest $request)
    {
        //return $request;
         try{
            $taller = Taller::create($request->all());

            if ($request->hasFile('tal_foto')) {
                $image = $request->file( 'tal_foto' );
                $imageType = $image->getClientOriginalExtension();
                $imageStr = (string) Image::make( $image )->
                                        resize( 300, null, function ( $constraint ) {
                                            $constraint->aspectRatio();
                                        })->encode( $imageType );

                $taller->tal_foto = base64_encode( $imageStr );
                $taller->tal_fototype = $imageType;
                $taller->save();
            }

            return redirect('admin-talleres')->with('success','Taller creado exitosamente');
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
        return view('Administrador.Talleres.show',compact('taller'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $espacios = Espacio::all();
        $categorias = Categoria::all();
        $instructores = Instructor::all();
        $taller = Taller::findOrFail($id);
        return view('Administrador.Talleres.edit',compact('taller','espacios','categorias','instructores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TallerRequest $request, $id)
    {
        try{
            $taller = Taller::updateOrCreate(['tal_id'=>$id],$request->all());

            if ($request->hasFile('tal_foto')) {
                $image = $request->file( 'tal_foto' );
                $imageType = $image->getClientOriginalExtension();
                $imageStr = (string) Image::make( $image )->
                                        resize( 300, null, function ( $constraint ) {
                                            $constraint->aspectRatio();
                                        })->encode( $imageType );

                $taller->tal_foto = base64_encode( $imageStr );
                $taller->tal_fototype = $imageType;
                $taller->save();
            }

            return redirect('admin-talleres')->with('success','Taller actualizado exitosamente');
        }catch(\Exception | QueryException $e){
            return back()->withErrors(['exception'=>$e->getMessage()]);
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
