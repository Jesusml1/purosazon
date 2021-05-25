<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{ $recipe->name }} | Puro Sazón
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container mt-5">
        <h3 class="title">PURO SAZÓN</h3>
        <h6 class="subtitle">Recetario en Español</h6>
        <br>
        <h2 class="recipe__name">
            {{ $recipe->name }}
        </h2>
        <p class='text-secondary'>
            @php
            $time = strtotime($recipe->created_at);
            echo date('d', $time);
            echo '/';
            echo date('m', $time);
            echo '/';
            echo date('Y', $time);
            @endphp
            , pubilcado por {{ $recipe->user->name }}
        </p>
        <div class='recipe__description'>
            {{ $recipe->description }}
        </div>
        <br>
        <h4>Ingredientes</h4>
        <div class="recipe__ingredients">
            {!! nl2br(e($recipe->ingredients)) !!}
        </div>
        <br>
        <h4>Preparación</h4>
        <div class="recipe__preparation">
            {!! nl2br(e($recipe->preparation)) !!}
        </div>

    </div>

    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>

</html>
