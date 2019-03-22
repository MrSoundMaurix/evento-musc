<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InstructorRequest;
use App\Instructor;
use DB;
use Image;
use App;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Administrador.Instructor.index');
    }
    public function indexLista()
    {
        try{
            $instructores = Instructor::orderByDesc('ins_updated_at')->paginate(7);
            return view('Administrador.Instructor.index-list',["instructores" => $instructores]);
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
        return view('Administrador.Instructor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InstructorRequest $request)
    {
        try{
            $instructor = new Instructor;
            $instructor->ins_nombres=trim($request->get('ins_nombres'));
            $instructor->ins_apellidos=trim($request->get('ins_apellidos'));
            $instructor->ins_pais=trim($request->get('ins_pais'));
            $instructor->ins_cedula=trim($request->get('ins_cedula'));
            $instructor->ins_email=trim($request->get('ins_email'));
            $instructor->ins_cv=trim($request->get('tema')).'$$'.trim($request->get('hojav')).'$$'.trim($request->get('resumen')).'$$'.trim($request->get('materiales')).'$$'.trim($request->get('conocimientosp'));

            if ($request->hasFile('ins_foto')) {
                $image = $request->file( 'ins_foto' );
                $imageType = $image->getClientOriginalExtension();
                $imageStr = (string) Image::make( $image )->
                                        resize( 300, null, function ( $constraint ) {
                                            $constraint->aspectRatio();
                                        })->encode( $imageType );

                $instructor->ins_foto = base64_encode( $imageStr );
                $instructor->ins_fototype = $imageType;
                $instructor->save();
            }else{
                return back()->withErrors(['exception'=>"Seleccione una imagen"])->withInput();
            }
            return redirect('admin-instructores-l')->with('success','Instrictor registrado con exito');
        }catch(\Exception | QueryException $e){
            return back()->withErrors(['exception'=>$e->getMessage()])->withInput();
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
        return view('Administrador.Instructor.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $instructor = Instructor::findOrFail($id);
            $instructor->ins_cv = explode("$$",$instructor->ins_cv);
            return view('Administrador.Instructor.edit',["instructor" => $instructor]);
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
    public function update(Request $request, $id)
    {
        try{
            $instructor = Instructor::findOrFail($id);
            $instructor->ins_nombres=trim($request->get('ins_nombres'));
            $instructor->ins_apellidos=trim($request->get('ins_apellidos'));
            $instructor->ins_pais=trim($request->get('ins_pais'));
            $instructor->ins_cedula=trim($request->get('ins_cedula'));
            $instructor->ins_email=trim($request->get('ins_email'));
            $instructor->ins_cv=trim($request->get('tema')).'$$'.trim($request->get('hojav')).'$$'.trim($request->get('resumen')).'$$'.trim($request->get('materiales')).'$$'.trim($request->get('conocimientosp'));

            if ($request->hasFile('ins_foto')) {
                $image = $request->file( 'ins_foto' );
                $imageType = $image->getClientOriginalExtension();
                $imageStr = (string) Image::make( $image )->
                                        resize( 300, null, function ( $constraint ) {
                                            $constraint->aspectRatio();
                                        })->encode( $imageType );

                $instructor->ins_foto = base64_encode( $imageStr );
                $instructor->ins_fototype = $imageType;
            }
            $instructor->update();
            return redirect('admin-instructores-l')->with('success','Instrictor Actualizado con exito');
        }catch(\Exception | QueryException $e){
            return back()->withErrors(['exception'=>$e->getMessage()])->withInput();
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
        $instructor = Instructor::findOrFail($id);
        $instructor->delete();
        return redirect('admin-instructores-l')->with('success','Instrictor Eliminado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pdf_cv($id)
    {
        $instructor = Instructor::findOrFail($id);
        // $instructor->ins_cv=str_replace("\r\n","<br />",$instructor->ins_cv);
        $instructor->ins_cv=str_replace("\t","<span style='display:inline; white-space:pre;'>    </span>",$instructor->ins_cv);
        $instructor->ins_cv = explode("$$",$instructor->ins_cv);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('Administrador.Instructor.pdf_cv',["instructor"=>$instructor]);
        return $pdf->stream();
    }
}
