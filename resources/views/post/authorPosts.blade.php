@extends('layouts.app')

@section('content')
    <div>
        <h1>All Author Posts</h1><br><br>
        @foreach($posts as $post)
            <h4><a href="{{ route('post.show', ['id' => $post->id] ) }}">{{$post->title}}  - {{$post->created_at}}</a></h4>
            <br>
        @endforeach


    </div>
@endsection