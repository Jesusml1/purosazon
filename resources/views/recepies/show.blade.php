@extends('layouts.layout')

@section('content')

<div class='content'>
    <div class='recepie'>
        <a class='back-btn' href='{{ url()->previous() }}'>VOLVER</a>
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
        <h3>Ingredientes</h3>
        <div class="recepie__ingredients">
            {!! nl2br(e($recepie->ingredients)) !!}
        </div>
        <h3>Preparación</h3>
        <div class="recepie__preparation">
            {!! nl2br(e($recepie->preparation)) !!}
        </div>
    </div>
</div>

@endsection
