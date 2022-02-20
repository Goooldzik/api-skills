<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\PostService;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    protected PostService $postService;

    /**
     * PostController constructor.
     * @param   PostService $postService
     */
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return  View
     */
    public function index(): View
    {
        return $this->postService->index();
    }

    /**
     * Display the specified resource.
     *
     * @param   Post $post
     * @return  View
     */
    public function show(Post $post): View
    {
        return $this->postService->show($post);
    }
}
