@extends('layouts.layout')


@section('content')

<div class="content-form">


    <div class='rules-container'>
        <details>
            <summary>Normas para la sumision de recetas</summary>
            <section>
                <p>
                    El NOMBRE de la receta titene que ser descriptivo.
                    Ej: “Bistec a la plancha con vegetales”.
                </p>
                <br>
                <p>
                    Si su receta no entra dentro de ninguna de las categorias
                    especificadas, seleccione la opcion “otro”.
                </p>
                <br>
                <p>
                    La DESCRIPCION es opcional, pero sirve para proporcionar
                    informacion acerca de la duracion, dificultad u otros
                    detalles referente a la receta (no incluir historias).
                </p>
                <br>
                <p>
                    Colocar los INGREDIENTES separados por lineas con cantidades
                    en expresadas en el sistema de unidades (metrico y/o imperial),
                    ej:
                    <br>
                    <br>
                    1/4 taza de harina
                    <br>
                    2 huevos
                    <br>
                    1/3 taza azucar
                    <br>
                    <br>
                    Se desaconseja el uso de unidades de medida ambiguas
                    (“un poco”, “una pizca”, etc).
                </p>
                <br>
                <p>
                    En PREPARACION se desean instrucciones secuenciales y
                    claras en cuanto a la elaboracion de la receta. Se
                    recomienda ser lo mas conciso posible.
                </p>
                <br>
                <p>
                    <strong>
                        El sitio se reserva el derecho a remover cualquer receta que
                        no cumpla con las normas y/o ya este publicada.
                    </strong>
                </p>
                <br>

            </section>
        </details>
    </div>


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
            <div class='agreement'>
                <input type="checkbox" required name="agreement">
                <label for="agreement">
                    ACEPTO HABER LEIDO LAS NORMAS DE SUMISION
                </label>
            </div>
            <br>
            <button type="submit" class='btn'>Agregar receta</button>
        </form>
    </div>
</div>


@endsection
