@extends('layouts.main')

@section('section')
    <div class="p-5">
        <h1 class="text-2xl font-semibold">Create User</h1>
        <div class="w-full md:w-1/2 lg:w-1/3">
            {{--@if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif--}}
            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{--<div class="mb-2">
                    <input class="p-1 rounded border border-yellow-500 w-full" type="file" name="profile_picture" id="profile_picture" required>
                </div>--}}
                <div class="mb-2">
                    <input class="p-1 rounded border border-yellow-500 w-full" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Enter name">
                    @error('name')
                        <p class="text-red-500 text-sm">{{ $errors->first('name') }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <input class="p-1 rounded border border-yellow-500 w-full" type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Enter email">
                    @error('email')
                        <p class="text-red-500 text-sm">{{ $errors->first('email') }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <input class="p-1 rounded border border-yellow-500 w-full" type="password" name="password" id="password" placeholder="password">
                    @error('password')
                        <p class="text-red-500 text-sm">{{ $errors->first('password') }}</p>
                    @enderror
                </div>
                <button class="px-3 py-1 bg-green-600 text-white hover:bg-green-700 rounded" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection

@section('footerScripts')
    @parent
@endsection
