@extends('layouts.app')

@section('content')
<div class="container min-vh-100">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(count($recipes) > 0)
            <div class="card">
                <div class="card-header">{{ __('Tus recetas') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>

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
            @else
            <h2>No tienes ninguna receta!</h2>
            <h3>Agrega una</h3>
            @endif
        </div>
    </div>
</div>
@endsection
