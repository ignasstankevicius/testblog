@extends('layouts.app')

@section('content')
    <div>
        <h1>Users</h1>
        <br><br>
        <div>
            @foreach($users as $user)
                <h3>{{ $user->name }} - {{ $user->email }}</h3>
                <br>
            @endforeach
        </div>


    </div>
@endsection