<?php use App\Categorie;?>
@extends('layouts.app')
    <!-- Navigation -->
    @section('content')
        <header class="masthead"   style="background-image: url({{asset('img/home-bg.jpg')}})">
            <div class="overlay"></div>

            <div class="container">


                <div class="col-lg-8 col-md-10 mx-auto">


                    <div class="site-heading">

                    </div>

                </div>

            </div>

        </header>


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
                  <img class="card-img-top" src="/storage/post_img/{{$post->img}}" alt="Card image cap">

                  <br>
             <br>
              <p class="card-text">{{$post->body}}</p>
                  Share on Facebook


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
              {{ $posts->links() }}
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

    </div>

    @endsection

