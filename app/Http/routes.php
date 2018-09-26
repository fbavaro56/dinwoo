<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    $post = \Illuminate\Support\Facades\DB::table('posts')
        ->where('created_at','<',\Carbon\Carbon::now()->toDateTimeString())
        ->orderBy('created_at','desc')
        ->paginate(16);

    return view('welcome')->with('posts',$post);
});

Route::get('/posts/ver/{post_title}', function ($post_title) {

    $post = \App\Post::where('title','=',$post_title)->get()->last();
    return view('post_details')->with('post',$post);

});

Route::get('/posts/categoria/{category_name}', function ($category_name) {

    $category = \App\Category::where('name','=',$category_name)->get()->last();

    $post = \Illuminate\Support\Facades\DB::table('posts')
        ->where('created_at','<',\Carbon\Carbon::now()->toDateTimeString())
        ->where('category_id','=',$category->id)
        ->orderBy('created_at','desc')
        ->paginate(16);

    return view('welcome')->with('posts',$post);

});

Route::get('/posts/categoria/{category_name}/en/{destiny_name}', function ($category_name,$destiny_name) {

    $category = \App\Category::where('name','=',$category_name)->get()->last();
    $destiny = \App\Destiny::where('name','=',$destiny_name)->get()->last();

    $post = \Illuminate\Support\Facades\DB::table('posts')
        ->where('created_at','<',\Carbon\Carbon::now()->toDateTimeString())
        ->where('category_id','=',$category->id)
        ->where('destiny_id','=',$destiny->id)
        ->orderBy('created_at','desc')
        ->paginate(16);

    return view('welcome')->with('posts',$post);

});



Route::auth();

Route::get('/home', 'HomeController@index');

Route::post('post/save','HomeController@savePost');

Route::get('post/delete/{post_id}','HomeController@deletePost');
