<?php


namespace App\Services\API;


use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Post;
use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class CommentService
{
    /**
     * @var     PendingRequest
     */
    protected $http;

    /**
     * CommentService constructor.
     */
    public function __construct()
    {
        $this->http = Http::withHeaders(['Accept' => 'application/json']);
    }

    /**
     * @return  PromiseInterface|Response
     */
    public function getAllComments(): PromiseInterface|Response
    {
        return $this->http->get(route('api.comments.index'));
    }

    /**
     * @param   CommentRequest $request
     * @param   Post $post
     * @return  PromiseInterface|Response
     */
    public function storeNewComment(CommentRequest $request, Post $post): PromiseInterface|Response
    {
        return $this->http->post(route('api.comments.store', $post), $request);
    }

    /**
     * @param   Comment $comment
     * @return  PromiseInterface|Response
     */
    public function getComment(Comment $comment): PromiseInterface|Response
    {
        return $this->http->get(route('api.comments.show', $comment));
    }

    /**
     * @param   CommentRequest $request
     * @param   Comment $comment
     * @return  PromiseInterface|Response
     */
    public function updateComment(CommentRequest $request, Comment $comment): PromiseInterface|Response
    {
        return $this->http->put(route('api.comments.update', $comment), $request);
    }

    /**
     * @param   Comment $comment
     * @return  PromiseInterface|Response
     */
    public function destroyComment(Comment $comment): PromiseInterface|Response
    {
        return $this->http->delete(route('api.comments.destroy', $comment));
    }
}
