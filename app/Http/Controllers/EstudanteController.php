<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    public function index(){
        $dadus_estudante = \App\Models\Estudante::All();
        return view('estudante.estudante',['dadus_estudante'=> $dadus_estudante]);
    }

    public function aumenta(Request $request) {
        // Validate input data
        $request->validate([
            'naran_kompletu' => 'required|string|max:255',
            'sexo' => 'required|string|max:1',
            'hela_fatin' => 'required|string|max:255',
            'data_moris' => 'required|date',
            'no_telefone' => 'required|numeric',
        ]);
    
        // Create a new Estudante record
        \App\Models\Estudante::create($request->all());
    
        // Redirect back to the estudante list or show a success message
        return redirect('/estudante')->with('sukses','dadus aumenta ho susesu!');
    }
    
}
