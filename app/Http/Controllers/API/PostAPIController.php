<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Services\API\PostAPIService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PostAPIController extends Controller
{
    /**
     * @var     PostAPIService
     */
    protected PostAPIService $postAPIService;

    /**
     * PostAPIController constructor.
     * @param   PostAPIService $postAPIService
     */
    public function __construct(PostAPIService $postAPIService)
    {
        $this->postAPIService = $postAPIService;
    }

    /**
     * Display a listing of the resource.
     *
     * @param   $page
     * @return  JsonResponse
     */
    public function index($page = 1): JsonResponse
    {
        return $this->postAPIService->index($page);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param   PostRequest $request
     * @return  JsonResponse
     */
    public function store(PostRequest $request): JsonResponse
    {
        return $this->postAPIService->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param   Post $post
     * @return  JsonResponse
     */
    public function show(Post $post): JsonResponse
    {
        return $this->postAPIService->show($post);
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
        return $this->postAPIService->update($request, $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param   Post $post
     * @return  JsonResponse
     */
    public function destroy(Post $post): JsonResponse
    {
        return $this->postAPIService->destroy($post);
    }
}
