@extends('layout.scripts') 
@section('main')
<section class="container">
    <h1 class="text-center" >ADMINISTRADOR</h1>
    <a class="btn" href="{{route('administrador.cadastro')}}">Cadastra Administrador</a>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">NOME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">SENHA</th>
      <th scope="col">ATIVO</th>
      <th scope="col">EDITAR</th>
      <th scope="col">EXCLUIR</th>
    </tr>
  </thead>
  <tbody>
     @foreach($user as $use)
    <tr>
      @if($use->ADM_ATIVO == 0)
      <th scope="row">{{$use->ADM_ID}}</th>
      <td><del>{{Str::substr(($use->ADM_NOME), 0, 18)}}</del></td>
      <td><del>{{Str::substr(($use->ADM_EMAIL), 0, 18)}}</del></td>
      <td><del>***********</del></td>
      <td><del>{{$use->ADM_ATIVO}}</del></td>
      <td><a href="{{route('administrador.show',($use->ADM_ID))}}">Editar</a></td>
      <form action="{{route('administrador.delete',($use->ADM_ID))}}" method="post">
        @csrf
        <td ><button class="btn" type="submit">Excluir</button></td>
      </form>
    </tr>
    @else
    <tr>
      <th scope="row">{{$use->ADM_ID}}</th>
      <td>{{Str::substr(($use->ADM_NOME), 0, 18)}}</td>
      <td>{{Str::substr(($use->ADM_EMAIL), 0, 18)}}</td>
      <td>***********</td>
      <td>{{$use->ADM_ATIVO}}</td>
      <td><a href="{{route('administrador.show',($use->ADM_ID))}}">Editar</a></td>
      <form action="{{route('administrador.delete',($use->ADM_ID))}}" method="post">
        @csrf
        <td><button class="btn" type="submit">Excluir</button></td>
      </form>
    </tr>
    @endif

    @endforeach
    
  </tbody>
</table>
    
</section>
@endsection