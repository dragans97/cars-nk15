@extends('layouts.app')

@section('title', 'Cars')
    
@section('content')
    <div class="row">
        @foreach ($cars as $car)
            <div class="col-lg-4 col-sm-12">
                <div class="card" style="width:">
                    <div class="card-body">
                      <h5 class="card-title">Producer: {{ $car->producer }}</h5>
                      <h5 class="card-title">Model: {{ $car->title }}</h5>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam aliquam non incidunt? Recusandae adipisci animi accusantium illum labore fugit dolorem?</p>
                      <a href="{{ route('single-car',['car' => $car->id]) }}" class="btn btn-dark">See More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection