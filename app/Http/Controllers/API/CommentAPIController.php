<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Post;
use App\Services\API\CommentAPIService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CommentAPIController extends Controller
{
    /**
     * @var     CommentAPIService
     */
    protected CommentAPIService $commentAPIService;

    /**
     * CommentAPIController constructor.
     * @param   CommentAPIService $commentAPIService
     */
    public function __construct(CommentAPIService $commentAPIService)
    {
        $this->commentAPIService = $commentAPIService;
    }

    /**
     * Display a listing of the resource.
     *
     * @param   $page
     * @return  JsonResponse
     */
    public function index($page = 1): JsonResponse
    {
        return $this->commentAPIService->index($page);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param   CommentRequest $request
     * @param   Post $post
     * @return  JsonResponse
     */
    public function store(CommentRequest $request, Post $post): JsonResponse
    {
        return $this->commentAPIService->store($request, $post);
    }

    /**
     * Display the specified resource.
     *
     * @param   Comment $comment
     * @return  JsonResponse
     */
    public function show(Comment $comment): JsonResponse
    {
        return $this->commentAPIService->show($comment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param   CommentRequest $request
     * @param   Comment $comment
     * @return  JsonResponse
     */
    public function update(CommentRequest $request, Comment $comment): JsonResponse
    {
        return $this->commentAPIService->update($request, $comment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param   Comment $comment
     * @return  JsonResponse
     */
    public function destroy(Comment $comment): JsonResponse
    {
        return $this->commentAPIService->destroy($comment);
    }
}
