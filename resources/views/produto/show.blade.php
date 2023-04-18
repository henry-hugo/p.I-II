@extends('layout.app')
@section('main')
    <header class="header-2">
        <div class="page-header min-vh-75 relative" style="background-image: url('/assets/img/curved-images/dcfundo.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-center mx-auto">
                    </div>
                </div>
            </div>

            <div class="position-absolute w-100 z-index-1 bottom-0">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave"
                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="moving-waves">
                        <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
                        <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
                        <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
                        <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95" />
                    </g>
                </svg>
            </div>
        </div>
    </header>

    <main>
        <section>
            <div class="container">
                <div id="tamanho">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        @if(isset($produto->ProdutoImagem[0]->IMAGEM_URL))
                        @foreach ($produto->ProdutoImagem as $imagem)
                            @if ($imagem->IMAGEM_ORDEM == 0)
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ $imagem->IMAGEM_URL }}" alt="Slide" height="400px"
                                        width="auto">
                                </div>
                            @else
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ $imagem->IMAGEM_URL }}" alt="Slide" height="400px"
                                        width="auto">
                                </div>
                            @endif
                        @endforeach
                        @else
                        <img src="/assets/img/curved-images/sem-imagem.jpg" class="card-img-top"
                                            alt="...">
                        @endif
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </div>
                <form action="{{route('carrinho.store', $produto->PRODUTO_ID)}}" method="post">
                    @csrf
                
                <div class="possition-desc">
                    <H2>{{ $produto->PRODUTO_NOME }}</H2> 
                    @if (isset($produto->PRODUTO_DESC))
                        <h4 class="price">R$ {{ $produto->PRODUTO_PRECO }}</h4>
                    @endif
                    @if (isset($produto->PRODUTO_DESC))
                        <h3>R$ {{ $produto->getPrecoDesconto() }}
                            <sup class="desconto">{{ $produto->PRODUTO_DESCONTO }} OFF</sup>
                        </h3>
                    @else
                        <h3>R$ {{ $produto->PRODUTO_PRECO }}</h3>
                    @endif
                    @if (isset($produto->ProdutoEstoque->PRODUTO_QTD))
                        <div class="d-flex">
                            
                            <h4>Quantidade: </h4>
                            <div id="alvo">
                                <select  class="form-select" name="quantidade" id="select">
                                <option value="1"> 1 Unidade </option>
                                <option value="2"> 2 Unidade </option>
                                <option value="3"> 3 Unidade </option>
                                <option value="4"> 4 Unidade </option>
                                <option value="5"> 5 Unidade </option>
                                <option value="outro">Mais Unidades</option>
                                </select>
                                <div id="meuDiv">
                                <button type="button" onclick="menos('total')" class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    <path d="M10.205 12.456A.5.5 0 0 0 10.5 12V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4a.5.5 0 0 0 .537.082z"/>
                                </svg>
                                </button>
                               
                                <input class="inputSelect btn" placeholder="Unidade" min="1" max="{{ $produto->ProdutoEstoque->PRODUTO_QTD }}" id="total" type="number" name="quantidadeSelect">
                                
                                <button type="button" onclick="mais('total')" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-square" viewBox="0 0 16 16">
                                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                        <path d="M5.795 12.456A.5.5 0 0 1 5.5 12V4a.5.5 0 0 1 .832-.374l4.5 4a.5.5 0 0 1 0 .748l-4.5 4a.5.5 0 0 1-.537.082z"/>
                                    </svg>
                                </button>
                                <button type="button" id="cancel" class="btn"><i class="bi bi-chevron-double-up"></i></button>
                                </div>
                            </div>
                            <i> ( {{ $produto->ProdutoEstoque->PRODUTO_QTD }} ) disponivel</i>  
                        </div>
                        <br>
                        @if(Auth::check())
                        <button class="btn btn-secondary" type="submit">Adicionar no Carrinho</button><br>
                        </form>
                        <button class="btn btn-secondary" type="submit">Compra</button><br>
                        @else
                        <a type="button" data-bs-toggle="modal" data-bs-target="#loginCadastro"
                                                    class="btn btn-secondary">Comprar</a><br>
                        @endif
                    @else
                        <h3>produto indisponível no momento !!</h3>
                    @endif
                    
                    <!-- <H3>{{ $produto->Categoria->CATEGORIA_NOME }}</H3> -->
                        
                   
                <div class="descricao">
                    Descriçao:
                    <p>{{ $produto->PRODUTO_DESC }}</p>
                </div>
            </div>
        </section>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="cards-wrapper">

                        @foreach (\App\Models\Produto::all()->take(6) as $produto)
                            <div class="card" style="width:15rem;">
                                <a href="/produto/{{ $produto->PRODUTO_ID }}">
                                    @if (isset($produto->ProdutoImagem[0]->IMAGEM_URL))
                                        <img src="{{ $produto->ProdutoImagem[0]->IMAGEM_URL }}" class="card-img-top"
                                            alt="...">
                                    @else
                                        <img src="/assets/img/curved-images/sem-imagem.jpg" class="card-img-top"
                                            alt="...">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title">{{ Str::substr($produto->PRODUTO_NOME, 0, 18) }}</h5>
                                        <p class="card-text">{{ Str::substr($produto->PRODUTO_DESC, 0, 18) }}</p>
                                        @if (isset($produto->PRODUTO_DESC))
                                            <p class="card-number"><i class="price">R$
                                                    {{ $produto->PRODUTO_PRECO }}</i>
                                            <h3>R$ {{ $produto->getPrecoDesconto() }} </h3>
                                            </p>
                                        @else
                                            <h3>R$ {{ $produto->PRODUTO_PRECO }}</h3>
                                        @endif
                                        @if (!Auth::check())
                                            <a type="button" data-bs-toggle="modal" data-bs-target="#loginCadastro"
                                                class="btn btn-primary">Comprar</a>
                                        @endif
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        


    </main>
@endsection
