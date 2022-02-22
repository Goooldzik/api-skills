<?php


namespace App\Services\API;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PostService
{
    /**
     * @var     PendingRequest
     */
    protected $http;

    /**
     * PostService constructor.
     */
    public function __construct()
    {
        $this->http = Http::withHeaders(['Accept' => 'application/json']);
    }

    /**
     * @param   Request $request
     * @return  PromiseInterface|Response
     */
    public function getAllPosts(Request $request): PromiseInterface|Response
    {
        return $this->http->get(route('api.posts.index'), ['page' => $request->get('page')]);
    }

    /**
     * @param   PostRequest $request
     * @return  PromiseInterface|Response
     */
    public function storeNewPost(PostRequest $request): PromiseInterface|Response
    {
        return $this->http->post(route('api.posts.store'), $request);
    }

    /**
     * @param   Post $post
     * @return  PromiseInterface|Response
     */
    public function getPost(Post $post): PromiseInterface|Response
    {
        return $this->http->get(route('api.posts.show', $post));
    }

    /**
     * @param   PostRequest $request
     * @param   Post $post
     * @return  PromiseInterface|Response
     */
    public function updatePost(PostRequest $request, Post $post): PromiseInterface|Response
    {
        return $this->http->put(route('api.posts.update', $post), $request);
    }

    /**
     * @param   Post $post
     * @return  PromiseInterface|Response
     */
    public function destroyPost(Post $post): PromiseInterface|Response
    {
        return $this->http->delete(route('api.posts.destroy', $post));
    }
}
