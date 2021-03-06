<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Contracts\View\View;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  View
     */
    public function index(): View
    {
        return view('comments.index', [
            'comments' => Comment::orderBy('id', 'desc')->paginate(15)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param   Comment $comment
     * @return  View
     */
    public function show(Comment $comment): View
    {
        return view('comments.show', [
            'comment' => $comment
        ]);
    }
}
