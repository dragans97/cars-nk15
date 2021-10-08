@extends('layouts.app')

@section('title')
    {{ $car->producer }} | {{ $car->title }}
@endsection
    
@section('content')
    <h1><b>{{ $car->producer }} | {{ $car->title }}</b></h1>
    <p>Number of doors : {{ $car->number_of_doors }}</p>
@endsection