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
     * @param   int $page
     * @return  PromiseInterface|Response
     */
    public function index($page = 1): PromiseInterface|Response
    {
        return $this->http->get(route('api.posts.index'), ['page' => $page]);
    }

    /**
     * @param   PostRequest $request
     * @return  PromiseInterface|Response
     */
    public function store(PostRequest $request): PromiseInterface|Response
    {
        return $this->http->post(route('api.posts.store'), $request);
    }

    /**
     * @param   Post $post
     * @return  PromiseInterface|Response
     */
    public function show(Post $post): PromiseInterface|Response
    {
        return $this->http->get(route('api.posts.show', $post));
    }

    /**
     * @param   PostRequest $request
     * @param   Post $post
     * @return  PromiseInterface|Response
     */
    public function update(PostRequest $request, Post $post): PromiseInterface|Response
    {
        return $this->http->put(route('api.posts.update', $post), $request);
    }

    /**
     * @param   Post $post
     * @return  PromiseInterface|Response
     */
    public function destroy(Post $post): PromiseInterface|Response
    {
        return $this->http->delete(route('api.posts.destroy', $post));
    }
}
