<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Foundation\Auth\User;
use App\Categorie;
use App\Comment;
use App\Report;

class adminController extends Controller
{
    public function index()
     {

        $postCount=Count(Post::ALL());
        $userCount=Count(User::ALL());
        $comCount=Count(Comment::ALL());
        $catCount=Count(Categorie::ALL());
        $ReportCount=Count(Report::ALL());



        return view('admin.index',compact

        ('postCount','userCount','comCount','catCount','ReportCount'));

      }
    public  function  viewPosts()
     {
        $posts=Post::ALL();
        return view('admin.pages.viewPosts',compact('posts'));

      }

    public  function  viewReports()
      {
        $Reports=Report::ALL();
        return view('admin.pages.viewReports',compact('Reports'));

      }
    public  function  viewCats()
       {
         $cats=Categorie::ALL();
         return view('admin.pages.viewCats',compact('cats'));

       }
   
    public  function  viewComs()
       {
          $coms=Comment::ALL();
        
          return view('admin.pages.viewComs',compact('coms'));
  
    
       } 
  
    public  function  delCat($id)
        {

        Categorie::find($id)->delete();
        return redirect('/admin');


      }
   
   
   
      public  function  upCat( Request $request , $id)
     {

        if($request->isMethod('POST')) {


        $Cat = Categorie::find($id);
        $Cat->name=$request['name'];



        $Cat->save();
        return redirect('/');




        }

        else {

            $cat = Categorie::find($id);


            return view('/admin.pages.UpCat',compact('cat'));


        }
      }









  
 

}

