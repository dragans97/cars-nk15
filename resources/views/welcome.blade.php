@extends('layouts.app')

@section('title', 'Home')
    
@section('content')
    <h1>Welcome {{$name}}</h1>
    <p>I'm {{$age}} years old.</p>
@endsection