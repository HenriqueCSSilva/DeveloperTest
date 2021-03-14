<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.finder');
});



Route::get('/finder', function () {
    return view('pages.finder');
});
Route::get('/detail', function () {
    return view('pages.detail');
});
Route::get('/registerBusiness', function () {
    return view('pages.registerBusiness');
});
Route::get('/tabela', function () {
    return view('pages.tabela');
});
Route::get('/teste', function () {
    return view('pages.finder_vinicius');
});



Route::post('/sucessoGravou', [App\Http\Controllers\GravaFormulario::class, 'gravarFormulario'])->name('sucessoGravou');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
