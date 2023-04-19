@extends('layout.scripts')
@section('main')
<section class="container">
    <h1 class="text-center" >PRODUTO</h1>
    <a class="btn" href="{{route('dashboard.cadastroProduto')}}">Cadastra Produto</a>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">PRODUTO</th>
      <th scope="col">DESCRIÇAO</th>
      <th scope="col">PREÇO</th>
      <th scope="col">ATIVO</th>
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
      <td>{{$produto->PRODUTO_ATIVO}}</td>
      <td><a href="{{route('dashboard.show',$produto->PRODUTO_ID)}}">Editar</a></td>
      <form action="{{route('delete',$produto->PRODUTO_ID)}}" method="post">
        @csrf
        <td><button class="btn" type="submit">Excluir</button></td>
      </form>
    </tr>

    @endforeach
    
  </tbody>
</table>
    
</section>
   
@endsection