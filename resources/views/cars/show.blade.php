@extends('layouts.app')

@section('title')
    {{ $car->producer }} | {{ $car->title }}
@endsection
    
@section('content')
    
    <div class="row">
        <div class="col-lg-10 col-sm-12">
            <h1><b>{{ $car->producer }} | {{ $car->title }}</b></h1>
            <p>Number of doors : {{ $car->number_of_doors }}</p>
            <p>Description: 
                {{ \Illuminate\Support\Str::limit($car->description, 100, '') }}
                @if (strlen($car->description) > 100)
                    <span id="dots">...</span>
                    <span id="more">{{ substr($car->description, 100) }}</span>
                @endif
            </p>
            
            <button onclick="myFunction()" id="myBtn">Read more</button>
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

@push('scripts')
<script>
    function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}
</script>
@endpush