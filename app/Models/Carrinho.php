<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;


class Carrinho extends Model
{
    protected $fillable =['USUARIO_ID','PRODUTO_ID','ITEM_QTD'];
    protected $table ='CARRINHO_ITEM';

    public $timestamps = false;

    public function Produto(){
        return $this->belongsTo(Produto::class, 'PRODUTO_ID', 'PRODUTO_ID');
    }

    protected function setKeysForSaveQuery($query)
    {
        $query->where('USUARIO_ID', $this->getAttribute('USUARIO_ID'))
                ->where ('PRODUTO_ID', $this->getAttribute('PRODUTO_ID'));
        return $query; 
    }


    public function somaDesconto($id ){
        $dados = Carrinho::where('USUARIO_ID', $id)->get();

        $somaFinal=0;
        $resultado = 0;
            for($i=0;$i< count($dados);$i++){
                $desconto=0;
                $soma = Produto::where('PRODUTO_ID', $dados[$i]['PRODUTO_ID'])->get();
                $desconto += $soma[0]['PRODUTO_DESCONTO'];
                $quantidade1 = $dados[$i]['ITEM_QTD'];
                $somaFinal =$desconto * $quantidade1;
                $resultado += $somaFinal;
            }
            return number_format(($resultado), 2, ',', '.');
    }



    public function somaTotal($id ){
        $dados = Carrinho::where('USUARIO_ID', $id)->get();
        $somaFinal=0;
        $resultado = 0;

            for($i=0;$i< count($dados);$i++){
                $preco=0;
                $soma = Produto::where('PRODUTO_ID', $dados[$i]['PRODUTO_ID'])->get();
                $preco += $soma[0]['PRODUTO_PRECO'];
                $quantidade1 = $dados[$i]['ITEM_QTD'];
                $resultado = $preco * $quantidade1;
                $somaFinal += $resultado;
            }
            return number_format(($somaFinal), 2, ',', '.');
    }



    public function somaFinal($id ){
        $dados = Carrinho::where('USUARIO_ID', $id)->get();
        $somaFinal=0;
        $somaFina2=0;
        $resultado = 0;
            for($i=0;$i< count($dados);$i++){
                $desconto=0;
                $preco=0;
                $sub =0;
                $soma = Produto::where('PRODUTO_ID', $dados[$i]['PRODUTO_ID'])->get();
                $desconto += $soma[0]['PRODUTO_DESCONTO'];
                $preco += $soma[0]['PRODUTO_PRECO'];
                $quantidade1 = $dados[$i]['ITEM_QTD'];
                $somaFinal= $preco * $quantidade1;
                $somaFina2= $desconto * $quantidade1;
                $sub = $somaFinal - $somaFina2;
                $resultado += $sub;
            }

            return number_format(( $resultado), 2, ',', '.');
    }



    public function desPrecoDesconto($id ){
        $dados = Carrinho::where('USUARIO_ID', $id)->get();
        $somaFinal=0;
        $somaFina2=0;
        $resultado = 0;
            for($i=0;$i< count($dados);$i++){
                $desconto=0;
                $preco=0;
                $sub =0;
                $soma = Produto::where('PRODUTO_ID', $dados[$i]['PRODUTO_ID'])->get();
                $desconto += $soma[0]['PRODUTO_DESCONTO'];
                $preco += $soma[0]['PRODUTO_PRECO'];
                $quantidade1 = $dados[$i]['ITEM_QTD'];
                $somaFinal= $preco * $quantidade1;
                $somaFina2= $desconto * $quantidade1;
                $sub = $somaFinal - $somaFina2;
                $resultado += $sub;
            }

            $desconto = $resultado / 10;
            return number_format(( $resultado - $desconto), 2, ',', '.');
    }


    public function somaQTD($quantidade , $preco){
        return number_format(( $preco * $quantidade), 2, ',', '.');
    }

}
