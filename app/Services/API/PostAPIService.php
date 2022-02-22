<?php


namespace App\Services\API;


use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\JsonResponse;

class PostAPIService
{
    /**
     * Display a listing of the resource.
     *
     * @param   $page
     * @return  JsonResponse
     */
    public function index($page): JsonResponse
    {
        return response()->json([
            'success'   =>    true,
            'posts'     =>    PostResource::collection(Post::paginate(15))
        ])->setStatusCode(200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param   PostRequest $request
     * @return  JsonResponse
     */
    public function store(PostRequest $request): JsonResponse
    {

        Post::create($request->validated());

        return response()->json([
            'success'   =>    true,
            'message'   =>    'Successful added post'
        ])->setStatusCode(201);

    }

    /**
     * Display the specified resource.
     *
     * @param   Post $post
     * @return  JsonResponse
     */
    public function show(Post $post): JsonResponse
    {
        return response()->json([
            'success'  =>    true,
            'post'     =>    new PostResource($post)
        ])->setStatusCode(200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param   PostRequest $request
     * @param   Post $post
     * @return  JsonResponse
     */
    public function update(PostRequest $request, Post $post): JsonResponse
    {
        $post->update($request->validated());

        return response()->json([
            'success'   =>    true,
            'message'   =>    'Successful updated post'
        ])->setStatusCode(200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param   Post $post
     * @return  JsonResponse
     */
    public function destroy(Post $post): JsonResponse
    {
        $post->delete();

        return response()->json([
            'success'   =>    true,
            'message'   =>    'Successful deleted post'
        ])->setStatusCode(200);

    }
}
