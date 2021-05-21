<nav class="navbar navbar-expand-lg navbar-light bg-light px-lg-4">

    <div class="container">
        <div class="navbar-brand" href="#">
            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.16669 7.33333V12.8333C9.16669 14.292 9.74615 15.691 10.7776 16.7224C11.8091 17.7539 13.208 18.3333 14.6667 18.3333C16.1254 18.3333 17.5243 17.7539 18.5558 16.7224C19.5872 15.691 20.1667 14.292 20.1667 12.8333V7.33333M34.8334 5.5V27.5H25.6667C25.6245 20.7515 26.004 13.9223 34.8334 5.5ZM34.8334 27.5V38.5H33V33L34.8334 27.5ZM14.6667 7.33333V38.5V7.33333Z" stroke="#050517" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <div class="header__heading">
                <h1 class="title">PURO SAZÓN</h1>
                <h4 class="subtitle">Recetario en Español</h4>
            </div>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories">Categorias</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Acceder') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('add-recipe') }}">{{ __('Agregar receta') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a href="{{ route('home') }}" class="dropdown-item"> Tus publicaciones</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Salir') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>

                </li>
                @endguest
            </ul>

            <form class="form-inline my-2 my-lg-0" action="{{ url('/search') }}" method='get' role='query'>
                @csrf
                <input class="form-control mr-sm-2" type="search" name="query" placeholder="Busca una receta..." aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>
</nav>
