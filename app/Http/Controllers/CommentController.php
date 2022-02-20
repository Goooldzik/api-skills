<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Services\CommentService;
use Illuminate\Contracts\View\View;

class CommentController extends Controller
{
    /**
     * @var     CommentService
     */
    protected CommentService $commentService;

    /**
     * CommentController constructor.
     * @param   CommentService $commentService
     */
    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return  View
     */
    public function index(): View
    {
        return $this->commentService->index();
    }

    /**
     * Display the specified resource.
     *
     * @param   Comment $comment
     * @return  View
     */
    public function show(Comment $comment): View
    {
        return $this->commentService->show($comment);
    }
}
