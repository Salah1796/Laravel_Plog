@extends('layouts.admin_layout')
@section('content')


    <div id="page-wrapper" style="margin-top: 20px; padding: 10px; height: 1300px;">
    <h2 align="center" style="margin-bottom: 20px; font-family: cursive;">View All Comments
</h2>

            <table class="table table-borderd table-hover">
                            <thead>
                               <tr>
           
                                   <th>Id</th>
                                   <th>Author</th>
                                   <th>comment</th>
                                   <th>In Response to</th>
                                   <th>Date</th>
                                  <th>Delete</th>
                                   <th>Update</th>


                                 



                               </tr>
                            </thead>

                            <tbody>
                             
           @foreach ($coms  as $com)
            <tr>
                                   
           <td>{{$com->id}}</td>
           <td><a href="{{url('User_info/'.$com->user->id)}}">{{$com->user->name}}</a></td>
           <td>{{$com->body}}</td>
           <td><a href="{{url('post/'.$com->post->id)}}" >{{$com->post->title}}</a></td>
           
           <td>{{$com->created_at}}</td>
           <td><a href="{{url('delCom/'.$com->id)}}">Delete</a></td>
           <td><a href="{{url('upCom/'.$com->id)}}">Edit</a></td>
           </tr>
      
         @endforeach



               
                 </tbody></table>
    @endsection