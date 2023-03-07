<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;



Route::get('/', function () {
    return view('welcome');
});

// criar uma rota do controller

Route::get('/produto',[ProdutoController::class,'index']);
