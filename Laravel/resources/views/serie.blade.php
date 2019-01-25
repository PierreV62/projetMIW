@extends('layout.app')

@section('content')

    <div class="row">
        <div class="col">

            -><a href="{{ route('season', ['season_id' => $season->id]) }}">{{ $season->season_number }}</a>
            <p>{{ count($season->episodes) }} épisodes</p>

            @foreach($season->episodes as $episode)
                <h4>S{{ $season->season_number }}E{{ $episode->episode_number }} : {{ $episode->title }}</h4>
                Avec :
                @foreach($episode->actors as $actor)
                    {{ $actor->name }}
                @endforeach
            @endforeach
        </div>
    </div>

@endsection