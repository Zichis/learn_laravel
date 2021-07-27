@extends('layouts.main')

@section('title', 'Users')

@section('section')
    <div class="p-5">
        <button class="py-1 px-3 bg-blue-500 text-white rounded hover:bg-blue-600">Click</button>
        <p>{{ $users->count() }} {{ Illuminate\Support\Str::plural('user', $users->count()) }}</p>
        @forelse ($users as $user)
            <p>{{ $user->name }}</p>
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
