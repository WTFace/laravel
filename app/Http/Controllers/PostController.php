<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index(){
        $posts = Post::all();
    	return view('posts.index', compact('posts'));
    }

    public function create(){
    	return view('posts.create');
    }

    public function show(Post $post){
        return view('posts.show', compact('post'));
    }

    public function store(){
    	$this->validate(request(),[
            'title' => 'required|max:255',
            'body' => 'required|string',
        ]);

        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => request('user_id')
        ]);

        return redirect('/'); 
    }

}