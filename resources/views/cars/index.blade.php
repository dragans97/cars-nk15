@extends('layouts.app')

@section('title', 'Cars')
    
@section('content')
<div class="row">
    <div class="col-lg-2 col-sm-12">
        <div class="col-lg-12 col-sm-12 my-2">
            <form action="{{ url('filter-cars') }}" method="get">
                @csrf
                <h1>Filter cars</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, voluptates.</p>
                
                <select class="form-select mt-3 mb-2" aria-label="Default select example" name="status">
                    <option selected disabled>-- Chose --</option>
                    <option value="all">All</option>
                    <option value="0">Cars on Sale</option>
                    <option value="1">Sold cars</option>
                  </select>

                <button type="submit" class="btn btn-primary">Filter</button>
              </form>
        </div>
    </div>
    <div class="col-lg-10 col-sm-12">
        <div class="row">
            @if ($cars->isNotEmpty())
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
            @else
                There's no results for your query.
            @endif
        </div>
    </div>
</div>
    
@endsection