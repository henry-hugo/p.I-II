@extends('layout.scripts')
@section('main')
<section class="container">
    <div>
        <h1  class="text-center">EDITAR</h1>
        <form action="{{route('dashboard.store', $produto->PRODUTO_ID)}}" method="post">
        @csrf
        <label for="nome">Nome :</label>
        <input  class="form-control" type="text"  name="nome" value="{{$produto->PRODUTO_NOME}}">
        <label for="email">Descriçao :</label>
        <input  class="form-control" type="text" name="desc" id="" value="{{$produto->PRODUTO_DESC}}">
        <label for="preco">Preço :</label>
        <input  class="form-control" type="number" name="preco" id="" value="{{$produto->PRODUTO_PRECO}}">
        <label for="preco">Desconto :</label>
        <input  class="form-control" type="number" name="desconto" id="" value="{{$produto->PRODUTO_DESCONTO}}">
        <label for="preco">Ordem :</label>
        <input  class="form-control" type="number" name="ordem" id="" value="{{$produto->ProdutoImagem[0]->IMAGEM_ORDEM}}"> 
        <label for="nome">Imagem url :</label>
        <input  class="form-control" type="text"  name="url" value="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}">
        <label for="preco">Estoque :</label>
        <input  class="form-control" type="number" name="estoque" id="" value="{{$produto->ProdutoEstoque[0]->PRODUTO_QTD}}"> 
        <label for="categoria">Categoria :</label>
        
        <select class="form-control" name="categoria" id="">
        @foreach(App\Models\Categoria::where('CATEGORIA_ATIVO', 1)->get() as $categoria)
            <option value="{{$categoria->CATEGORIA_ID}}">{{$categoria->CATEGORIA_NOME}}</option>
            @endforeach
        </select>
        <br>
        <input class="btn" type="submit" value="Editar">
        </form>
    </div>
</section>
@endsection