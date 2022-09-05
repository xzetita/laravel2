<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\contactoRequest;
use App\Models\contactos\contacto;
use View;


class formularioController extends Controller
{
    //
    public function index(){
        $contacto = contacto::all();
        return response()->json($contacto);
    }

    public function store(contactoRequest $request){
     $contacto = contacto::create($request->all());
    }
}
