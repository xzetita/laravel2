<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\noticias\noticia;
use App\Models\imagenes\imagen;
use App\Models\noticias\CreateNoticia;
use View;
use App\Http\Requests\noticiaRequest;
use Illuminate\Support\Str;
use Storage;

class NoticiasController extends Controller
{

    public function index()
    {
        $noticia = noticia::all()->latest('id');
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

        $noticia = Noticia::create($request->all());
        if($request->file('file')){
            $url = Storage::put('noticias',$request->file('file'));
            $noticia->image()->create([
                'url' => $url
            ]);








           /* $noticia = new noticia();
            $noticia->noticia = $request->noticia;
            // script para subir la imagen
            if($request->hasFile("imagen")){
    
                $imagen = $request->file("imagen");
                $noticiaimagen = Str::slug($request->noticia).".".$imagen->guessExtension();
                $ruta = public_path("img/noticia/");
    
                //$imagen->move($ruta,$noticiaimagen);
                copy($imagen->getRealPath(),$ruta.$noticiaimagen);
    
                $noticia->imagenes = $noticiaimagen;            
                
            }
           if ($noticia->save()) {
        return response()-> json([
            "estado" => true,
                     "mensaje"=>"Su noticia ha sido creada",
            "noticia"=>$noticia,]);
        }
            else {
                 return response()-> json([
                    "estado" => false,
                    "mensaje"=>"Su noticia no fue creada",
                    "noticia"=>$noticia,]);
            }
         /*   public function codeaguardar(Request $request){
                $noticia = new noticia();
                $noticia->nombre = $request->nombre;
                // script para subir la imagen
                if($request->hasFile("imagen")){
        
                    $imagen = $request->file("imagen");
                    $nombreimagen = Str::slug($request->nombre).".".$imagen->guessExtension();
                    $ruta = public_path("img/noticia/");
        
                    //$imagen->move($ruta,$nombreimagen);
                    copy($imagen->getRealPath(),$ruta.$nombreimagen);
        
                    $noticia->imagen = $nombreimagen;            
                    
                }
                $noticia->save();
       */
       }
    }
        //

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $noticia)
    {
        $similares = Noticia::where('estado',2)
                            ->latest('id')
                            ->where('id','!=',$post);
            return $noticia;
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
