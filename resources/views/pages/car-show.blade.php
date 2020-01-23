@extends('layouts.base')

@section('content')

    <h1>Nome modello: {{$car -> name}}</h2>
        <ul>
            <li>
                <p>Colore: {{$car -> color}}</p>
            </li>
            <li>
                <p>Motore: {{$car -> engine}}</p>
            </li>
            <li>
                <p>Prezzo: {{$car -> price}}€</p>
            </li>
        </ul>

    
@endsection