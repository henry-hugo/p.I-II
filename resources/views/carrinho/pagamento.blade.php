@extends('layout.app') 
@section('main')
<header class="header-2">
    <div class="page-header min-vh-75 relative" style="background-image: url('/assets/img/curved-images/pagamento.jpg')">
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
<nav>
    <div class="carrinhoCenter" >
        <div>
        <a href="{{route('carrinho.index')}}"><h2 class="text-body ps-4">CARRINHO DE COMPRAS</h2></a>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-arrow-right-short ps-3" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
        </svg>
        <div>
        <a href="{{route('carrinho.pagamento')}}" ><h2 class="carrinhoAtivo ps-4">PAGAMENTO</h2></a>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-arrow-right-short ps-3" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
        </svg>
        <div>
            <a href="http://"><h2 class="text-body ps-4">CHECKOUT</h2></a>
        </div>
    </div>
</nav>
<main class="pagamentoMain container">
    <section class="pagamento">
        <div class="form-pagamento">
            <form method="POST">
                <h1>Meios de Pagamento</h1>
                <img src="/assets/img/pagamento/1.png" width="50px" height="50px">
                <img src="/assets/img/pagamento/2.png" width="50px" height="50px">
                <img src="/assets/img/pagamento/3.png" width="50px" height="50px">
                <img src="/assets/img/pagamento/4.png" width="50px" height="50px">
                <img src="/assets/img/pagamento/5.png" width="50px" height="50px">
                <img src="/assets/img/pagamento/6.png" width="50px" height="50px">
                <div class="form-100">
                    <label>Nome:</label>
                    <input type="text">
                </div>
                <div class="form-100">
                    <label>Sobrenome:</label>
                    <input type="text">
                </div>
                <div class="form-100">
                    <label>Email:</label>
                    <input type="text">
                </div>
                <div class="form-100">
                    <label>Telefone:</label>
                    <input type="text">
                </div>
                <div class="form-100">
                    <label>Dados do Cartão:</label>
                    <input type="text" placeholder="1234 1234 1234 1234">
                <div class="form-50">
                    <input style="margin-top: -1px;"  type="text" placeholder="12/23">
                    <input style="margin-left: -1px;margin-top: -1px;"  type="text" placeholder="CVC">
                </div>
                </div>
                <div class="form-100">
                    <input type="text" placeholder="Nome no cartão">
                </div>
                <div class="form-100">
                    <button class="btn btn-primary tamanhoBntP" type="submit" >Pagar</button>    
                             
                </div>
                </form>

        </div>
    </section>
    <section class="endereco">
        <div class="form-endereco">
            <form method="POST">
                <h1>Endereço de Entrega</h1><br>
                    <div class="form-1000">
                    <label>Nome:</label>
                    <input type="text">
                </div>
                <div class="form-1000">
                    <label>Sobrenome:</label>
                    <input type="text">
                </div>
                <div class="form-1000">
                    <label>CEP:</label>
                    <input type="text">
                </div>
                
                <div class="form-1000">
                    <label>Endereço:</label>
                    <input type="text" placeholder="Rua, Avenida...">
                <div class="form-500">
                    <input style="margin-top: -1px;"  type="text" placeholder="Numero">
                    <input style="margin-left: -1px;margin-top: -1px;"  type="text" placeholder="Complemento">
                </div>
                <div class="form-500">
                    <input style="margin-top: -1px;"  type="text" placeholder="Cidade">
                    <input style="margin-left: -1px;margin-top: -1px;"  type="text" placeholder="Estado">
                    <input style="margin-left: -1px;margin-top: -1px;"  type="text" placeholder="Bairro">
                </div>
                    <div class="form-1000" style="position: relative;top: 165px;">
                    <button class="btn btn-primary tamanhoBntE" type="submit" >Confirmar</button>                
                </div>
                </form>

        </div>
    </section>
</main>
@endsection