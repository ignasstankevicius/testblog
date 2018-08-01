<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PostsController extends Controller
{
    public function index(){

        $posts = Post::paginate(5);

        return view('welcome', [
            'posts' => $posts
        ]);
    }


    public function show($id){

        $post = Post::findOrFail($id);

        return view('post.show', [
            'post' => $post
        ]);
    }

    public function create(){


        return view('post.create');
    }
//
    public function store(Request $request){

        $user = auth()->user();

        $post = new Post;
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->user_id = $user->id;
        $post->save();

        return redirect()->route('home');
    }

    public function authorShow($id){

        $posts = Post::where('user_id', $id)->get();


        return view('post.authorPosts', [
            'posts' => $posts
        ]);
    }
//
    public function edit($id){

        $post = Post::findOrFail($id);

        if(Gate::denies('edit-post', $post)){

            abort(403);
        }

        return view('post.edit', [
            'post' => $post
        ]);
    }
    public function update($id, Request $request){

        $post = Post::findOrFail($id);

        $user = auth()->user();

        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->user_id = $user->id;
        $post->save();


        return redirect()->route('home');
    }

    public function delete($id){

        $post = Post::findOrFail($id);

        if(Gate::denies('delete-post', $post)){

            abort(403);
        }

        $post->delete();


        return redirect()->route('home');
    }
}
