@extends('layouts.app')

@section('content')
    <div class="row mb-3 py-2">
        <div class="col-sm-12">
            <table class="table table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">{{ __('Name') }}</th>
                        <th scope="col">{{ __('Created at') }}</th>
                        <th scope="col">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->getCreatedAt() }}</td>
                            <td>
                                <a href="{{ route('users.show', $user) }}">{{ __('Go to profile') }}</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $users->links() }}

        </div>
    </div>
@endsection
