<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <title>
        Foxtrot
    </title>



    

    <!-- Nucleo Icons -->
    <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />

    <!-- CSS Files -->



    <link id="pagestyle" href="/assets/css/soft-design-system.css?v=1.0.9" rel="stylesheet" />
    <link href="/assets/css/filtro.css" rel="stylesheet" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!--   Core JS Files   -->
    <script src="/assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>





    <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
    <script src="/assets/js/plugins/rellax.min.js"></script>
    <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
    <script src="/assets/js/plugins/tilt.min.js"></script>
    <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
    <script src="/assets/js/plugins/choices.min.js"></script>


    <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
    <script src="/assets/js/plugins/parallax.min.js"></script>
    <script src="/assets/js/inputQTD.js"></script>



</head>

<body class="index-page">


    <!-- Navbar -->
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <nav
                    class="navbar navbar-expand-lg  blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid px-0">
                        <a href="{{route('produto.index')}}"><img src="/assets/img/logo.png" alt="logo" width="80rem"></a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                            <ul class="navbar-nav navbar-nav-hover ms-lg-12 ps-lg-5 w-100">
                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                        href="javascript:;" id="dropdownMenuPages" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Categoria
                                        <img src="/assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3 tamanhomenu"
                                        aria-labelledby="dropdownMenuPages">
                                        <div class="d-none d-lg-block">
                                            <div
                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center px-0">
                                                <div class="d-inline-block">
                                                    <div
                                                        class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                                                        <svg width="12px" height="12px" viewBox="0 0 45 40"
                                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <title>shop </title>
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <g transform="translate(-1716.000000, -439.000000)"
                                                                    fill="#FFFFFF" fill-rule="nonzero">
                                                                    <g transform="translate(1716.000000, 291.000000)">
                                                                        <g transform="translate(0.000000, 148.000000)">
                                                                            <path
                                                                                d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                                                                                opacity="0.598981585"></path>
                                                                            <path
                                                                                d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                                                            </path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                Todas Categoria
                                            </div>
                                            @foreach (\App\Models\Categoria::where('CATEGORIA_ATIVO', 1)->get() as $categoria)
                                            <a href="/categoria/{{$categoria->CATEGORIA_ID}}" class="categoriamenu border-radius-md categoriamenu">
                                                <span class="ps-3">{{$categoria->CATEGORIA_NOME}}</span>
                                            </a>
                                            @endforeach
                                        </div>

                                        <div class="d-lg-none">
                                            <div
                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center px-0">
                                                <div class="d-inline-block">
                                                    <div
                                                        class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                                                        <svg width="12px" height="12px" viewBox="0 0 45 40"
                                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <title>shop </title>
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <g transform="translate(-1716.000000, -439.000000)"
                                                                    fill="#FFFFFF" fill-rule="nonzero">
                                                                    <g transform="translate(1716.000000, 291.000000)">
                                                                        <g transform="translate(0.000000, 148.000000)">
                                                                            <path
                                                                                d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                                                                                opacity="0.598981585"></path>
                                                                            <path
                                                                                d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                                                            </path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                Todas Categoria
                                            </div>

                                            <!-- @foreach (\App\Models\Categoria::where('CATEGORIA_ATIVO', 1)->get() as $categoria)
                                            <a href="" class="categoriamenu border-radius-md categoriamenu">
                                                <span class="ps-3">{{$categoria->CATEGORIA_NOME}}</span>
                                            </a>
                                            @endforeach -->


                                        </div>

                                    </div>
                                </li>
                                <li class="nav-item ms-lg-auto">
                                    <a class="nav-link nav-link-icon me-2" type="button" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-chat-text-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z" />
                                        </svg>
                                        <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="fale a suas duvidas aqui">fale conosco</p>
                                    </a>
                                </li>
                                @if(Auth::check())
                                    <li class="nav-item my-auto ms-3 ms-lg-0">
                                        <a type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight1" aria-controls="offcanvasRight" class="btn btn-sm btn-outline-primary btn-round mb-0 me-1 mt-2 mt-md-0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                          </svg> &ensp;{{Auth::user()->USUARIO_NOME}}</a>
                                        </li>
                                        
                                        <li class="nav-item my-auto ms-3 ms-lg-0">
                                            <a type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1 mt-2 mt-md-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                                </svg>
                                            </a> 
                                        
                                        
                                        </li>
                                
                                @else
                                
                                    <li class="nav-item my-auto ms-3 ms-lg-0">
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                            class="btn btn-sm btn-outline-primary btn-round mb-0 me-1 mt-2 mt-md-0">cadastre-se</a>
                                    </li>
    
                                    <li class="nav-item my-auto ms-3 ms-lg-0">
    
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"
                                            class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1 mt-2 mt-md-0">Login</a>
    
                                    </li>
                                
                                @endif
                                
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- End Navbar -->
            </div>
        </div>
    </div>

     <!-- Modal do fale conosco -->
     <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="10"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="was-validated" action="" method="POST">
                        <div class="modal-header">
                            <h3 class="modal-title text-center mx-auto" id="staticBackdropLabel">Fale Conosco</h3>
                        </div>
                        <div>
                            <h3 class="modal-title" id="staticBackdropLabel"></h3>
                            <div class="mb-3">
                                <label for="exampleFormControEMAIL" class="form-label"> Email</label>
                                <input type="email" class="form-control" name="email" required 
                                    placeholder="abc@gmail.com">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="faleconosco" id="faleconosco" cols="50"
                                    rows="10"></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <input type="submit" value="enviar" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

     <!-- offcanvas do perfil -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight1" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <div>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </button>
        </div>
    </div>
    <div class="offcanvas-body">
        <div style="text-align: center;">
            <svg xmlns="http://www.w3.org/2000/svg" width="250" height="250" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
        </div>
        <div class="text-center my-2">
            @if(Auth::check())
            {{Auth::user()->USUARIO_EMAIL}} 
            @else
            <p>cadastre-se</p>
            @endif
        </div>
        <div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                sair
            </x-dropdown-link>
        </form></a>
        </div>
    </div>
  </div>

