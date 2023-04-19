<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CarrinhoController;

// Route::get('/', function () {
//     return view('welcome');
// });

// criar uma rota do controller
Route::get('/dashboard/produto', [ProdutoController::class, 'index'])->name('dashboard.produto');
Route::get('/dashboard/{produto}', [ProdutoController::class, 'show'])->name('dashboard.show');
Route::get('/dashboard.cadastroProduto', [ProdutoController::class, 'cadastroP'])->name('dashboard.cadastroProduto');
route::post('/create',[ProdutoController::class,'create'])->name('dashboard.create');
route::post('/dashboard/{produto}',[ProdutoController::class,'store'])->name('dashboard.store'); 
route::post('/delete/{produto}',[ProdutoController::class,'delete'])->name('delete'); 

Route::get('/dashboard/categoria', [CategoriaController::class, 'index'])->name('dashboard.categoria');


Route::get('/', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
