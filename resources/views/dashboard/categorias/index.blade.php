@extends('layout.scripts') 
@section('main')
<section class="container">
    <h1 class="text-center" >CATEGORIA</h1>
    <a class="btn" href="{{route('dashboard.cadastroCategoria')}}">Cadastra Categoria</a>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">NOME</th>
      <th scope="col">DESCRIÇAO</th>
      <th scope="col">ATIVO</th>
      <th scope="col">EDITAR</th>
      <th scope="col">EXCLUIR</th>
    </tr>
  </thead>
  <tbody>
     @foreach($categorias as $categoria)
    <tr>
      <th scope="row">{{$categoria->CATEGORIA_ID}}</th>
      <td>{{Str::substr(($categoria->CATEGORIA_NOME), 0, 18)}}</td>
      <td>{{Str::substr(($categoria->CATEGORIA_DESC), 0, 18)}}</td>
      <td>{{$categoria->CATEGORIA_ATIVO}}</td>
      <td><a href="{{route('dashboard.showC',($categoria->CATEGORIA_ID))}}">Editar</a></td>
      <form action="{{route('delete.categoria',$categoria->CATEGORIA_ID)}}" method="post">
        @csrf
        <td><button class="btn" type="submit">Excluir</button></td>
      </form>
    </tr>

    @endforeach
    
  </tbody>
</table>
    
</section>
@endsection