@extends('layouts.app')

@section('content')
    <div class="row mb-3 py-2">
        <div class="col-sm-12">
            <h4>{{ __('All comments') }}</h4>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12">
            @foreach($comments as $comment)
                <div class="card mb-3">
                    <div class="card-header">{{ __('Author') }}: {{ $comment->author }}</div>
                    <div class="card-body">
                        <a href="{{ route('comments.show', $comment) }}">
                            {{ $comment->content }}
                        </a>
                    </div>
                    <div class="card-footer">{{ $comment->getCreatedAt() }}</div>
                </div>
            @endforeach

            {{ $comments->links() }}

        </div>
    </div>
@endsection
