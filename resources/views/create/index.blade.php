@extends('layouts.layout')


@section('content')

<div class="content-form">
    <div class="form-container">
        <h2>Agrega una Receta</h2>
        <form action="/recepie" method="POST">
            @csrf
            <label for="name">Nombre:</label>
            <input type="text" name="name" placeholder="Nombre de la receta" required>
            <br>
            <label for="category">Categoria:</label>
            <select name='category' required>
                <option value="Pollo">Pollo</option>
                <option value="Carne">Carne</option>
                <option value="Pasta">Pasta</option>
                <option value="Postre">Postre</option>
                <option value="Pizza">Pizza</option>
                <option value="Arroz">Arroz</option>
                <option value="Pescado">Pescado</option>
                <option value="Ensalada">Ensalada</option>
                <option value="Otro">Otro</option>
            </select>
            <br>
            <label for="descripcion">Descripción:</label>
            <textarea name="description" id="" cols="30" placeholder='Pequena descripción de la receta' rows="5"></textarea>
            <br>
            <label for="ingredientes">Ingredientes:</label>
            <textarea name="ingredients" required id="" cols="30" placeholder='Ingredientes de la receta' rows="5"></textarea>
            <br>
            <label for="preparacion">Preparación:</label>
            <textarea name="preparation" id="" required cols="30" placeholder='Instrucciones para la preparación' rows="5"></textarea>
            <br>
            <label for="email">Correo Electronico:</label>
            <input type="email" name='email' required placeholder="correo electronico">
            <br>
            <label for="acuerdo">
                <input type="checkbox" required name="acuerdo" id="">
                ACEPTO HABER LEIDO LAS NORMAS DE SUMISION
            </label>
            <br>
            <button type="submit" class='btn'>Agregar receta</button>
        </form>
    </div>
</div>


@endsection
