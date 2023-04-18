@extends('layout.scripts')
@section('main')
<section class="container">
    <h1>PRODUTO</h1>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">PRODUTO</th>
      <th scope="col">DESCRIÇAO</th>
      <th scope="col">PREÇO</th>
      <th scope="col">EDITAR</th>
      <th scope="col">EXCLUIR</th>
    </tr>
  </thead>
  <tbody>
     @foreach($produtos as $produto)
    <tr>
      <th scope="row">{{$produto->PRODUTO_ID}}</th>
      <td>{{Str::substr(($produto->PRODUTO_NOME), 0, 18)}}</td>
      <td>{{Str::substr(($produto->PRODUTO_DESC), 0, 18)}}</td>
      <td>{{$produto->PRODUTO_PRECO}}</td>
      <td><a href="/dashboard/{{$produto->PRODUTO_ID}}">editar</a></td>
      <td><a href="http://">excluir</a></td>
    </tr>
    @endforeach
    
  </tbody>
</table>
    
</section>
   
@endsection