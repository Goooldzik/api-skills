@extends('layouts.app')

@section('content')
    <div class="row mb-3 py-2">
        <div class="col-sm-12">
            <h4>{{ __('All posts') }}</h4>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12">
            @foreach($posts as $post)
                <div class="card mb-3">
                    <div class="card-header">{{ $post->author }}</div>
                    <div class="card-body">
                        <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                    </div>
                    <div class="card-footer">{{ $post->getCreatedAt() }} | {{ __('Comments') }}: {{ $post->comments()->count() }}</div>
                </div>
            @endforeach

            {{ $posts->links() }}

        </div>
    </div>
@endsection
