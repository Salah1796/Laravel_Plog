<?php

namespace App\Http\Controllers;
use Auth;
use App\Comment;
use Illuminate\Http\Request;
use App\Report;

class ComentController extends Controller
{
    public  function  add(Request $request)
   {

   // dd($request);
       Comment::Create([

                'body'=>$request['body'],
                'post_id'=>$request['post_id'],
                'user_id'=>Auth::user()->id,
                
               

               

       ]);

   
       return redirect('/post/'.$request["post_id"]);

   }
    public  function  UpVot($id)
   {
       $com=Comment::find($id);
       $com->upVote++;
       $com->save();
       return redirect('/post/'.$com["post_id"]);

   }
    public  function  DownVot($id)
   {

       $com=Comment::find($id);
       $com->downVote++;
        $com->save();
       return redirect('/post/'.$com["post_id"]);

   }
    public  function  delCom($id)
   {

       if(Comment::find($id)->user_id!=Auth::User()->id)
       {
           echo '<script>alert("You Cant Update This comment")</script>';
           return redirect('/');

       }

       Comment::find($id)->delete();
        return redirect('/');
   }
    public  function  upCom(Request $request,$id)

    {


        if(Comment::find($id)->user_id!=Auth::User()->id)
        {
            echo '<script>alert("You Cant Update This comment")</script>';
              return redirect('/');

        }
       if ($request->isMethod('POST')) {


           $com = Comment::find($id);


           $com->body=$request['body'];

           $com->save();
            return redirect('/post/'.Comment::find($id)->post_id);


        }


        $com = Comment::find($id);
        return view('blog-post.updateCom', compact('com'));


    }
    public  function  ReportCom($id)
    {


            Report::Create([

            'user_id'=>Auth::user()->id,
            'comment_id'=>$id,






            ]);

return redirect('/');

    }
}
