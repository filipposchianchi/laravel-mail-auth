@extends('layouts.base')

@section('content')

    @foreach ($cars as $car)

        <p>Modello auto: {{$car -> name}}</p>
        @auth
            <button>
                <a href="{{route('car.show', $car -> id)}}">Details</a>            
            </button>      
        @endauth

        
        
    @endforeach
    
@endsection