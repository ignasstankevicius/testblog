@extends('layouts.app')

@section('content')
    <div>
        <h1>Create Post</h1>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <label for="name">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
            {{--@if ($errors->has('name'))--}}
            {{--{{ $errors->first('name') }}--}}
            {{--@endif--}}
            <label for="name">Content</label>
            <input type="text" name="content" id="content" value="{{ old('content') }}" required>
            {{--@if ($errors->has('description'))--}}
            {{--{{ $errors->first('description') }}--}}
            {{--@endif--}}
            <input type="submit" value="Add new">
        </form>
    </div>
@endsection