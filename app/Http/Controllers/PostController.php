<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  View
     */
    public function index(): View
    {
        return view('posts.index', [
            'posts' => Post::orderBy('id', 'desc')->paginate(15)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param   Post $post
     * @return  View
     */
    public function show(Post $post): View
    {
        return view('posts.show', [
            'post' => $post,
            'comments' => $post->comments()->paginate(15)
        ]);
    }
}
