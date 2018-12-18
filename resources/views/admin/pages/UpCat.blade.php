@extends('layouts.admin_layout');
@section('content')
    <div id="page-wrapper" style="margin-top: 20px; padding: 10px; height: 1300px;">
        <h2 align="center" style="margin-bottom: 20px; font-family: cursive;">Edit Categorie
        </h2>

        <form action="{{url('upCat/'.$cat->id)}}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
            <label for="name"> New Name </label>
           <input type="text" class="form-control" name="name"

            value="{{ $cat->name}}">
        </div>
            <div class="form-group">
            <input type="submit" name="update" class=" btn btn-primary" value="Save">
            </div>
            </form>
    </div>
        @endsection