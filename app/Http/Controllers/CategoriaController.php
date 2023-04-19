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
        return view('dashboard.categorias.index')->with('categorias',$categorias);
    }

    public function show(Categoria $categoria){

        return view('dashboard.categorias.show')->with('categoria', $categoria);
    }

    public function store(Request $request , $produtoId){
       
        
        $categoria = Categoria::find($produtoId);
        if($categoria){
           $categoria->update([
                "CATEGORIA_NOME" => $request->nome,
                "CATEGORIA_DESC" => $request->desc,
                "CATEGORIA_ATIVO"=>1
           ]);
           $categoria->save();
        }
        return redirect(route('dashboard.categoria'));
    }

    public function delete(Request $request , $produto){
        $item = Categoria::where('CATEGORIA_ID', $produto)->first();
        if($item){
            $item->update([
                "CATEGORIA_ATIVO" => 0,
            ]);
            $item->save();
        }
        return redirect(route('dashboard.categoria'));
    }

    public function cadastroC(){
        $produtos = Produto::all();
        $categorias = Categoria::all();
        return view('dashboard\categorias\cadastroCategoria')->with('produto', $produtos)->with('categorias',$categorias);
    }


    public function create(Request $request){

        $creatC = Categoria::create([

                "CATEGORIA_NOME" => $request->nome,
                "CATEGORIA_DESC" => $request->desc,
                "CATEGORIA_ATIVO"=>1
            ]);
            $creatC->save();
            return redirect(route('dashboard.categoria'));
        }
        

}