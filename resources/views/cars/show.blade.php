@extends('layouts.app')

@section('title')
    {{ $car->producer }} | {{ $car->title }}
@endsection
    
@section('content')
    
    <div class="row">
        <div class="col-lg-10 col-sm-12">
            <h1><b>{{ $car->producer }} | {{ $car->title }}</b></h1>
            <p>Number of doors : {{ $car->number_of_doors }}</p>
        </div>
        <div class="col-lg-2 col-sm-12">
            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Other Cars
                </button>
                <ul class="dropdown-menu">
                    @foreach ($otherCars as $otherCar)
                        <li><a class="dropdown-item" href="{{ route('single-car', ['car' => $otherCar->id]) }}">{{ $otherCar->producer }} {{ $otherCar->title }} </a></li>
                    @endforeach
                </ul>
              </div>
        </div>
    </div>
@endsection