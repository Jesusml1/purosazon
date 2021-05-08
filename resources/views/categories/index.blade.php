@extends('layouts.layout')

@section('content')


<div class="content">
    <h2 class='title'>Categorias</h2>
    <div class="categories">
        @foreach($categories as $category)
        <a href="#" class='hover-link'>
            <div class='category'>
                <img class="category__icon" src="./static/categories/{{ $category }}.svg" alt="{{ $category }}">
                <div class="category__name">{{ ucwords($category) }}</div>
                <img class="category__arrow" src="./static/arrow.svg" alt="ver">
            </div>
        </a>
        @endforeach
    </div>
</div>

@endsection
