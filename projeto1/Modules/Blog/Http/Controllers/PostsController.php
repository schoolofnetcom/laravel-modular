<?php

namespace Son\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Son\Blog\Entities\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('blog::index', compact('posts'));
    }
}
