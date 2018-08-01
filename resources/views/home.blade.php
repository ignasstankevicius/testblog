@extends('layouts.app')

@section('content')
    <div>
        <h1>Blog</h1>
        <br><br>
        <div>
            @foreach($posts as $post)
                <h4><a href="{{ route('post.show', ['id' => $post->id] ) }}">{{$post->title}} - {{$post->created_at}} </a></h4>
                <br>
                @if (Auth::check())
                    <ul>
                        <li><a class="btn" href="{{ route('post.edit', ['id' => $post->id]) }}">Edit</a></li>
                        <li><a class="btn" href="{{ route('post.delete', ['id' => $post->id]) }}">Delete</a></li>
                    </ul>

                @endif
            @endforeach
        </div>

    </div>
@endsection
