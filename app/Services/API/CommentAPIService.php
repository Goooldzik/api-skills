<?php


namespace App\Services\API;


use App\Http\Requests\CommentRequest;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\JsonResponse;

class CommentAPIService
{
    /**
     * Display a listing of the resource.
     *
     * @param   $page
     * @return  JsonResponse
     */
    public function index($page = 1): JsonResponse
    {
        return response()->json([
            'success'   =>    true,
            'comments'  =>    CommentResource::collection(Comment::paginate(15))
        ])->setStatusCode(200);
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
        $post->comments()->create($request->validated());

        return response()->json([
            'success'   =>    true,
            'message'   =>    'Successful added comment'
        ])->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     *
     * @param   Comment $comment
     * @return  JsonResponse
     */
    public function show(Comment $comment): JsonResponse
    {
        return response()->json([
            'success'   =>    true,
            'comment'   =>    new CommentResource($comment)
        ])->setStatusCode(200);
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
        $comment->update($request->validated());

        return response()->json([
            'success'   =>    true,
        ])->setStatusCode(200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param   Comment $comment
     * @return  JsonResponse
     */
    public function destroy(Comment $comment): JsonResponse
    {
        $comment->delete();

        return response()->json([
            'success'   =>    true,
        ])->setStatusCode(200);
    }
}
