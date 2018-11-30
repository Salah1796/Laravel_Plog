<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\User;

class userController extends Controller
{
    public function User_info($id)
    {

        $user = User::find($id);

        return view('blog-home.user_profile', compact('user'));

    }

    public function upUser(Request $request)
    {
        if ($request->isMethod('POST')) {
            $user=Auth::user();
            $user->name=$request['Name'];

            $user->email=$request['Email'];

            $user->save();
            return redirect('/');


        }
            $user = Auth::user();
            return view('blog-home.update_user', compact('user'));


        }

}

