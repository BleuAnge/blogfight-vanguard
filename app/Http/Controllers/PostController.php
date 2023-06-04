<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('pages/posts/index', [
            'posts' => Posts::latest()->filter(request(['tag' , 'search']))->Paginate(6)
        ]);
    }

    public function getAll(){

    }

    public function getOne(Posts $post){
        return view('pages/posts/post', [
            'post' => $post
        ]);
    }

    public function create(){
        return view('pages/posts/create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'sender' => 'required',
            'deck_name' => 'required',
        ]);

        $tags = $request['format']. ',' .$request['nation']. ',' .$request['deck_name'];

        $formFields = [
            'title' => $request['title'],
            'tags' => $tags,
            'description' => $request['description'],
            'image' => 'test image',
            'sender' => $request['sender'],
        ];

        Posts::create($formFields);

        return redirect('/')->with('message' , 'Post Successfully Created!');
    }
}
