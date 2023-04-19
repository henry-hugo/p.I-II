<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;
use App\Models\ProdutoImagem;
use App\Models\ProdutoEstoque;

class CategoriaController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        $categorias = Categoria::all();
        return view('dashboard.categoria')->with('categorias',$categorias);
    }
}