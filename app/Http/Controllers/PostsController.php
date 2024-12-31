<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_feature', true)->get();
        $data = ['posts' => $posts];
        return view('admin.posts.index', $data);
    }

    public function show($id)
    {
        $data = [
            'id' => $id,
        ];

        return view('posts.show', $data);
    }
}
