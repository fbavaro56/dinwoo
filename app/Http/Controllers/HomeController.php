<?php

namespace App\Http\Controllers;

use App\Category;
use App\Destiny;
use App\Http\Requests;
use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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
        $posts = Post::all();
        foreach ($posts as $post){
            $post->category = Category::find($post->category_id);
            $post->destiny = Destiny::find($post->destiny_id);
        }


        return view('home')->with('posts',$posts);
    }


    public function savePost(Request $request){

        $this->validate($request, [
            'title' => 'required|unique:posts',
            'img' => 'required|mimes:jpg,jpeg,png',
            'key_words' => 'required|max:255',
            'created_at' => 'required|unique:posts',
            'desc' => 'required',
            'content' => 'required|unique:posts'
        ]);

        $img_name = 'img_'.rand(1,99999);

        $img = Image::make($request->file('img'));
        $img->fit(800,500);
        $img->save('uploads/'.$img_name.'.jpg');


        $post = new Post();
        $post->title = $request->input('title');
        $post->img = $img_name.'.jpg';
        $post->key_words = $request->input('key_words');
        $post->created_at = $request->input('created_at');
        $post->desc = $request->input('desc');
        $post->content = $request->input('content');
        $post->category_id = $request->input('category_id');
        $post->destiny_id = $request->input('destiny_id');
        $post->save();

//        return $post;

        return redirect('/home');


    }


    public function deletePost($post_id){
        Post::find($post_id)->delete();
        return redirect('/home');
    }
}
