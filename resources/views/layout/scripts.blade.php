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
    @if (Auth::check())
<header class="py-3 mb-3 border-bottom">
    <div class="ajust">
    <a href="{{route('dashboard.index')}}"><img src="/assets/img/logo.png" alt="logo" width="80rem"></a>
      
      <ul class="d-flex justify-content-center">
        <li class="ps-5 list-group-item"><a href="{{route('dashboard.produto')}}">Produto</a></li>
        <li class="ps-5 list-group-item"><a href="{{route('dashboard.categoria')}}">Categoria</a></li>
        <li class="ps-5 list-group-item"><a href="{{route('dashboard.administrador')}}">Administrador</a></li>
      </ul>
       
      <div class="d-flex justify-content-end align-items-center" style="padding-right: 8rem;">
        <div class="float-rigth dropdown">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small shadow" style="">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><form  class="dropdown-item" method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        sair
                    </a>
                </form> </li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  @endif
    <main>
        @yield('main')
    </main>
<footer style="height: 20vh; ">

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





