<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;
use App\Models\ProdutoImagem;
use App\Models\ProdutoEstoque;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        $categorias = Categoria::all();
        return view('dashboard.produto')->with('produtos',$produtos);
    }


    public function show(Produto $produto){
          
        $categorias = Categoria::all();

        return view('dashboard.show')->with('produto', $produto)->with('categorias',$categorias);
    }




    public function categoria(Request $request, $categoria){
        $produtos = Produto::all()->where("CATEGORIA_ID", $categoria);
     
        return view('produto.categoria')->with('produtos', $produtos);
    }



    public function store(Request $request , $produtoId){
       
        
        $produto = Produto::find($produtoId);
        if($produto){
           $produto->update([
                "PRODUTO_NOME" => $request->nome,
                "PRODUTO_DESC" => $request->desc,
                "PRODUTO_PRECO" => (float)$request->preco,
                "PRODUTO_DESCONTO" => (float)$request->desconto,
                "CATEGORIA_ID" => (int)$request->categoria,
                "PRODUTO_ATIVO" => 1,
            ]);
            $produto->save();
            $arrayImagem = json_decode($produto->ProdutoImagem, true);
                if (array_key_exists('0', $arrayImagem) && is_array($arrayImagem['0'])){
                    $imagem = $produto->ProdutoImagem[0];
                    if($imagem){
                        $imagem->update([
                                "IMAGEM_ORDEM"=>(int) $request->ordem,
                                "IMAGEM_URL"=>$request->url
                        ]);
                        $imagem->save();
                    }  
                }else{
                    $creatI = ProdutoImagem::create([
                        "IMAGEM_ORDEM"=>(int)$request->ordem,
                        "PRODUTO_ID"=>  (int)$produtoId,
                        "IMAGEM_URL"=>$request->url
                    ]);
                    $creatI->save();
                }
            
           
                
            $arrayEstoque = json_decode($produto->ProdutoEstoque, true);
            if (array_key_exists('0', $arrayEstoque) && is_array($arrayEstoque['0'])){
                $estoque = $produto->ProdutoEstoque[0];
                if($estoque){
                    $estoque->update([
                        "PRODUTO_QTD"=>(int)$request->estoque,
                    ]);
                    $estoque->save();
                }
            }else {
                $creatE = ProdutoEstoque::create([
                    "PRODUTO_ID"=>(int)$produtoId,
                    "PRODUTO_QTD"=>$request->estoque
                ]);
                $creatE->save();
                
                }
            
            
        }

        return redirect(route('dashboard.produto'));
    }



    public function delete(Request $request , $produto){
        $item = Produto::where('PRODUTO_ID', $produto)->first();
        if($item){
            $item->update([
                "PRODUTO_ATIVO" => 0,
            ]);
            $item->save();
            
        }
        return redirect(route('dashboard.produto'));
    }
    public function cadastroP(){
        $produtos = Produto::all();
        $categorias = Categoria::all();
        return view('dashboard.cadastroProduto')->with('produto', $produtos)->with('categorias',$categorias); ;
    }

    public function create(Request $request){

        $creatP = Produto::create([

                "PRODUTO_NOME" => $request->nome,
                "PRODUTO_DESC" => $request->desc,
                "PRODUTO_PRECO" => (float)$request->preco,
                "PRODUTO_DESCONTO" => (float)$request->desconto,
                "CATEGORIA_ID" => (int)$request->categoria,
                "PRODUTO_ATIVO" => 1,
             ]);
            $creatP->save();
            $id = $creatP["PRODUTO_ID"];

        $creatI = ProdutoImagem::create([
                "IMAGEM_ORDEM"=>(int)$request->ordem,
                "PRODUTO_ID"=>  (int)$id,
                "IMAGEM_URL"=>$request->url
        ]);
        $creatI->save();
        $creatE = ProdutoEstoque::create([
            "PRODUTO_ID"=>(int)$id,
            "PRODUTO_QTD"=>$request->estoque
    ]);
    $creatE->save();

            return redirect(route('dashboard.produto'));
    }
    
}

