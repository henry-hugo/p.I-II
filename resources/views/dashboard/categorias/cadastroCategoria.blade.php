@extends('layout.scripts') 
@section('main')
<section class="container">
    <h1  class="text-center">CADASTRO CATEGORIA</h1>
    <form action="{{route('categoria.create')}}" method="post">
        @csrf
        <label for="nome">Categoria :</label>
        <input  class="form-control" type="text"  name="nome">  
        <label for="desc">Descrição :</label>
        <input  class="form-control" type="text" name="desc" >   
        <br>
        <input class="btn" type="submit" value="Editar">
    </form>
</section>
@endsection