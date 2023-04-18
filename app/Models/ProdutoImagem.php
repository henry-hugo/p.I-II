<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoImagem extends Model
{
    use HasFactory;
    protected $table = "PRODUTO_IMAGEM";
    protected $primaryKey = "IMAGEM_ID";
    protected $fillable = ["IMAGEM_ORDEM", "IMAGEM_URL","PRODUTO_ID"];

    public $timestamps = false;
}
