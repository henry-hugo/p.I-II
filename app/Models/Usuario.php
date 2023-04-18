<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;

class Usuario extends Model
{
    use HasFactory;
    protected $table = "USUARIO";
    protected $primaryKey = "USUARIO_ID";
    protected $fillable = ['USUARIO_NOME', 'USUARIO_EMAIL','USUARIO_SENHA','USUARIO_CPF',];
    
    public $timestamps = false;

    
}
