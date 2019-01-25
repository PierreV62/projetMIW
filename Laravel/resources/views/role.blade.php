@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col">
            <ul>
                @foreach($roles as $role)
                    <li> {{ $role->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection