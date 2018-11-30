<?php
use App\Categorie; 
?>
@extends('layouts.app')
<!-- Navigation -->
@section('content')
<h2 align="center" style="margin-bottom: 20px; font-family: cursive; margin-top:30px">Add Post</h2>
<div class="container">
 <form action="/add_Post" method="POST"  enctype="multipart/form-data" style="align-items:center; margin-left:40px" >

    {{csrf_field()}}
            <div class="form-group" >

            <label for="post_title">Post Title</label>
            <input type="text" class="form-control" name="post_title">
            <span class="error"></span>
        </div>
   
        <div class="form-group">
            
                    
              
            <label for="cats">Post Category </label>
            <select  name="cats" >
             
                {{ $cats=Categorie::All()}}
            @foreach ($cats as $c)
            <option value="{{$c->id}}">{{ $c->name}}</option>
                

            @endforeach
                
            </select>

          
        </div>
     

<div class="form-group">
            <label for="post-content">Post Content</label>
            <textarea style="max-width: 80%; height: 200px;" class="form-control" name="post-content"></textarea>
            <span class="error">* </span>
</div>
<div class="form-group">
<input type="submit" name="add" value="Add Post" class="btn btn-primary"  >
            
</div>
 </form>

</div>
        
  

         @endsection 


                       

