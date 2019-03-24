<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Concurso;
use App\Http\Requests\ConcursoRequest;

class ConcursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $concursos = Concurso::orderByDesc('css_updated_at')->paginate(7);
            return view('Administrador.concursos.index',compact('concursos'));
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
        return view('Administrador.concursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConcursoRequest $request)
    {

        try{
            //info($request);
            $concurso=new Concurso();
            $concurso->css_nombre=trim($request->get('css_nombre'));
            $concurso->css_reglamento=trim($request->file('css_reglamento')->store('public'));
            $concurso->css_status=(true);

            //$concurso = Concurso::create($request->all());
            //dd($concurso);
            $concurso->save();
            // if ($request->hasFile('css_reglamento')) {
            //     $image = $request->file( 'css_reglamento' );
            //     $imageType = $image->getClientOriginalExtension();
            //     $imageStr = (string) Image::make( $image )->
            //                             resize( 300, null, function ( $constraint ) {
            //                                 $constraint->aspectRatio();
            //                             })->encode( $imageType );

            //     $concurso->esp_foto = base64_encode( $imageStr );
            //     $concurso->esp_fototype = $imageType;
            //     $concurso->save();
            // }

            return redirect('admin-concursos')->with('success','Concurso creado');
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
        try {
            //code...
            $concurso = Concurso::findOrFail($id);
           return view('Administrador.concursos.edit',["concurso"=>$concurso]);

        }catch(\Exception | QueryException $e){
            return back()->withErrors(['exception'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ConcursoRequest $request, $id)
    {

      //  try{
            $concurso = Concurso::findOrFail($id);
            //dd($request->get("css_nombre"));
            $concurso->css_nombre=trim($request->get('css_nombre'));
            $concurso->css_status=true;
            if ($request->hasFile('css_reglamento')) {
                $concurso->css_reglamento=trim($request->file('css_reglamento')->store('public'));

            }
           // $concurso->css_cv=trim($request->get('tema')).'$$'.trim($request->get('hojav')).'$$'.trim($request->get('resumen')).'$$'.trim($request->get('materiales')).'$$'.trim($request->get('conocimientosp'));

            // if ($request->hasFile('ins_foto')) {
            //     $image = $request->file( 'ins_foto' );
            //     $imageType = $image->getClientOriginalExtension();
            //     $imageStr = (string) Image::make( $image )->
            //                             resize( 300, null, function ( $constraint ) {
            //                                 $constraint->aspectRatio();
            //                             })->encode( $imageType );

            //     $concurso->ins_foto = base64_encode( $imageStr );
            //     $concurso->ins_fototype = $imageType;
            // }
            $concurso->update();
            return redirect('admin-concursos')->with('success','Concurso Actualizado exitosamente');
        // }catch(\Exception | QueryException $e){
        //     return back()->withErrors(['exception'=>$e->getMessage()])->withInput();
        // }



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
