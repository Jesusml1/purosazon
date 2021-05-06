@extends('layouts.layout')

@section('content')

@foreach($recepies as $recepie)
<p>{{ $recepie->name }}</p>
@endforeach

@endsection
