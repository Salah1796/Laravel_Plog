<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Foundation\Auth\User;
use App\Categorie;
use App\Comment;
use App\Report;
use Illuminate\Support\Facades\Auth;
//use App\Auth;

class adminController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function index()
    {
        $postCount=$userCount=$comCount=$catCount=$ReportCount=0;
       if (Auth::user()->Role != "Admin")
      return redirect('/');
     else {
           $postCount = Count(Post::ALL());
           $userCount = Count(User::ALL());
           $comCount = Count(Comment::ALL());
           $catCount = Count(Categorie::ALL());
           $ReportCount = Count(Report::ALL());


           return view('admin.index', compact

           ('postCount', 'userCount', 'comCount', 'catCount', 'ReportCount'));

      }
    }

    public function viewPosts()
    {
        $posts = Post::ALL();
        return view('admin.pages.viewPosts', compact('posts'));

    }

    public function viewReports()
    {
        $Reports = Report::ALL();
        return view('admin.pages.viewReports', compact('Reports'));

    }

    public function viewCats()
    {
        $cats = Categorie::ALL();
        return view('admin.pages.viewCats', compact('cats'));

    }

    public function viewusers()
    {
         $users=User::ALL();
        return view('admin.pages.viewUsers', compact('users'));


    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delUser($id)
    {


        if (Auth::user()->id == $id) {

            Auth::user()->delete();
            // User::find($id)->delete();
            return redirect('/');
        }
        User::find($id)->delete();

        return redirect('/admin');
    }

    public function viewComs()
    {
        $coms = Comment::ALL();

        return view('admin.pages.viewComs', compact('coms'));


    }

    public function delCat($id)
    {

        Categorie::find($id)->delete();
        return redirect('/cats');


    }

    public function upCat(Request $request, $id)
    {

        if ($request->isMethod('POST')) {


             $Cat = Categorie::find($id);
             $Cat->name = $request['name'];


             $Cat->save();
             return redirect('/cats');


        } else {

            $cat = Categorie::find($id);


            return view('/admin.pages.UpCat', compact('cat'));


        }
    }

    public function toAdm($id)
    {
        $user = User::find($id);
        $user->Role = "Admin";
        $user->save();

        return redirect('users');


    }

    public function tosub($id)
    {
        $user = User::find($id);
        $user->Role = "Subscriber";
        $user->save();

        return redirect('users');


    }









  
 

}

