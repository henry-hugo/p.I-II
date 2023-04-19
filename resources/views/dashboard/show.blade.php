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
        
        @if(!empty($produto->ProdutoImagem[0]->IMAGEM_ORDEM))
            <input  class="form-control" type="number" name="ordem" id="" value="{{$produto->ProdutoImagem[0]->IMAGEM_ORDEM}}">
        @else
            <input  class="form-control" type="number" name="ordem" id="" value="0">
        @endif
        <label for="nome">Imagem url :</label>
        @if(!empty($produto->ProdutoImagem[0]->IMAGEM_URL))
            <input  class="form-control" type="text"  name="url" value="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}">
        @else
            <input  class="form-control" type="text"  name="url">
        @endif
        <label for="preco">Estoque :</label>
        @if(!empty($produto->ProdutoEstoque[0]->PRODUTO_QTD))
        <input  class="form-control" type="number" name="estoque" id="" value="{{$produto->ProdutoEstoque[0]->PRODUTO_QTD}}"> 
        @else
        <input  class="form-control" type="number" name="estoque" id="" value="0">
        @endif
        
        <label for="categoria">Categoria :</label>
        
        <select class="form-control" name="categoria" id="">
            <option value="{{$produto->Categoria->CATEGORIA_ID}}">{{$produto->Categoria->CATEGORIA_NOME}}</option>
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