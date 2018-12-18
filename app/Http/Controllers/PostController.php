<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
class PostController extends Controller
{
    public function post($id)
    {



        $post=Post::find($id);
        
        return view('blog-post.index',compact('post'));
    }
    public function addPost()
    {
        return view('blog-home.addPost');




    }
    public function savPost(Request $request)
    {
      

        Post::Create([

            'title'=>$request['post_title'],
            'body'=>$request['post-content'],
            'categorie_id'=>$request['cats'],

            'user_id'=>Auth::user()->id,
            
           



   ]);



  return redirect('/');

       // return 'sav post!!!!!!!!!';




    }
    public function  delPost($id)
     {
        if(Post::find($id)->user_id==Auth::User()->id || Auth::User()->Role=='Admin')
        {
            Post::find($id)->delete();

            return redirect('/');

           
        }

        echo '<script>alert("You Cant Update This Post")</script>';
       return redirect('/');

         

    }
    public function  upPost(Request $request,$id)

    {

        if(Post::find($id)->user_id==Auth::User()->id)
        {

            if ($request->isMethod('POST')) {

                $post = Post::find($id);
                $post->title=$request['title'];
     
                $post->body=$request['content'];
     
                $post->save();
            return redirect('/');
     
     
             }
     
     
     
             $post = Post::find($id);
             return view('blog-home.update_Post', compact('post'));
     
            
        }
        echo '<script>alert("You Cant Update This Post")</script>';
       return redirect('/');


    }

}
