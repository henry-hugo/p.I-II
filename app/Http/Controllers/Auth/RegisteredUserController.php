<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Administrador;
use App\Models\Produto;
use App\Models\Categoria;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $produtos = Produto::all();
        $categorias = Categoria::all();
        return view('produto.index')->with('categorias',$categorias,)->with('produtos',$produtos);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);
        if($request->USUARIO_CPF){
            dd($request->USUARIO_CPF);
            $user = User::create([   
                'USUARIO_NOME' => $request->USUARIO_NOME,
                'USUARIO_EMAIL' => $request->USUARIO_EMAIL,
                'USUARIO_SENHA' => Hash::make($request->USUARIO_SENHA),
                'USUARIO_CPF' => $request->USUARIO_CPF,
            ]);
        }else{
            
            $user = Administrador::create([
                'ADM_NOME' => $request->nome,
                'ADM_EMAIL' => $request->email,
                'ADM_SENHA' => Hash::make($request->senha),
                'ADM_ATIVO'=> 1,
                 ]);
            
        }

        event(new Registered($user));
       
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
 