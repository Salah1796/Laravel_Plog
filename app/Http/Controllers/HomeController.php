<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\Post;
use App\Categorie;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
      public function index()
    {



        $posts=Post:: paginate(10);
        return view('blog-home.index',compact('posts'));
    }

      public function bycat($id)
     {



        $cat=Categorie::find($id);
        $posts=$cat->posts;
        
     
       
       return view('blog-home.index',compact('posts'));

       }
      public  function  contact()
       {
           return view('blog-home.contact');

       }
      public  function  save_mesage( Request $request)

       {
           Message::Create([

                 'User_Name'=>$request['name'],
                'User_Email'=>$request['email'],
                'User_PhoneNo'=>$request['phone_No'],
                'message_body'=>$request['message_body'],

               ]);

           return redirect('/');


       }
      public  function  About()
      {
        return view('blog-home.about');

       }
}

