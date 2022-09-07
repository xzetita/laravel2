<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\noticias\noticia;
use App\Models\noticias\imagen;
use App\Models\noticias\CreateNoticia;
use View;
use App\Http\Requests\noticiaRequest;

class NoticiasController extends Controller
{

    public function index()
    {
        $noticia = noticia::all();
        return response()->json($noticia);
    }


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
    public function store(noticiaRequest $request){
        $noticia = noticia::create($request->all());
        return response()-> json([
            "estado" => true,
            "mensaje"=>"Su noticia ha sido creada",
            "noticia"=>$noticia,]);
       /* $validated = $request->validated();
        $noticia -> titulo = $request->titulo;
        $noticia -> descripcion = $request->descripcion;
        $noticia -> descripcion_portada = $request->descripcion_portada;*/
        //$noticia->save();
        /*if($noticia->save()){
            return response()->json(['estado'=>true, 'mensaje'=>'Se agregaron los datos'],201);
        }
        else return response()->json(['estado'=>true, 'mensaje'=>'No se agregaron los datos']);*/
       }
        //

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
