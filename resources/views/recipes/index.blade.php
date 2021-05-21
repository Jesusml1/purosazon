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

<div class="container">
    <div class="mb-4">
        @unless($msg == 'Todas las recetas')
        <a class='btn btn-secondary mb-4' href="{{ url()->previous() }}">Volver</a>
        @endunless
        <h2>{{ $msg }}</h2>
        @if( $type == 'search' && $recipes->isEmpty())
        <h3>No hay resultados</h3>
        @elseif($type == 'category' && $recipes->isEmpty())
        <h3>Aun no hay ninguna, agrega una!</h3>
        @endif
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($recipes as $recipe)

            <div class="card mb-4">
                <h6 class="card-header">
                    {{ $recipe->category }}
                </h6>
                <div class="card-body">
                    <h4 class="card-title">
                        {{ $recipe->name }}
                    </h4>
                    <p class='text-secondary'>
                        @php
                        $time = strtotime($recipe->created_at);
                        echo date('d', $time);
                        echo '/';
                        echo date('m', $time);
                        echo '/';
                        echo date('Y', $time);
                        @endphp
                        , publicado por {{ $recipe->user->name }}
                    </p>
                    <p class="card-text">
                        {{ $recipe->description }}
                    </p>
                    <a href="/recipe/{{ $recipe->id }}" class="btn btn-primary float-right">Ver</a>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>

@endsection
