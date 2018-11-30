<?php
use App\Categorie;
?>
@extends('layouts.app')
<!-- Navigation -->
@section('content')
    <h2 align="center" style="margin-bottom: 20px; font-family: cursive; margin-top:30px">Edit Post</h2>
    <div class="container">
        <form action="{{url('upPost/'.$post->id)}}" method="POST"  enctype="multipart/form-data" style="align-items:center; margin-left:40px" >

            {{csrf_field()}}
            <div class="form-group" >

                <label for="post_title">Qoustion Title</label>
                <input type="text" class="form-control" name="title" value="{{$post->title}}">
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
                <label for="post-content">Qoustion Content</label>
                <textarea style="max-width: 80%; height: 200px;" class="form-control" name="content">{{$post->body}}</textarea>
                <span class="error">* </span>
            </div>
            <div class="form-group">
                <input type="submit" name="Save" value="Save" class="btn btn-primary"  >

            </div>
        </form>

    </div>



@endsection




