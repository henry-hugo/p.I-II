@extends('layout.scripts') 
@section('main')
<section class="container">
    <h1  class="text-center">CADASTRO</h1>
    <form action="{{route('dashboard.create')}}" method="post">
        @csrf
        <label for="nome">Produto :</label>
        <input  class="form-control" type="text"  name="nome">  
        <label for="email">Descriçao :</label>
        <input  class="form-control" type="text" name="desc" id="">    
        <label for="preco">Preço :</label>
        <input  class="form-control" type="number" name="preco" id="">  
        <label for="preco">Desconto :</label>
        <input  class="form-control" type="number" name="desconto" id=""> 
        <label for="preco">Ordem :</label>
        <input  class="form-control" type="number" name="ordem" id=""> 
        <label for="nome">Imagem url :</label>
        <input  class="form-control" type="text"  name="url">
        <label for="preco">Estoque :</label>
        <input  class="form-control" type="number" name="estoque" id=""> 

        <label for="categoria">Categoria :</label>
        
        <select class="form-control" name="categoria" id="">
        @foreach(App\Models\Categoria::where('CATEGORIA_ATIVO', 1)->get() as $categoria)
            <option value="{{$categoria->CATEGORIA_ID}}">{{$categoria->CATEGORIA_NOME}}</option>
            @endforeach
        </select>
        <br>
        <input class="btn" type="submit" value="Cadastrar">
        </form>
</section>



@endsection