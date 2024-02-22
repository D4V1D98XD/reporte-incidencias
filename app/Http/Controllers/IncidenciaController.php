<?php

namespace App\Http\Controllers;
use App\Models\Incidencia;


use Illuminate\Http\Request;

class IncidenciaController extends Controller
{
    public function RegistrarIncidencia(){
        return view('Nuevo_Reporte');
    }
    public function GuardarIncidencia(Request $datos){
        Incidencia::create([ 
            'user_id' => 1, 
            'nombre' => $datos->input('nombre'), 
            'descripcion' => $datos->input('descripcion'), 
            'area' => $datos->input('area'), 
            'fecha'=> $datos->input('fecha'), 
            'foto' => '',
            'estado' => 1 
        ]);
        return redirect('/home');
    }
}
