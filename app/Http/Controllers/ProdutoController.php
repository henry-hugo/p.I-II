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
        return view('dashboard.produto')->with('produtos',$produtos);
    }
    public function show(Produto $produto){
        // ver os dados do banco  dd($produto);
        $categorias = Categoria::all();
        return view('dashboard.show')->with('produto', $produto)->with('categorias',$categorias);
    }

    public function categoria(Request $request, $categoria){
        $produtos = Produto::all()->where("CATEGORIA_ID", $categoria);
     
        return view('produto.categoria')->with('produtos', $produtos);
    }

    public function store(Request $request , $produto){
        
        $item = Produto::where('PRODUTO_ID', $produto)->first();
        if($item){
            $item =$item->update([
                "PRODUTO_NOME" => $request->nome,
                "PRODUTO_DESC" => $request->desc,
                "PRODUTO_PRECO" => (float)$request->preco,
                "PRODUTO_DESCONTO" => (float)$request->desconto,
                "CATEGORIA_ID" => (int)$request->categoria,
                "PRODUTO_ATIVO" => 1,
            ]);
            return redirect(route('dashboard.produto'));
        }
    }
    
}

