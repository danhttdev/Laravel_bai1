<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class PostController extends Controller
{
    public function view($id)
    {
    	$posts_link = App\Post::all();
    	$post = App\Post::find($id);
    	$comments = App\Post::find($id)->comments;
    	return view('post.view',['post'=> $post, 'comments'=>$comments, 'posts_link'=>$posts_link]);
    }
}
