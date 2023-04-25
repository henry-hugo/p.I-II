@extends('layout.scripts') 
@section('main')
<section class="container">
    <h1  class="text-center">CADASTRO ADMINISTRADOR</h1>
    <form action="{{route('administrador.create')}}" method="post">
        @csrf
        <label for="nome">Nome :</label>
        <input  class="form-control" type="text"  name="nome">  
        <label for="email">Email :</label>
        <input  class="form-control" type="email" name="email" id="">   
        <label for="nome">Senha :</label>
        <input  class="form-control" type="password"  name="senha">  
        <br>
        <input class="btn" type="submit" value="Cadastrar">
    </form>
</section>
@endsection