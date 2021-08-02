@extends('layouts.main')

@section('title', 'Users')

@section('section')
    <div class="p-5">
        <a href="{{ route('users.create') }}" class="px-3 py-2 bg-blue-500 text-white hover:bg-blue-600 rounded">Add User</a>
        @forelse ($users as $user)
            <div class="p-2 my-3 shadow-lg rounded bg-white">
                <p>{{ $user->name }}</p>
            </div>
        @empty
            <p>No user found</p>
        @endforelse
        <div>
            {{ $users->links() }}
        </div>
    </div>
@endsection

@section('footerScripts')
    @parent
@endsection
