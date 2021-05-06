<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('css/main.css') }}>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>Puro Sazón</title>
</head>
<body>
    <div class="header-container">
        <div class="logo-container">
            <div class="logo">
                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.16669 7.33333V12.8333C9.16669 14.292 9.74615 15.691 10.7776 16.7224C11.8091 17.7539 13.208 18.3333 14.6667 18.3333C16.1254 18.3333 17.5243 17.7539 18.5558 16.7224C19.5872 15.691 20.1667 14.292 20.1667 12.8333V7.33333M34.8334 5.5V27.5H25.6667C25.6245 20.7515 26.004 13.9223 34.8334 5.5ZM34.8334 27.5V38.5H33V33L34.8334 27.5ZM14.6667 7.33333V38.5V7.33333Z" stroke="#050517" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="logo-text">
                <h1 class="title">PURO SAZÓN</h1>
                <h4 class="subtitle">Recetario en Español</h4>
            </div>
        </div>
        <div class="navbar-container">
            <div class="search-container">
                <form action="">
                    <input class="search-box" type="search" name="search" placeholder="Busca una receta...">
                    <button class="fa fa-search fa-lg search-icon"></button>
                </form>
            </div>
            <a class='btn' href='/agregar-receta'>AGREGAR</a>
        </div>
    </div>
    @yield('content')
    <div class="footer">
        <div class='footer__text'>Puro Sazon&#169; 2021</div>
        <a href='/' class='footer__about'>Acerca de este sitio</a>
    </div>
</body>
</html>
