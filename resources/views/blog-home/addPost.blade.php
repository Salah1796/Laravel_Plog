<?php
use App\Categorie; 
?>
@extends('layouts.app')
<!-- Navigation -->
@section('content')
<h2 align="center" style="margin-bottom: 20px; font-family: cursive; margin-top:30px">Add Post</h2>
<div class="container" style="width: 70%">
 <form action="/add_Post" method="POST"  enctype="multipart/form-data"  class="from" >

    {{csrf_field()}}
            <div class="form-group" >

            <label for="post_title">Post Title</label>
            <input type="text" class="form-control" name="post_title">
            <span class="error"></span>
        </div>
            <div class="form-group">
            
                    
              
            <label for="cats">Post Category </label>
            <select  name="cats" class="form-control" >
             
                {{ $cats=Categorie::All()}}
            @foreach ($cats as $c)
            <option value="{{$c->id}}">{{ $c->name}}</option>
                

            @endforeach
                
            </select>


        </div>
            <div class="form-group">
            <label for="post-content">Post Content</label>
            <textarea  id="article-ckeditor" class="form-control" name="post-content"></textarea>
            <span class="error">* </span>
</div>
           <div class="form-group" >

            <label  for="post_image">Post Image</label>
            <input  type="file" class="form-control-file" name="post_image">
            <span class="error"></span>
           </div>
           <div class="form-group">
<input type="submit" name="add" value="Add Post" class="btn btn-primary"  >
            
</div>

 </form>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace("article-ckeditor");
    </script>

</div>
        
  

         @endsection 


                       

