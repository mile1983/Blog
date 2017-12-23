<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Comment;
class CommentsController extends Controller
{
    
    public function store($postId)
    {
        $this->validate(request(),['comment'=> 'required | max:250']);
        
        $comment = new Comment;

        $comment->post_id = $postId;

        $comment->text = request('comment');

        $comment->save();

       return redirect()->route('single-post',['id'=>$postId]);
    }
}
