@extends('layouts.layout')

@section('content')
<div class="content">
    <div class='recepies-content'>
        <a class='back-btn' href='{{ url()->previous() }}'>VOLVER</a>
        <h2>Todas las recetas</h2>
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
