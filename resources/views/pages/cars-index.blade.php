@extends('layouts.base')

@section('content')

    @foreach ($cars as $car)

        <p>Modello auto: {{$car -> name}}</p>
        @auth
            <a href="{{route('car.show', $car -> id)}}">Details</a>            
            
            <a href="{{route('car.destroy', $car -> id)}}">Delete</a>
        @endauth

        
        
    @endforeach
    
@endsection