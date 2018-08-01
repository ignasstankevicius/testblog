@extends('layouts.app')

@section('content')
    <div>
        <h1>Edit Post</h1>
        <form action="{{ route('post.update', ['id' => $post->id]) }}" method="post">
            @csrf
            <label for="name">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" required>
            {{--@if ($errors->has('name'))--}}
            {{--{{ $errors->first('name') }}--}}
            {{--@endif--}}
            <label for="name">Content</label>
            <input type="text" name="content" id="content" value="{{ old('content', $post->content) }}" required>
            {{--@if ($errors->has('description'))--}}
            {{--{{ $errors->first('description') }}--}}
            {{--@endif--}}
            <input type="submit" value="Update">
        </form>
    </div>
@endsection