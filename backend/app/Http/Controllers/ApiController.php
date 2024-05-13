<?php

namespace App\Http\Controllers;
use App\Models\Duenio;
use App\Models\Gerente_comercial;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function duenios(Request $request){
        $duenios = Duenio::all();
        return response()->json($duenios);
    }


    public function gerente_comercials(Request $request){
        $gerentes_comercials = Gerente_comercial::all();    
        return response()->json($gerentes_comercials); 
    }

    public function proyectos(Request $request){
        $proyectos = Proyecto::all();    
        return response()->json($proyectos); 
    }
}
