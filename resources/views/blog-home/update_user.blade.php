<?php
use App\Categorie;
?>
@extends('layouts.app')
<!-- Navigation -->
@section('content')
    <h2 align="center" style="margin-bottom: 20px; font-family: cursive; margin-top:30px">Update Your Profile</h2>
    <div class="container">
    <form action="{{route('upUser')}}" method="POST"  enctype="multipart/form-data" style="align-items:center; margin:20px" >

        {{csrf_field()}}
        <div class="form-group" >

            <label for="post_title">Name</label>
            <input type="text" class="form-control" name="Name" value="{{$user->name}}">

        </div>

        <div class="form-group" >

            <label for="post_title">Email</label>
            <input type="text" class="form-control" name="Email" value="{{$user->email}}">

        </div>

    <!--    <div class="form-group" >

           <label for="post_title">Password</label>
            <input type="text" class="form-control" name="Email" value="{{$user->Password}}">

        </div>
-->


        <div class="form-control-sm">
            <input type="submit" name="add" value="Save" class="btn btn-primary form-control-sm">

        </div>
    </form>
    </div>




@endsection




