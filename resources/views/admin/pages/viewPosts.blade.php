@extends('layouts.admin_layout')
@section('content')


    <div id="page-wrapper" style="margin-top: 20px; padding: 10px; height: 1300px;">
    <h2 align="center" style="margin-bottom: 20px; font-family: cursive;">View All Posts
</h2>

            <table class="table table-borderd table-hover">
                            <thead>
                               <tr>
                                   <th>Id</th>
                                   <th>Author</th>
                                   <th>Title</th>
                                   <th>Category</th>

                                   <th>Comment</th>
                                   <th>Date</th>



                               </tr>
                            </thead>

                            <tbody>




                  @foreach($posts as $pos)
                 <tr>
                                   
                                  <td>{{$pos->id}}</td>
                     <td><a href="{{url('User_info/'.$pos->user->id)}}">{{$pos->user->name}}</a></td>
                     <td><a href="{{url('post/'.$pos->id)}}">{{$pos->title}}</a></td>

                           <td>{{$pos->categorie->name}}</td>



                     <td>{{count($pos->comments)}}</td>

                     <td>{{$pos->created_at}}</td>
                           <td><a href="{{url('Admin_delPost/'.$pos->id)}}">Delete</a></td>
                             <td><a href="{{url('Admin_upPost/'.$pos->id)}}">Update</a></td>


                              

                                  
                                  

                               </tr>





                 @endforeach
                 </tbody></table>
    </div>
@endsection