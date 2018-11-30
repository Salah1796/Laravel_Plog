
@extends('layouts.app')
    <!-- Navigation -->
    @section('content')

    <!-- Page Content -->
    <div class="container" style="width: 100%">

        <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">
          <!-- Title -->
        <h1 class="mt-4">{{$post->title}}</h1><small style="color:red"># {{$post->categorie->name}}</small>
      

          <!-- Author -->
          <p class="lead">
            by
              <a href="{{url('User_info/'.$post->user->id)}}">{{$post->user->name}}</a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>  Posted on: &nbsp; {{$post->created_at->toFormattedDateString()}}</p>



          <hr>

            <br> <br>
            <!-- Post Content -->
            <div class="card mb-4">

                <div class="card-body">

                    @if($post->user->id==Auth::User()->id)

                        <a style=" margin-left:10px; float: right;font-size: 15px" href="{{url('delPost/'.$post->id)}}">Delete</a>
                        <a style="  float: right;font-size: 15px" href="{{url('upPost/'.$post->id)}}">Edit</a>
                    @endif

                    <br>
                    <p class="card-text">{{$post->body}}



                    </p>
                </div>
            </div>


<hr><br>
            <form action="" method="get">
<?php if (!isset($_GET['op']))$_GET['op']=1?>
                Sort By:
                <select   name="op" style="width: 150px; text-align: right" class="form-control">

                <option    value=1 @if ($_GET['op']==1) selected @endif>By Date (new)</option>
                <option   value=2 @if ($_GET['op']==2) selected @endif>By Date (Old)</option>

                <option   value=3 @if ($_GET['op']==3) selected @endif>By Up Vote</option>
                <option   value=4 @if ($_GET['op']==4) selected @endif>By Down Vote</option>


            </select>
                <input class="btn " type="submit" name="sub" value="Sort">
            </form>
            <br>
            <?php



              function byup($a,$b)
            {

                return $a->upVote > $b->upVote;

            }
             function byNew($a,$b)
            {
                return strcmp($a->created_at,$b->created_at);


            }
                   $coms=$post->comments;


             if (!isset($_GET['op'])) $_GET['op']=1;
               if ($_GET['op']==1)
                   $coms=$coms->sortByDesc('created_at');
            if ($_GET['op']==2)
                $coms=$coms->sortBy('created_at');

            if ($_GET['op']==3)
                      $coms=$coms->sortByDesc('upVote');
            if ($_GET['op']==4)
                $coms=$coms->sortByDesc('downVote');

            ?>
@foreach ($coms as $comment)
     <!-- Single Comment -->


             <div class="media-body">
          <h5 style="" class="mt-0">
              <a href="{{url('User_info/'.$comment->user->id)}}"> {{$comment->user->name}}
               </a>
              <small style=" color:grey;margin-left:  80% ">{{$comment->created_at->toFormattedDateString()}}</small><br>

          </h5>
                 <div class="card mb-2">

                     <div class="card-body">
                         <a style=" margin-left:10px; float: right;font-size: 15px" href="{{url('report/'.$comment->id)}}">Report</a>

                     @if($comment->user->id==Auth::User()->id)

                        <a style=" margin-left:10px; float: right;font-size: 15px" href="{{url('delCom/'.$comment->id)}}">Delete</a>
                        <a style=" margin-bottom: 10px; float: right;font-size: 15px" href="{{url('upCom/'.$comment->id)}}">Edit</a>
                    @endif


<br>


                    <p class="card-text">{{$comment->body}}</p>
            <a href="{{url('UpVot/'.$comment->id)}}"> <button style="width: auto"  class="btn btn-primary">Up Vote: &nbsp; {{$comment->upVote}}</button></a>
            <a href="{{url('DownVot/'.$comment->id)}}"><button style="width: auto" class="btn btn-primary">Down Vote: &nbsp; {{$comment->downVote}}</button></a>
            </div>
            </div>

            </div>


    <br>

@endforeach
       <!-- Comments Form -->


       <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form action="/add_com" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="hidden" value="{{$post->id}}" name="post_id">
                <textarea class="form-control" rows="3" name="body"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
          <!-- Comment with nested comments 
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
//////
              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

            </div>
          </div>
        -->
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">

          </div>

          <!-- Categories Widget -->


          <!-- Side Widget -->
          <div class="card my-4">

          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection