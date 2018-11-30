<?php use App\Categorie;?>
@extends('layouts.app')
    <!-- Navigation -->
    @section('content')
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <br>

          <!-- Blog Post -->
      
       @foreach ($posts as $post)
           
      <br>
          <div class="card mb-4">
            <div class="card-body">
            <h2 class="card-title">{{$post->title}}
  @if($post->user->id==Auth::User()->id)

        <a style=" margin-left:10px; float: right;font-size: 15px" href="{{url('delPost/'.$post->id)}}">Delete</a>
        <a style="  float: right;font-size: 15px" href="{{url('upPost/'.$post->id)}}">Edit</a>
      @endif
            </h2>

             <br>
              <p class="card-text">{{$post->body}}</p>
            <a href="/post/{{$post->id}}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              {{$post->created_at->toFormattedDateString()}} by
              <a href="{{url('User_info/'.$post->user->id)}}">{{$post->user->name}}</a>
            </div>
          </div>
          @endforeach
        
        
          
          
          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>
<br><br>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
<br><br>
          <!-- Search Widget -->
          <div class="card my-2">
            <div class="card-body">
              <div class="input-group">


                  <a href="/add_Post" class="btn btn-primary">Add Post</a>
              </div>


            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
              <h5 class="card-header">Categories</h5>
              <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                     
                        @foreach (Categorie::ALL() as $cat)
                        
                        <li><a href={{url('byCat/'.$cat->id)}}>{{($cat->name)}}</a></li>
                        @endforeach

                        </ul>
                      </div>
                     
                       
                </div>
              </div>
            </div>

          <!-- Side Widget -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </div>

    @endsection

