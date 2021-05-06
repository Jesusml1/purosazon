@extends('layouts.layout')


@section('content')

<div class="content-form">
    <div class="form-container">
        <h2>Agrega una Receta</h2>
        <form action="/recepie/create" method="POST">
            <label for="name">Nombre:</label>
            <input type="text" name="name" placeholder="Nombre de la receta" required>
            <br>
            <label for="category">Categoria:</label>
            <select name='category' required>
                <option value="pollo">Pollo</option>
                <option value="carne">Carne</option>
                <option value="pasta">Pasta</option>
                <option value="postre">Postre</option>
                <option value="pizza">Pizza</option>
                <option value="arroz">Arroz</option>
                <option value="pescado">Pescado</option>
                <option value="ensalada">Ensalada</option>
                <option value="otro">Otro</option>
            </select>
            <br>
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="" cols="30" placeholder='Pequena descripción de la receta' rows="5"></textarea>
            <br>
            <label for="ingredientes">Ingredientes:</label>
            <textarea name="ingredientes" required id="" cols="30" placeholder='Ingredientes de la receta' rows="5"></textarea>
            <br>
            <label for="preparacion">Preparación:</label>
            <textarea name="preparacion" id="" required cols="30" placeholder='Instrucciones para la preparación' rows="5"></textarea>
            <br>
            <label for="email">Correo Electronico:</label>
            <input type="email" required placeholder="correo electronico">
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
