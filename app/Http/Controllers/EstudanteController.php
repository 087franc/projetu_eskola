<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    public function index(){
        $dadus_estudante = \App\Models\Estudante::All();
        return view('estudante.estudante',['dadus_estudante'=> $dadus_estudante]);
    }
}
