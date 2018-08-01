@extends('layouts.app')

@section('content')
    <div>
        <h1>Blog</h1>
        <br><br>
        <div>
            @foreach($posts as $post)
                <h4><a href="{{ route('post.show', ['id' => $post->id] ) }}">{{$post->title}} - {{$post->created_at}} - ({{ $post->user->name }})</a></h4>
                <br>
            @endforeach
        </div>
        {{ $posts->links() }}

    </div>
@endsection