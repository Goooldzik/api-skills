<?php


namespace App\Services\API;


use App\Http\Requests\PostRequest;
use App\Models\Post;
use Exception;
use Illuminate\Http\JsonResponse;

class PostAPIService
{
    /**
     * Display a listing of the resource.
     *
     * @return  JsonResponse
     */
    public function index(): JsonResponse
    {
        try {

            return response()->json([
                'status'    =>    'success',
                'posts'     =>    Post::paginate(15)
            ])->setStatusCode(200);

        } catch (Exception $exception) {

            return response()->json([
                'status'    =>    'error',
                'message'   =>    $exception->getMessage()
            ])->setStatusCode(500);

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param   PostRequest $request
     * @return  JsonResponse
     */
    public function store(PostRequest $request): JsonResponse
    {
        try {

            Post::create($request->validated());

            return response()->json([
                'status'    =>    'success',
                'message'   =>    'Successful added post'
            ])->setStatusCode(200);

        } catch (Exception $exception) {

            return response()->json([
                'status'    =>    'error',
                'message'   =>    $exception->getMessage()
            ])->setStatusCode(500);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param   Post $post
     * @return  JsonResponse
     */
    public function show(Post $post): JsonResponse
    {
        try {

            return response()->json([
                'status'   =>   'success',
                'post'     =>   $post
            ])->setStatusCode(200);

        } catch (Exception $exception) {

            return response()->json([
                'status'    =>    'error',
                'message'   =>    $exception->getMessage()
            ])->setStatusCode(500);

        }
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
        try {

            $post->update($request->validated());

            return response()->json([
                'status'    =>    'success',
                'message'   =>    'Successful updated post'
            ])->setStatusCode(200);

        } catch (Exception $exception) {

            return response()->json([
                'status'    =>    'error',
                'message'   =>    $exception->getMessage()
            ])->setStatusCode(500);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param   Post $post
     * @return  JsonResponse
     */
    public function destroy(Post $post): JsonResponse
    {
        try {

            $post->delete();

            return response()->json([
                'status'    =>    'success',
                'message'   =>    'Successful deleted post'
            ])->setStatusCode(200);

        } catch (Exception $exception) {

            return response()->json([
                'status'    =>    'error',
                'message'   =>    $exception->getMessage()
            ])->setStatusCode(500);

        }
    }
}
