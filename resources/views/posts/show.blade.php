@extends('layouts.app')

@section('content')
    <div class="row mb-3 py-2">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">{{ $post->title }}</div>
                <div class="card-body">{{ $post->content }}</div>
                <div class="card-footer">{{ $post->getCreatedAt() }}</div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12">
            <h4>{{ __('Comments') }}</h4>
        </div>

        <div class="col-sm-12">
            @foreach($comments as $comment)
                <div class="card mb-3">
                    <div class="card-header">{{ $comment->author }}</div>
                    <div class="card-body">{{ $comment->content }}</div>
                    <div class="card-footer">{{ $comment->getCreatedAt() }}</div>
                </div>
            @endforeach

            {{ $comments->links() }}

        </div>
    </div>
@endsection
