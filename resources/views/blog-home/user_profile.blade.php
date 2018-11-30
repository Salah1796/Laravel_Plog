<?php
use App\Comment;
use App\Post;
use Illuminate\Foundation\Auth\User;
?>
@extends('layouts.app')

@section('content')
    <br><br>
<br>
    <div class="col-lg-8" style="margin: auto;border-width: thick ">

        <div class="card mb-8" >
            <div class="card-body"  style="font-family: 'Courier '">
                @if($user->id==Auth::User()->id)
                <a style="float: right ;font-size: 19px" href="{{route('upUser')}}" >Edit </a></h5>
               @endif
                <h5 class="form-text" >Name : </h5><h5>{{$user->name}}

                <hr>
                <h5 class="form-text"> Email </h5> <h5>{{$user->email}}


                </h5><hr>

                <h5 class="form-text">Regestration Date</h5><h5>{{$user->created_at->toFormattedDateString()}}</h5> <hr>
                <h5 class="form-text">Number OF Qustions </h5><h5>{{count($user->posts)}}</h5><hr>
                <h5 class="form-text">Number OF Comments </h5><h5>{{count($user->comments)}}</h5><hr>
    </div>
        </div>
    </div>

@endsection