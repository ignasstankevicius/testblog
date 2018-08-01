@extends('layouts.app')

@section('content')
    <div>
        <h1>Post</h1>
        <br>
        <h3>{{$post->title}}</h3><br>
        {{ $post->content }}
        <br><br>
        {{$post->created_at}}<br><br>
        <h4><a href="{{ route('author.show', ['id' => $post->user->id] ) }}"> Visi autoriaus {{ $post->user->name }} postai</a></h4>
    </div>
@endsection