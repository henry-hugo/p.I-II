<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        $categorias = Categoria::all();
        return view('produto.index')->with('produtos',$produtos);
    }
    public function show(Produto $produto){
        // ver os dados do banco  dd($produto);
        $categorias = Categoria::all();
        return view('produto.show')->with('produto', $produto)->with('categorias',$categorias);
    }

    public function categoria(Request $request, $categoria){
        $produtos = Produto::all()->where("CATEGORIA_ID", $categoria);
     
        return view('produto.categoria')->with('produtos', $produtos);
    }

    
}

