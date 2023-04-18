<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdministradorController extends Controller
{
    public function   store(Request $request){
        Usuario::create([
       'ADM_NOME' => $request->nome,
       'ADM_EMAIL' => $request->email,
       'ADM_SENHA' => Hash::make($request->senha),
        ]);
      
      return redirect()->route('produto.index');
  }
  public function authenticate()
  {
      if (Auth::attempt(['ADM_EMAIL' => $email, 'ADM_SENHA' => $password ,'ADM_ATIVO' => 1])) {
          // Authentication passed...
          return redirect()->intended('dashboard');
      }
  }
}
