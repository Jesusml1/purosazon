@extends('layouts.layout')

@section('content')

<div class='content'>
    <div class='recipe'>
        <a class='back-btn' href='{{ url()->previous() }}'>VOLVER</a>
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
        <h3>Ingredientes</h3>
        <div class="recipe__ingredients">
            {!! nl2br(e($recipe->ingredients)) !!}
        </div>
        <h3>Preparación</h3>
        <div class="recipe__preparation">
            {!! nl2br(e($recipe->preparation)) !!}
        </div>
    </div>
</div>

@endsection
