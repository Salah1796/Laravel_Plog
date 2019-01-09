@extends('layouts.admin_layout')
@section('content')

    <div id="page-wrapper" style="margin-top: 20px; padding: 10px; height: 1300px;">
        <h2 align="center" style="margin-bottom: 20px; font-family: cursive;">View All Users
        </h2>

        <table class="table table-responsive-lg table-responsive ">
                            <thead>
                               <tr>
                                  
                                   <th>Id</th>
                                   <th>Name</th>
                                   <th>Email</th>
                                   <th>Role</th>
                                   <th>Delete</th>
                                   <th>Change Role</th>

                                   


                                 



                               </tr>
                            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->Role}}</td>
         <td><a href="{{url('Admin_deluser/'.$user->id)}}">Delete</a></td>
         <td><a href="{{url('Admin_toAdm/'.$user->id)}}">Admin</a>
         &nbsp;| &nbsp;<a href="{{url('Admin_tosub/'.$user->id)}}">Subscriper</a></td>

                    </tr>
                @endforeach


                 </tbody></table>

    </div>
@endsection