<!-- offcanvas do carrinho -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" >
    <div class="offcanvas-header">
            <h2 id="offcanvasRightLabel" class="ms-5" >Seu Carrinho</h2>  
        <div>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </button>
        </div>
    </div>

    <hr class="border-bottom">

    @if(Auth::check())
    <div class="offcanvas-main" style="overflow: auto;">
    @foreach (\App\Models\Carrinho::where('USUARIO_ID' ,Auth::user()->USUARIO_ID)->get() as $carrinho )
        <div class="d-flexCarrinho">
            @if(isset($carrinho->Produto->ProdutoImagem[0]->IMAGEM_URL))
            <div>
                <img src="{{$carrinho->Produto->ProdutoImagem[0]->IMAGEM_URL}}" alt="" width="70px" height="70px">
            </div>
            @else
            <div>
                <img src="/assets/img/curved-images/sem-imagem.jpg" alt="produto" width="100px" height="73px">
            </div>
            @endif
            <div class="m-3">
                {{$carrinho->Produto->PRODUTO_NOME}}
            </div>
            <div>
                <h6 class="ms-4">QTD: <span>{{$carrinho->ITEM_QTD}}</span></h6>
                <h5 class="ms-4"> R${{$carrinho->somaQTD($carrinho->ITEM_QTD, $carrinho->Produto->PRODUTO_PRECO)}}</h5>
            </div>
            
        </div>
          
          <hr class="border-bottom">
          
      @endforeach
    </div>

    <div class="offcanvas-footer">
        @if(isset($carrinho->ITEM_QTD)) 
            <div class="footerCanvas">
                <h4 class="text-success">DESCONTO: R$ {{$carrinho->somaDesconto($carrinho->USUARIO_ID )}}</h4>
                <h4>PREÇO:<span class="price"> R$ {{$carrinho->somaTotal($carrinho->USUARIO_ID)}}</span></h4>
                <h4>TOTAL: R$ {{$carrinho->somaFinal($carrinho->USUARIO_ID )}}</h4>
                <div class="buttomCenter">
                    <a href="{{route('carrinho.index')}}" class="btn btn-light tamanho">Ver Carrinho</a>
                    <br>
                    <button type="submit" class="btn btn-primary tamanho">Finalizar Compra</button>
                </div>
            </div>
        @endif
    </div>
    @endif
