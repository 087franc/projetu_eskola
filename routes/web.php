<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudanteController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', function () { return view('index');});
Route::get('/estudante', [EstudanteController::class, 'index']);
Route::post('/estudante/aumenta', [EstudanteController::class, 'aumenta']);



// Route::get('/estudante', function () {
//     return view('estudante.index');
// });

// Route::get('/profile', function () {
//     return view('profile');
// });
