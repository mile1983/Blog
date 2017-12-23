
@extends('layouts.master')
<title>@section('title')</title>
Create new post

@endsection

 @section('content')

 <h2 class="blog-post-title">Create new post</h2>
 
     <form method="POST" action="{{ route('store-post') }}">
 
         {{ csrf_field() }}
 
         <div class="form-group">
             <label for="title">Title</label>
             <input type="text" class="form-control" id="title" name="title"/>
             @if($errors->has('title'))
             <ul>
                 @foreach($errors->get('title') as $error)
                 <li>{{$error}}</li>
                 @endforeach
             </ul>
             @endif
         </div>
 
         <div class="form-group">
             <label for="body">Body</label>
             <textarea class="form-control" id="body" name="body"></textarea>
            @if($errors->has('body'))
            <ul>
                @foreach($errors->get('body') as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
         
         </div>
 
         <div class="form-group">
             <label for="published">Publish?</label>
             <input type="checkbox" class="form-control" id="published" name="published" value="1"/>
         </div>
 
         <div class="form-group">
             <button type="submit" class="btn btn-primary">Submit</button>
         </div>
 
     </form>
  
 @endsection
