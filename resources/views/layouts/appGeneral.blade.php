<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- Bootstrap Css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    {{-- @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif --}}
    <!-- Example split danger button -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="btn-group">
                <button type="button" class="btn" style="background-color: #FFCA28">Entrar</button>
                <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #FFCA28">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" style="width: 250px">
                    <div class="text-center mt-2">
                        <p class="display-6" style="color: #003366">Entrar como</p>
                        <button type="button" class="btn btn-lg d-block m-auto" style="background-color: #003366; color:white">
                            <ion-icon name="person-outline"></ion-icon> Candidato</button>
                        <span style="color: #808080">Ainda não possui cadastro?</span>
                        <a href="#" style="color: #0000FF">Cadastra-se seu curriculo grátis!</a>
                    </div>
                    <hr>
                    <div class="text-center mt-2">
                        <button type="button" class="btn btn-lg d-block m-auto" style="background-color: #003366; color:white">
                            <ion-icon name="home-outline"></ion-icon> Empresa
                        </button>
                        <span style="color: #808080">Ainda não possui cadastro?</span>
                        <a href="#" style="color: #0000FF">Cadastra-se sua empresa</a>
                    </div>
                </ul>
            </div>
            
            <span class="navbar-text">
              Logo
            </span>
          </div>
        </div>
      </nav>
    @yield('content')

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

