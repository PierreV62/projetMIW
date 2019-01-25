@extends("layout.app")

@section('content')

    <h1>Utilisateurs</h1>

    <ul>
        @foreach($roles as $role)
            <li> {{ $role->name }}</li>
        @endforeach
    </ul>


@endsection