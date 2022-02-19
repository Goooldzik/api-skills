@extends('layouts.app')

@section('content')
    <div class="row mb-3 py-2">
        <div class="col-sm-12">
            <h4>{{ __('Profile') }}: {{ $user->name }}</h4>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12">
            <p>{{ __('Created at') }} {{ $user->getCreatedAt() }}</p>
            <p>{{ __('Contact') }}: {{ $user->email }}</p>
        </div>
    </div>
@endsection
