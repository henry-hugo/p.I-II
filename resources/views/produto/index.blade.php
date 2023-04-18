@extends('layout.app')
@section('main')
    <header class="header-2">
        <div class="page-header min-vh-75 relative"
            style="background-image: url('/assets/img/curved-images/logo.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-center mx-auto">
                        <h1 class="text-dark pt-3 mt-n5">PROMOÇÕES IMPERDÍVEIS </h1>
                        <b><p class="lead text-dark mt-3">Só aqui você acha o que procura com o maior desconto!<br> 
                            Nãoperca tempo e aproveite tudo de melhor da nossa loja!! </p></b>
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


    <!-- carrosel header -->


    <section class="pt-3 pb-4" id="count-stats">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 z-index-2 border-radius-xl mt-n10 mx-auto py-3 blur shadow-blur">
                    <div class="row">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="container" src="assets/img/curved-images/1.png" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="container" src="assets/img/curved-images/2.png" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="container" src="assets/img/curved-images/3.png" alt="">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden"></span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- tabela do banco de dados -->

    <section class="pt-3 pb-3" id="count-stats">
        <div class="container">
            <div class="row">
                <table>
                    <div class="filtro">
                        <div class="centerfiltro">
                            <svg width="16" height="13" viewBox="0 0 14 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="IconSort">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.88883 3.77821L4.33328 0.222656L0.777723 3.77821L3.44439 3.77821L3.44439 10.0004L5.22217 10.0004L5.22217 3.77821L7.88883 3.77821ZM9.66661 16.2227L13.2222 12.6671L10.5555 12.6671L10.5555 6.44488L8.77772 6.44488L8.77772 12.6671L6.11106 12.6671L9.66661 16.2227Z"
                                    fill="#FF6500"></path>
                            </svg>
                            <label for="ordenar"> Ordenar: </label>
                            <select class="form-control" style="width: 15rem;">
                                <option value="escolha">Escolha</option>
                                <option value="precoCrescente">Preço Crescente</option>
                                <option value="precoDecrescente">Preço Decrescente</option>
                            </select>
                        </div>
                        <div class="centerfiltro">
                            <label for="exibir">Exibir:</label>
                            <select class="form-control" style="width: 15rem;">
                                <option value="escolha">Escolha</option>
                                <option value="20pag">20 Produtos</option>
                                <option value="40pag">40 Produtos</option>
                                <option value="60pag">60 Produtos</option>
                                <option value="100pag">100 Produtos</option>
                            </select>
                        </div>
                        <div class="centerfiltro">
                            <label for="pesquisa">Pesquisa:</label>
                            <input class="form-control" style="width: 15rem;" id="" type="search"
                                placeholder="Procurar..">
                        </div>
                    </div>
                    <tbody id="myTable"> @foreach (\App\Models\Produto::where('PRODUTO_ATIVO', 1)->get() as $produto)
                        <td class="myTable">
                            <div class="card" style="width:15rem;">
                                <a href="/produto/{{$produto->PRODUTO_ID}}">
                            @if(isset($produto->ProdutoImagem[0]->IMAGEM_URL))
                                <img src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}" class="card-img-top" alt="...">
                            @else
                                <img src="/assets/img/curved-images/sem-imagem.jpg" class="card-img-top" alt="...">
                            @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{Str::substr(($produto->PRODUTO_NOME), 0, 18)}}</h5>
                                    <p class="card-text">{{Str::substr(($produto->PRODUTO_DESC), 0, 18)}}</p>
                                    @if(isset($produto->PRODUTO_DESC))
                                    <p class="card-number"><i class="price">R$ {{($produto->PRODUTO_PRECO)}}</i> <h3>R$ {{$produto->getPrecoDesconto()}} </h3></p>
                                    @else
                                    <h3>R$ {{$produto->PRODUTO_PRECO}}</h3>
                                    @endif
                                    @if(!Auth::check())
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#loginCadastro" class="btn btn-primary">Comprar</a>
                                    @endif
                                </div>
                            </a>
                            </div>
                        </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection