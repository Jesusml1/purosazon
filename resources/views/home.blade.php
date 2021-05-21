@extends('layouts.app')

@section('content')
@if(session()->has('message'))
<div class="container">
    <div class="alert {{session('alert') ?? 'alert-info'}}">
        {{ session('message') }}
    </div>
</div>
@endif
<div class="container min-vh-100">
    <h2 class="">Tus recetas</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(count($recipes) > 0)

            @foreach($recipes as $recipe)
            <div class="card mb-4">
                <h6 class="card-header">
                    {{ $recipe->category }},
                    @php
                    $time = strtotime($recipe->created_at);
                    echo date('d', $time);
                    echo '/';
                    echo date('m', $time);
                    echo '/';
                    echo date('Y', $time);
                    @endphp
                </h6>
                <div class="card-body">
                    <h4 class="card-title">
                        {{ $recipe->name }}
                    </h4>
                    <p class="card-text">
                        {{ $recipe->description }}
                    </p>
                    <a href="/recipe/{{ $recipe->id }}" class="btn btn-primary float-right">Ver</a>
                </div>
            </div>

            @endforeach
            @else
            <h2>No tienes ninguna receta!</h2>
            <h3>Agrega una</h3>
            @endif
        </div>
    </div>
</div>
@endsection
