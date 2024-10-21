<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudanteController;

Route::get('/dashboard', function () {
    return view('index');
});


Route::get('/', function () {
    return view('welcome');
});


Route::get('/estudante', [EstudanteController::class, 'index']);



// Route::get('/estudante', function () {
//     return view('estudante.index');
// });

// Route::get('/profile', function () {
//     return view('profile');
// });
