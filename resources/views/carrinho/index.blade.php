@extends('layout.app') 
@section('main')
@if(Auth::check())
<header class="header-2">
        <div class="page-header min-vh-75 relative" style="background-image: url('/assets/img/curved-images/carrinho.jpg')">
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
    <main class="container">
    <div class="carrinhoCenter" >
        <div>
        <a href="http://"><h2 class="carrinhoAtivo">CARRINHO DE COMPRAS</h2></a>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-arrow-right-short ps-3" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
        </svg>
        <div>
        <a href="{{route('carrinho.pagamento')}}"><h2 class="text-body ps-4">PAGAMENTO</h2></a>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-arrow-right-short ps-3" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
        </svg>
        <div>
            <a href="http://"><h2 class="text-body ps-4">CHECKOUT</h2></a>
        </div>
    </div>

    <div class="d-flex mt-5">
        <div>
            <img class="m-3" src="/assets/img/curved-images/DESCONTO-100x53.jpg" alt="desconto" >
        </div>
        <div>
            <p class="mt-2" >Desconto no Boleto, Transferência, Depósito ou PIX</p>
            <p >Aplicado automaticamente no final da compra, após escolha da forma de pagamento</p>
        </div>
    </div>
    <section class="viwTabela">
        <div class="tamanhoTabela">
            
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">tira</th>
                        <th scope="col">foto</th>
                        <th scope="col">produto</th>
                        <th scope="col">preço</th>
                        <th scope="col">quantidade</th>
                        <th scope="col">subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($carrinho as $car)
                        <form action="{{route('carrinho.store', $car->Produto->PRODUTO_ID)}}" method="post">
                            @csrf

                        <tr class="">
                            <td scope="row" >X</td>

                            @if(isset($car->Produto->ProdutoImagem[0]->IMAGEM_URL))
                            <td scope="row" ><img src="{{$car->Produto->ProdutoImagem[0]->IMAGEM_URL}}" alt="produto" width="100px" height="73px"></td>
                            @else
                            <td scope="row" ><img src="/assets/img/curved-images/sem-imagem.jpg" alt="produto" width="100px" height="73px"></td>
                            @endif
                        
                            <td scope="row" >{{$car->Produto->PRODUTO_NOME}}</td>
                            <td scope="row" >R$ {{$car->Produto->PRODUTO_PRECO}}</td>
                            <td scope="row" >
                                <form action="">
                                    
                                    @if(isset($car->Produto->ProdutoEstoque->PRODUTO_QTD))
                                    <input type="submit" value="-" onclick="menos('{{Str::substr(($car->Produto->PRODUTO_NOME), 0, 3)}}{{$car->PRODUTO_ID}}')">
                                    <input min="1" max="{{ $car->Produto->ProdutoEstoque->PRODUTO_QTD }}" id="{{Str::substr(($car->Produto->PRODUTO_NOME), 0, 3)}}{{$car->PRODUTO_ID}}" type="number" name="quantidadeSelect" value="{{$car->ITEM_QTD}}">
                                    <input type="submit" value="+" onclick="mais('{{Str::substr(($car->Produto->PRODUTO_NOME), 0, 3)}}{{$car->PRODUTO_ID}}')">
                                    @else
                                    <h5>Nao tem item!!</h5>
                                    @endif
                                    
                                </form>
                            </td>
                            <td scope="row" >R$ {{$car->somaQTD($car->ITEM_QTD, $car->Produto->PRODUTO_PRECO)}}</td>
                        </tr>
                
                        </form>

                        @endforeach
                    </tbody>
                </table>
               
        </div>
        <div class="notaFinal">
            <div>
                <h2>TOTAL NO CARRINHO</h2>
            </div>
            <div class="border-bottom">
                <h5>SubTotal : <span class="text-primary">R$ {{$car->somaTotal($carrinho[0]->USUARIO_ID)}}</span></h5>
            </div>
            <div class="border-bottom">
                <h5>entrega : <span>Frete Gratis</span></h5>
            </div>
            <div class="border-bottom">
                <h5>Total no <br> Boleto ou PIX :
                    <span class="text-success">R$ {{$car->desPrecoDesconto($carrinho[0]->USUARIO_ID )}}</span>
                </h5>
            </div>
            <div  class="border-bottom">
                <h5>Desconto : <span class="text-succes">R$ {{$car->somaDesconto($carrinho[0]->USUARIO_ID )}}</span></h5>
            </div>
            <div>
                <h5>Total : <span class="text-primary">R$ {{$car->somaFinal($carrinho[0]->USUARIO_ID )}}</span></h5>
            </div>
            <div class="btnCenter">
                <a  class="btn btn-primary tamanhoCarrinho" href="{{route('carrinho.pagamento')}}">Finalizar Compra</a>
            </div>
        </div>

    </section>
    </main>
@endif
@endsection

