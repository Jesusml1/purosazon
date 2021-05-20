@extends('layouts.app')


@section('content')

<div class="container">
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed in" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Recomendaciones para la sumision de recetas
                    </button>
                </h5>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <p>
                        El NOMBRE de la receta titene que ser descriptivo.
                        Ej: “Bistec a la plancha con vegetales”.
                    </p>
                    <p>
                        Si su receta no entra dentro de ninguna de las categorias
                        especificadas, seleccione la opcion “otro”.
                    </p>
                    <p>
                        La DESCRIPCIÓN es opcional, pero sirve para proporcionar
                        informacion acerca de la duracion, dificultad u otros
                        detalles referente a la receta (no incluir historias).
                    </p>
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
                    <p>
                        En PREPARACIÓN se desean instrucciones secuenciales y
                        claras en cuanto a la elaboración de la receta. Se
                        recomienda ser lo mas conciso posible.
                    </p>
                    <p>
                        <strong>
                            El sitio se reserva el derecho a remover cualquer receta que
                            no cumpla con las normas y/o ya este publicada.
                        </strong>
                    </p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mt-4">
    <div class="card">
        <h5 class="card-header">Agrega una receta</h5>
        <div class="card-body">
            <form>
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nombre de la receta</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre de la receta">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Categoria</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option selected hidden>Seleciona una categoria</option>
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
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descripción (opcional)</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Pequeña descripción de la receta" name="description" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Ingredientes</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Ingredientes de la receta" name="ingredients" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Preparación</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Instrucciones para la preparación" name="preparation" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Agregar</button>

            </form>
        </div>
    </div>
</div>



@endsection
