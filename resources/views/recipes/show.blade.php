@extends('layouts.app')

@section('content')
<div class="container mb-4">
    <a class='btn btn-primary' href='{{ url()->previous() }}'>Volver</a>
</div>
<div class="container">
    <div class="card">
        <div class="card-header">
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
        <div class="card-body">
            <h2 class="recipe__name">
                {{ $recipe->name }}
            </h2>
            <div class='recipe__description'>
                {{ $recipe->description }}
            </div>
            <h4>Ingredientes</h4>
            <div class="recipe__ingredients">
                {!! nl2br(e($recipe->ingredients)) !!}
            </div>
            <h4>Preparación</h4>
            <div class="recipe__preparation">
                {!! nl2br(e($recipe->preparation)) !!}
            </div>
            <div>
                Publicado por: {{ $recipe->user->name }}
            </div>
        </div>
    </div>
    @auth
    <div class="d-flex mt-4">
        <a class="btn btn-secondary mr-4" href="/edit-recipe/{!! $recipe->id !!}">Editar</a>
        <form action="/recipe/{{ $recipe->id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger">Eliminar receta</button>
        </form>
    </div>
    @endauth
</div>

@endsection
