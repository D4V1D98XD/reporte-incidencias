<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use PHPUnit\Framework\Error\Notice;
use App\Models\Incidencia;

class HomeController extends Controller
{
    public function home(){
        $reportes = Incidencia::all();
        return view('home',compact('reportes'));
    }

    public function homeAdministrador(){
        $noticias = Noticia::all();

        return view('administrador.home', compact('noticias'));
    }
}
