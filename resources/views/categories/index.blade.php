@extends('layouts.app')

@section('content')


<div class="container min-vh-100">
    <h2 class='title mb-4'>Categorias</h2>
    <div class="row hidden-md-up">
        @foreach($categories as $category)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-block p-4 ">
                    <h4 class="card-title">{{ ucwords($category) }}</h4>
                    <div class="d-flex justify-content-between">
                        <img class="category__icon" src="./static/categories/{{ $category }}.svg" alt="{{ $category }}">
                        <a href="/search?category={{ ucwords($category) }}" class='btn btn-primary px-3 py-2'>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
