@extends('layouts.main')

@section('title', 'Users')

@section('section')
    <example-component></example-component>
    @forelse ($users as $user)
        <p>{{ $user->name }}</p>
        @empty
        <p>No user found</p>
    @endforelse
@endsection

@section('footerScripts')
    @parent
@endsection
