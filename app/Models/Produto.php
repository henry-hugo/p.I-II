<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Produto extends Model
{
    use HasFactory;
    protected $table = "PRODUTO";
    protected $primaryKey = "PRODUTO_ID";
    protected $fillable = ['PRODUTO_NOME', 'PRODUTO_DESC','PRODUTO_PRECO','PRODUTO_DESCONTO','PRODUTO_ATIVO','CATEGORIA_ID'];

    public $timestamps = false;
    
    public function ProdutoImagem(){
        return $this->hasMany(ProdutoImagem::class, 'PRODUTO_ID','PRODUTO_ID');
    }
    public function ProdutoEstoque(){
        return $this->belongsTo(ProdutoEstoque::class, 'PRODUTO_ID','PRODUTO_ID');
    }
    public function Categoria(){
        return $this->belongsTo(Categoria::class, 'CATEGORIA_ID','CATEGORIA_ID');
    }
    public function getPrecoDesconto(){
        return number_format(($this->PRODUTO_PRECO - $this->PRODUTO_DESCONTO), 2, ',', '.');
    }
    

}
