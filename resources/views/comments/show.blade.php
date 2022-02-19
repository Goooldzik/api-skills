@extends('layouts.app')

@section('content')
    <div class="row mb-3 py-2">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">{{ __('Author') }}: {{ $comment->author }}</div>
                <div class="card-body">
                    {{ $comment->content }}
                </div>
                <div class="card-footer">
                    {{ $comment->getCreatedAt() }} | <a href="{{ route('posts.show', $comment->post) }}">{{ __('Go to post') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
