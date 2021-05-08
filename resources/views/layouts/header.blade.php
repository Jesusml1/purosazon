<div class="header">

    {{-- Logo and title --}}
    <div class="header__logo">
        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.16669 7.33333V12.8333C9.16669 14.292 9.74615 15.691 10.7776 16.7224C11.8091 17.7539 13.208 18.3333 14.6667 18.3333C16.1254 18.3333 17.5243 17.7539 18.5558 16.7224C19.5872 15.691 20.1667 14.292 20.1667 12.8333V7.33333M34.8334 5.5V27.5H25.6667C25.6245 20.7515 26.004 13.9223 34.8334 5.5ZM34.8334 27.5V38.5H33V33L34.8334 27.5ZM14.6667 7.33333V38.5V7.33333Z" stroke="#050517" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" />
        </svg>

        <div class="header__heading">
            <h1 class="title">PURO SAZÓN</h1>
            <h4 class="subtitle">Recetario en Español</h4>
        </div>
    </div>

    {{-- links --}}
    <ul class="header__links">
        <li>
            <a href="/">INICIO</a>
        </li>
        <li>
            <a href="/categories">CATEGORIAS</a>
        </li>
        <li>
            <a href="/add-recepie">AGREGAR</a>
        </li>
    </ul>

    {{-- search and add button --}}
    <form class="header__search" action="/search" method='get' role='query'>
        {{-- @csrf --}}
        <input type="text" name="query" placeholder="Busca una receta...">
        <button class="fa fa-search fa-lg fa-inverse" type='submit'></button>
    </form>

</div>
