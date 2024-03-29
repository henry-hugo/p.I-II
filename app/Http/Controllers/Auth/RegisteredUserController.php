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
           
            $user = Administrador::create([
                'ADM_NOME' => $request->nome,
                'ADM_EMAIL' => $request->email,
                'ADM_SENHA' => Hash::make($request->senha),
                'ADM_ATIVO'=> 1,
                 ]);
            
        
        $user->save();

        return redirect(route('dashboard.administrador'));
       
       
    }


    public function index(){
        $user = User::all();
        return view('dashboard.administrador.index')->with('user',$user,);
    }

    public function show(user $user){
        return view('dashboard.administrador.show')->with('user', $user);
    }

    public function storeA(Request $request , $user){
        
        $adm = User::find($user);
        if($adm){
           $adm->update([
                "ADM_NOME" => $request->nome,
                "ADM_EMAIL" => $request->email,
                "ADM_SENHA"=>Hash::make($request->senha),
                "adm_ATIVO"=>1
           ]);
           $adm->save();
        }
        return redirect(route('dashboard.administrador'));
    }

    public function cadastroA(){
    
        return view('dashboard.administrador.cadastro');
    }

    public function delete(Request $request , $user){
        $item = User::where('ADM_ID', $user)->first();
        if($item){
            $item->update([
                "ADM_ATIVO" => 0,
            ]);
            $item->save();
        }
        return redirect(route('dashboard.administrador'));
    }
}
 