
     @extends('layouts.master')
   <title>@section('title')</title>
    Single Posts
    @endsection

    @section('content')
     <h1>{{$post->title}}</h1>
     <p>{{$post->body}}</p>

   
      <hr/>
      <h4>Comments:</h4>
      <ul class="list-unstyled">
        @foreach($post->comments as $comment)
        <li>

            {{$comment->text}}
        </li>
        @endforeach
      </il>
    
    
     <form method="POST" action = "{{route('comments-post',['post_id'=> $post->id])}}">
        
      {{ csrf_field() }}

      <div class="form-group">
        <label for="title">comment</label>
        <input type="text" class="form-control" id="title" name="comment"/>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
     @endsection