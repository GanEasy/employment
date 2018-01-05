<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
class PostController extends Controller
{
    //

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd(Post::all());
        return view('home');
    }

    public function create(){
        $post = new Post;
        $post->name = 'post name33';
        $post->intro = 'post content333';
//        $post->tag = [1,2,3];
        $post->tag = '{9,10,11}';

        //        $post->tag = "'[]'";
        echo $post->save();
    }

}
