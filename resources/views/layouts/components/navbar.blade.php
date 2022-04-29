{{-- BARRA DE NAVEGAÇÃO PADRÃO QUE É INCLUÍDA EM TODO O SISTEMA ATRAVÉS DO TEMPLATE --}}

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <img src="/site/img/logo_escritorio.jpg" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" aria-current="page" href="#{{-- {{route('home')}} --}}">Home</a>
                <a class="nav-link" href="#{{-- {{route('clientes-listar_clientes')}} --}}">Clientes</a>
                <a class="nav-link" href="#{{-- {{route('home_processos-home_listar_processos')}} --}}">Processos</a>
                <a class="nav-link" href="#">Receita</a>
                <a class="nav-link" href="#">Despesas</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Links úteis
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
            </div>
        </div>
    </div>
</nav>
