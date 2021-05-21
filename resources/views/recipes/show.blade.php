@extends('layouts.app')

@section('content')
@if(session()->has('message'))
<div class="container">
    <div class="alert {{session('alert') ?? 'alert-info'}}">
        {{ session('message') }}
    </div>
</div>
@endif
<div class="container mb-4">
    <a class='btn btn-secondary' href='{{ url()->previous() }}'>Volver</a>
</div>
<div class="container">
    <div class="card">
        <div class="card-header">
            {{ $recipe->category }}
        </div>
        <div class="card-body">
            <h1 class="recipe__name">
                {{ $recipe->name }}
            </h1>
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
            <h4>Ingredientes</h4>
            <div class="recipe__ingredients">
                {!! nl2br(e($recipe->ingredients)) !!}
            </div>
            <h4>Preparación</h4>
            <div class="recipe__preparation">
                {!! nl2br(e($recipe->preparation)) !!}
            </div>
        </div>
    </div>
    @unless(!Auth::check())
    @if(Auth::user()->id == $recipe->user_id)
    <div class="d-flex mt-4">
        <a class="btn btn-secondary mr-4" href="/edit-recipe/{!! $recipe->id !!}">Editar</a>
        <form action="/recipe/{{ $recipe->id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger">Eliminar receta</button>
        </form>
    </div>
    @endif
    @endunless
</div>



@endsection
