@extends('layouts.app')

@section('content')
@if(session()->has('message'))
<div class="container">
    <div class="alert {{session('alert') ?? 'alert-info'}} alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
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
        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Eliminar receta
        </button>
    </div>
    @endif
    @endunless
</div>

@unless(!Auth::check())
@if(Auth::user()->id == $recipe->user_id)
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar receta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" data-bs-dismiss="modal">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Seguro que deseas eliminar {{ $recipe->name }}?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Descartar</button>
                <form action="/recipe/{{ $recipe->id }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endif
@endunless

@endsection
