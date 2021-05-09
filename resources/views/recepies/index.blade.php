@extends('layouts.layout')

@section('content')
<div class="content">
    <div class='recepies-content'>
        @unless($msg == 'Todas las recetas')
        <a class='back-btn' href="{{ url()->previous() }}">volver</a>
        @endunless
        <h2>{{ $msg }}</h2>
        @if( $type == 'search' && $recepies->isEmpty())
        <h3>No hay resultados</h3>
        @elseif($type == 'category' && $recepies->isEmpty())
        <h3>Aun no hay ninguna, agrega una!</h3>
        @endif
        @foreach($recepies as $recepie)
        <a href="/recepie/{{ $recepie->id }}" class='hover-link'>
            <div class='recepie card'>
                <div class='recepie__category'>
                    {{ $recepie->category }},
                    @php
                    $format = '%Y-%m-%d %H:%M:%S';
                    $time = strtotime($recepie->created_at);
                    echo date('d', $time);
                    echo '/';
                    echo date('m', $time);
                    echo '/';
                    echo date('Y', $time);
                    @endphp
                </div>
                <div class="recepie__name">
                    {{ $recepie->name }}
                </div>
                <div class='recepie__description'>
                    {{ $recepie->description }}
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

@endsection
