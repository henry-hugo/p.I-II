<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrinho;
use Illuminate\Support\Facades\Auth;
use App\Models\Produto;

class CarrinhoController extends Controller
{
    public function store(Request $request , $produto){
        
        $item = Carrinho::where('USUARIO_ID', Auth::user()->USUARIO_ID)
        ->where('PRODUTO_ID', $produto)->first();

        if($item){
            $item =$item->update([
            'ITEM_QTD'=> (int)$request->quantidadeSelect
            ]);
            return redirect(route('carrinho.index'));
        }else{

        
            if($request->quantidade == 'outro'){
            
                Carrinho::create([
                    'USUARIO_ID'=> Auth::user()->USUARIO_ID,
                    'PRODUTO_ID'=> (int)$produto,
                    'ITEM_QTD'=> (int)$request->quantidadeSelect
                ]);
                return redirect(route('carrinho.index'));
            }else{
            
                Carrinho::create([
                    'USUARIO_ID'=> Auth::user()->USUARIO_ID,
                    'PRODUTO_ID'=> (int)$produto,
                    'ITEM_QTD'=> (int)$request->quantidade
                ]);
                return redirect(route('carrinho.index'));
            }
        }

   
        	
        }
        public function index(){
            $carrinho = Carrinho::where('USUARIO_ID' ,Auth::user()->USUARIO_ID)->get();
            return view ('carrinho.index')->with('carrinho',$carrinho);
        }
        public function pagamento(){
            $carrinho = Carrinho::where('USUARIO_ID' ,Auth::user()->USUARIO_ID)->get();
            return view ('carrinho.pagamento')->with('carrinho',$carrinho);
        }
    }
  
