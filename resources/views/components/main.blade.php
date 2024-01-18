<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrutores</title>
    @vite(['resources/js/app.js'])
</head>

<body>

    @if (Auth::check())
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <h3 class="navbar-brend"><a class="link-offset-2 link-underline link-underline-opacity-0"
                        href="/">Instrutores</a></h3>
                <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                    <i class="bi bi-list"></i>
                </button>
            </div>
        </nav>

        <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
            aria-labelledby="staticBackdropLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="staticBackdropLabel">Menu</h5>
                <button type="button" class="btn-close btn-lg" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="nav flex-column">
                    <li class="nav-item d-grid gap-2 mt-2">
                        <a class="btn btn-primary" href="{{ route('instrutores.create') }}">Diário de Instrução</a>
                    </li>
                    <li class="nav-item d-grid gap-2 mt-2">
                        <a class="btn btn-primary" href="#">Filtrar Período</a>
                    </li>
                </ul>
            </div>

            <hr>

            <div class="w-100 d-flex flex-column align-items-center">
                <h6>{{ Auth::user()->name }}</h6>
                <form class="w-75 m-3 d-grid gap-2" action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="btn btn-danger">Sair</button>
                </form>
            </div>
        </div>
    @endif
    <div class="container">
        @include('components.messages')
        @yield('content')
    </div>
</body>

</html>
