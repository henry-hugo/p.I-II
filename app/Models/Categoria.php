<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = "CATEGORIA";
    protected $primaryKey = "CATEGORIA_ID";
    protected $fillable = ["CATEGORIA_NOME","CATEGORIA_DESC", "CATEGORIA_ATIVO"];

    public $timestamps = false;

    public function Produtos(){
        return $this->belongsToMany(Produto::class, 'CATEGORIA_ID','CATEGORIA_ID');
    }
}
