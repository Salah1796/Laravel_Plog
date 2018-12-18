<?php

use Illuminate\Foundation\Auth\User;
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <!-- MetisMenu CSS -->
    <link href="/" rel="stylesheet">
    <link href="{{asset('vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->


    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet" type="text/css">

    <!-- Morris Charts CSS -->
    <link href="" rel="stylesheet">
    <link href="{{asset('vendor/morrisjs/morris.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->

    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">.error
        {
            color: red;

        }</style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->

    <!-- /.navbar-header -->
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}">Ploger</a>
        </div>
        <ul class="nav navbar-top-links navbar-right">

            <!-- /.dropdown-alerts -->

            <!-- /.dropdown -->

            </li>

            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="{{url('User_info/'.\Illuminate\Support\Facades\Auth::User()->id)}}"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>

                        <a class="dropdown-item" href="{{ route('logout') }}">
                            Log out

                        </a>



                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li> <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Posts<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('viewPosts')}}">
                                    View posts</a>
                            </li>
                            <li>
                                <a href="{{route('add_Post')}}">Add Post</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li>
                        <a href="{{route('ViewCats')}}">categorys</a>
                    </li>

                    <!-- /.nav-second-level -->

                    <li>
                        <a href="Admin_comments.php">Comment</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>users<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="users.php?op=viewAll">View users</a>
                            </li>
                            <li>
                                <a href="users.php?op=add">Add user</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="users.php?op=Profile">Profile</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</div>
@yield('content')

<script type="text/javascript" src="{{asset('vendor/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->

<script type="text/javascript" src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Plugin JavaScript -->

<script type="text/javascript" src="{{asset('vendor/metisMenu/metisMenu.min.js')}}"></script>

<!-- Morris Charts JavaScript -->

<script type="text/javascript" src="{{asset('vendor/raphael/raphael.min.js')}}"></script>


<script type="text/javascript" src="{{asset('vendor/morrisjs/morris.min.js')}}"></script>

<script src="data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->

<script type="text/javascript" src="{{asset('js/sb-admin-2.js')}}"></script>



