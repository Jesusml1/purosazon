@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="card">
        <h5 class="card-header">Editar Receta</h5>
        <div class="card-body">
            <form action="/recipe/{{ $recipe->id }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nombre de la receta</label>
                    <input type="text" name="name" value="{{ $recipe->name }}" class="form-control" id="exampleFormControlInput1" placeholder="Nombre de la receta">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Categoria</label>
                    <select class="form-control" value={{ $recipe->category }} name="category" id="exampleFormControlSelect1">
                        @foreach($categories as $option)
                        @if($option == $recipe->category)
                        <option selected value="{{ $option }}">{{ $option }}</option>
                        @else
                        <option value="{{ $option }}">{{ $option }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descripción (opcional)</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Pequeña descripción de la receta" name="description" rows="3">{{$recipe->description}}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Ingredientes</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Ingredientes de la receta" name="ingredients" rows="3">{{ $recipe->ingredients }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Preparación</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Instrucciones para la preparación" name="preparation" rows="3">{{ $recipe->preparation }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Agregar</button>

            </form>
        </div>
    </div>
</div>



@endsection
