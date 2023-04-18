<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CarrinhoController;

// Route::get('/', function () {
//     return view('welcome');
// });

// criar uma rota do controller
Route::match(['get','post'],'/',[UsuarioController::class,'create'])->name('produto.index');

Route::post('/',[UsuarioController::class,'store'])->name('registrar');

//
Route::get('/produto/{produto}',[ProdutoController::class, 'show'])->name('produto.show');
Route::match(['get','post'],'/categoria/{categoria}',[ProdutoController::class,'categoria'])->name('produto.categoria');

route::post('/carrinho/{produto}',[CarrinhoController::class,'store'])->name('carrinho.store'); 
route::get('/carrinho', [CarrinhoController::class, 'index'])->name('carrinho.index');

route::get('/carrinho/pagamento', [CarrinhoController::class, 'pagamento'])->name('carrinho.pagamento');

Route::get('/', function () {
    return view('produto.index');
})->middleware(['auth', 'verified'])->name('produto.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
