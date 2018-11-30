
@extends('layouts.app')
@section('content')
    <br><br>
    <div class="container">
<div class="card my-2">
    <h5 class="card-header">Edit Comment:</h5>
    <div class="card-body">
        <form action="{{url('upCom/'.$com->id)}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">

                <textarea class="form-control" rows="3" name="body">{{$com->body}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
    </div>
    @endsection