@extends('layout.app')

@section('content')

    <div class="row">
        <div class="col">
            <h1> {{$season->season_number}}
                de la série {{$season->title}}</h1>
        </div>
    </div>

@endsection