@extends('layout.scripts')
@section('main')
<section class="container">
    <div>
        <h1  class="text-center">EDITAR</h1>
        <form action="{{route('categoria.store', $categoria->CATEGORIA_ID)}}" method="post">
            @csrf
            <label for="nome">Nome :</label>
            <input  class="form-control" type="text"  name="nome" value="{{$categoria->CATEGORIA_NOME}}">
            <label for="desc">Descrição :</label>
            <input  class="form-control" type="text" name="desc"  value="{{$categoria->CATEGORIA_DESC}}">
            <br>
            <input class="btn" type="submit" value="Editar">
        </form>
    </div>
</section>
@endsection