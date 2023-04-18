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
route::post('/dashboard/{produto}',[ProdutoController::class,'store'])->name('dashboard.store'); 

Route::get('/', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
