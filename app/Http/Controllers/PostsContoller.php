<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;


class PostsContoller extends Controller
{
    
    public function index()
    {
        $posts = Post::getPublishedPosts();
        return view('posts.index',compact(['posts']));
    }




    public function show($id)
    {   


        $post = Post::with('comments')->find($id);
        
        return view('posts.show',compact(['post']));
    
    
    
    }





    public function create()
       {

        return view('posts.create');
    }
    public function store()
    {   
        // $post = new Post;
        // $post->title = request('title');
        // $post->body = request('body');
        // $post->is_published = request('published');
        // $post->save();

        // return view('posts.store');



//ovo je validacija sa uslovima da su tilte i bodi zahtevani
        $this->validate(request(),['title'=> 'required','body' => 'required | min:15']);



        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'is_published' => request('published')
        ]);
        return redirect()->route('posts');



    }
}
