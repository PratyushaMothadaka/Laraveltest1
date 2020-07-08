<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show($user)
    {
        //echo "<h1> About User </h1>";
        $users=[
            'user1'=>'I am called as the ADMIN',
            'user2'=>'I am called as the end User'
        ];
        /*if(!array_key_exists($user,$users))
        {
            abort(404,'We only have two users');
        }*/
        return view('user',[
            'user'=>$users[$user] ?? 'OOPS!! Sorry No user found.'
        ]);
    }
}
