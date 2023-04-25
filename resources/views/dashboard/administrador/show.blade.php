@extends('layout.scripts')
@section('main')
<section class="container">
    <div>
        <h1  class="text-center">EDITAR</h1>
        <form action="{{route('administrador.store', $user->ADM_ID)}}" method="post">
            @csrf
            <label for="nome">Nome :</label>
            <input  class="form-control" type="text"  name="nome" value="{{$user->ADM_NOME}}">
            <label for="email">Email :</label>
            <input  class="form-control" type="text" name="email" id="" value="{{$user->ADM_EMAIL}}" >
            <label for="nome">Senha :</label>
            <input  class="form-control" type="password"  name="senha" value="novasenha">
            <br>
            <input class="btn" type="submit" value="Editar">
        </form>
    </div>
</section>
@endsection