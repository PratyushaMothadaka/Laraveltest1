<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Loading the basic page*/
Route::get('/', function () {
    return view('welcome'); //views are connected
});
/* Returning a String*/
Route::get('/user',function(){
    return 'Welcome User'; //returning string value
});
/*returning an array*/
Route::get('/details',function(){
    return ['Name'=>'Pratyusha',
            'Employee ID'=>'305582'];
});
Route::get('/hi',function(){
    return view('hi');
});
/*When something is appeneded to the link*/
/*Route::get('/',function (){
    $name=request('name');
    return $name;
});*/
/*Sending the data to view*/
/*Route::get('/',function(){
    $name=request('name');
    return view('name',[
        'name'=>$name
    ]);
});*/

/*Routing Wildcards*/
Route::get('/posts/{post}',function($post){
    //return $post;
    $posts=[
        'post1'=>'Hey folks!! This is my first post.',
        'post2'=>'Hey folks!! This is my second post'
    ];
    if(!array_key_exists($post,$posts))
    {
        abort(404,'I have not posted yet!!');
    }
    return view('post',[
        'post' => $posts[$post] ?? 'I have not posted yet!'
    ]);
});

/*Using Controller*/
Route::get('/about/{user}','AboutController@show');

/*Accessing Database*/
Route::get('/emp/{empid}','EmpController@show');