</div>



    <!-- Modal do cadastro -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="10"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="was-validated" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h3 class="modal-title text-center mx-auto" id="staticBackdropLabel">Cadastro</h3>
                        </div>
                        <div>
                            <h3 class="modal-title" id="staticBackdropLabel"></h3>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                                <input type="text" class="form-control" name="USUARIO_NOME" required 
                                    id="categoria_name" placeholder="abc">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControEMAIL" class="form-label"> Email</label>
                                <input type="email" class="form-control" name="USUARIO_EMAIL" required 
                                    placeholder="abc@gmail.com">
                            </div>
                            
                            <div class="mb-3">
                                <label for="exampleFormControsenha" class="form-label"> Senha</label>
                                <input type="password" class="form-control" name="USUARIO_SENHA" size=15 
                                 required placeholder="****">
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Senha</label>

                                <input id="password_confirmation" class="form-control"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" placeholder="****">
                            </div>
            
                            <div class="mb-3">
                                <label for="exampleFormControcpf" class="form-label"> CPF</label>
                                <input type="number" class="form-control" name="USUARIO_CPF" required id="cpf"
                                    placeholder="xxx.xxx.xxx-xx">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <input type="submit" value="enviar" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


        <!-- Modal do cadastro adm -->
        <div class="modal fade" id="staticBackdropTeste" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="10"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="was-validated" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h3 class="modal-title text-center mx-auto" id="staticBackdropLabel">Cadastro</h3>
                        </div>
                        <div>
                            <h3 class="modal-title" id="staticBackdropLabel"></h3>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                                <input type="text" class="form-control" name="nome" required 
                                    id="categoria_name" placeholder="abc">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControEMAIL" class="form-label"> Email</label>
                                <input type="email" class="form-control" name="email" required 
                                    placeholder="abc@gmail.com">
                            </div>
                            
                            <div class="mb-3">
                                <label for="exampleFormControsenha" class="form-label"> Senha</label>
                                <input type="password" class="form-control" name="senha" size=15 
                                 required placeholder="****">
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Senha</label>

                                <input id="password_confirmation" class="form-control"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" placeholder="****">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <input type="submit" value="enviar" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal do login -->
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="10"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="was-validated" method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="modal-header">
                            <h3 class="modal-title text-center mx-auto" id="staticBackdropLabel">Login</h3>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControEMAIL" class="form-label"> Email</label>
                            <input type="email" class="form-control" name="email" required
                                placeholder="abc@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControsenha" class="form-label"> Senha</label>
                            <input type="password" class="form-control"  name="password" size=15 required
                             placeholder="****">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <input type="submit" value="enviar" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal do força a fazer login ou cadastro -->
    <div class="modal fade" id="loginCadastro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="10"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="was-validated" action="" method="POST">
                        <div class="modal-header">
                            <h3 class="modal-title text-center mx-auto" id="staticBackdropLabel">Junte-se hoje à Foxtrot</h3>
                        </div>
                        
                        <div class="mb-3 text-center">
                            <h4>Vantagens</h4>
                        </div>
                        <div>
                            <ul>
                                <li>Frete gratis</li>
                                <li>Promoções Foxtrot</li>
                                <li>Desconto primeiro Cadastro</li>
                            </ul>
                        </div>
                        <hr>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                        class="btn btn-sm btn-outline-primary btn-round mb-0 me-1 mt-2 mt-md-0">cadastre-se</a>
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdropTeste"
                                        class="btn btn-sm btn-outline-primary btn-round mb-0 me-1 mt-2 mt-md-0">cadastre-se adm</a>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"
                                        class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1 mt-2 mt-md-0">Login</a>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





    <main>
        @yield('main')
    </main>




    <footer class="footer pt-5 mt-5">
        <hr class="horizontal dark mb-5">
        <div class="container">
            <div class=" row">
                <div class="col-md-3 mb-4 ms-auto">
                    <div>
                        <h6 class="text-gradient text-primary font-weight-bolder">Foxtrot</h6>
                    </div>
                    <div>
                        <h6 class="mt-3 mb-2 opacity-8">Social</h6>
                        <ul class="d-flex flex-row ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="" target="_blank">
                                    <i class="fab fa-facebook text-lg opacity-8"></i>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link pe-1" href="" target="_blank">
                                    <i class="fab fa-twitter text-lg opacity-8"></i>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link pe-1" href="" target="_blank">
                                    <i class="fab fa-github text-lg opacity-8"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>



                <div class="col-md-2 col-sm-6 col-6 mb-4">
                    <div>
                        <h6 class="text-gradient text-primary text-sm">Company</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link" href="" target="_blank">
                                    About Us
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="" target="_blank">
                                    Freebies
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="" target="_blank">
                                    Premium Tools
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="" target="_blank">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6 col-6 mb-4">
                    <div>
                        <h6 class="text-gradient text-primary text-sm">Resources</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link" href="" target="_blank">
                                    Illustrations
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="" target="_blank">
                                    Bits & Snippets
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="" target="_blank">
                                    Affiliate Program
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6 col-6 mb-4">
                    <div>
                        <h6 class="text-gradient text-primary text-sm">Help & Support</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link" href="" target="_blank">
                                    Contact Us
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="" target="_blank">
                                    Knowledge Center
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="" target="_blank">
                                    Custom Development
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="" target="_blank">
                                    Sponsorships
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
                    <div>
                        <h6 class="text-gradient text-primary text-sm">Legal</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link" href="" target="_blank">
                                    Terms &amp; Conditions
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="" target="_blank">
                                    Privacy Policy
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="" target="_blank">
                                    Licenses (EULA)
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12">
                    <div class="text-center">
                        <p class="my-4 text-sm">
                            All rights reserved. Copyright © <script>
                            document.write(new Date().getFullYear())
                            </script> Foxtrot <a href="" target="_blank">Brinks</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script type="text/javascript">
if (document.getElementById('state1')) {
    const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
    if (!countUp.error) {
        countUp.start();
    } else {
        console.error(countUp.error);
    }
}
if (document.getElementById('state2')) {
    const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
    if (!countUp1.error) {
        countUp1.start();
    } else {
        console.error(countUp1.error);
    }
}
if (document.getElementById('state3')) {
    const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
    if (!countUp2.error) {
        countUp2.start();
    } else {
        console.error(countUp2.error);
    };
}
</script>

</html>





