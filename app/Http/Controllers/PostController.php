<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //

    public function index(){

        $posts = Post::all();

        return response()->json($posts);
    }

    public function create(){

        $post = new Post();

        return view('post/create', compact('post'));
    }

    public function store(){
        Post::create($this->validateData());
        return redirect('/posts');
    }

    public function show(Post $post){

        return view('post/show', compact('post'));
    }

    public function edit(Post $post){
        return view('post/edit', compact('post'));
    }

    public function update(Post $post){
        $post->update($this->validateData());

        return redirect('/posts');
    }

    public function destroy(Post $post){


        $post->delete();

        return redirect('/posts');
    }


    protected function validateData(){
        $data = request()->validate([
            'title'=> "required | min: 7",
            "text"=> "required | min: 10"
        ]);
        return $data;
    }
}
