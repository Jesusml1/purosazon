@extends('layouts.layout')

@section('content')
<div class="content">
    <div class='recipes-content'>
        @unless($msg == 'Todas las recetas')
        <a class='back-btn' href="{{ url()->previous() }}">volver</a>
        @endunless
        <h2>{{ $msg }}</h2>
        @if( $type == 'search' && $recipes->isEmpty())
        <h3>No hay resultados</h3>
        @elseif($type == 'category' && $recipes->isEmpty())
        <h3>Aun no hay ninguna, agrega una!</h3>
        @endif
        @foreach($recipes as $recipe)
        <a href="/recipe/{{ $recipe->id }}" class='hover-link'>
            <div class='recipe card'>
                <div class='recipe__category'>
                    {{ $recipe->category }},
                    @php
                    $format = '%Y-%m-%d %H:%M:%S';
                    $time = strtotime($recipe->created_at);
                    echo date('d', $time);
                    echo '/';
                    echo date('m', $time);
                    echo '/';
                    echo date('Y', $time);
                    @endphp
                </div>
                <div class="recipe__name">
                    {{ $recipe->name }}
                </div>
                <div class='recipe__description'>
                    {{ $recipe->description }}
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

@endsection
