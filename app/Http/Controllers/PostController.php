<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use  Illuminate\Support\Facades\Storage;
use App\Post;
use Auth;
class PostController extends Controller
{


    public function post($id)
    {



            $post = Post::find($id);

            return view('blog-post.index', compact('post'));

    }
    public function addPost()
    {


        return view('blog-home.addPost');





    }
    public function savPost(Request $request)
    {

        $this->validate($request,[

          'post_title'   =>  'required',
          'post-content' =>  'required',
          'post_image'  =>   'image|nullable|max:1999'


        ]);





        ## save image
        if($request->hasFile('post_image'))
        {

            //file_eith_extention
            $file_with_exten=$request->file('post_image')->getClientOriginalName();
            //file_name_only
            $filName=pathinfo("$file_with_exten",PATHINFO_FILENAME);
           // dd($filName);;

             $extention=$request->file("post_image")->getClientOriginalExtension();
            // dd($extention);
            //file name to store
             $file_name_to_stor=$filName."_".time().".".$extention;
              $path=$request->file("post_image")->storeAs("public/post_img/",$file_name_to_stor);

        }
        else
        {
        $file_name_to_stor="";

        }




        Post::Create([

            'title'=>$request['post_title'],
            'body'=>$request['post-content'],
            'img'=> $file_name_to_stor,
            'categorie_id'=>$request['cats'],

            'user_id'=>Auth::user()->id,
            
           



   ]);



  return redirect('/');

       // return 'sav post!!!!!!!!!';




    }
    public function  delPost($id)
     {




             if (Post::find($id)->user_id == Auth::User()->id || Auth::User()->Role == 'Admin') {

                 Storage::delete("public/post_img/" . Post::find($id)->img);
                 Post::find($id)->delete();
                 return redirect('/');


             }

             echo '<script>alert("You Cant Update This Post")</script>';
             return redirect('/');



    }
    public function  upPost(Request $request,$id)

    {



            if (Post::find($id)->user_id == Auth::User()->id) {

                if ($request->isMethod('POST')) {


                    if ($request->hasFile('post_image')) {
//dd($request->file('post_image')->getClientOriginalName());
                        //file_eith_extrn
                        $file_with_exten = $request->file('post_image')->getClientOriginalName();
                        //file_name_only
                        $filName = pathinfo("$file_with_exten", PATHINFO_FILENAME);
                        // dd($filName);;

                        $extention = $request->file("post_image")->getClientOriginalExtension();
                        // dd($extention);
                        //file name to store
                        $file_name_to_stor = $filName . "_" . time() . "." . $extention;
                        $path = $request->file("post_image")->storeAs("public/post_img/", $file_name_to_stor);//dd($file_name_to_stor);
                    }
                    $post = Post::find($id);
                    $post->title = $request['title'];

                    $post->body = $request['content'];
                    if ($request->hasFile('post_image')) {
                        //delete previous image
                        Storage::delete("public/post_img/" . $post->img);
                        $post->img = $file_name_to_stor;

                    }

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
