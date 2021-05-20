@extends('layouts.app')

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
        <div class="card mb-4">
            <h5 class="card-header">
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
            </h5>
            <div class="card-body">
                <h5 class="card-title">
                    {{ $recipe->name }}
                </h5>
                <p class="card-text">
                    {{ $recipe->description }}
                </p>
                <a href="/recipe/{{ $recipe->id }}" class="btn btn-primary float-right">Ver</a>
            </div>
        </div>

        @endforeach
    </div>
</div>

@endsection
