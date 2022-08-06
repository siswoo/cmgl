<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    //return view('welcome');
    return "Hola Juan Maldonado Bienvenido";
});

Route::get('prueba',HomeController::class);

Route::controller(CursoController::class)->group(function(){
    Route::get("curso",'index');
    Route::get("curso/create",'create');
    Route::get("curso/{id}",'show');
});
