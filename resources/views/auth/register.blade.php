@extends('layouts.layout')


@section('content')



<div class="flex justify-center items-center mt-20 text-black">
    <div class="bg-grey w-4/12 p-6 rounded-lg">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <h2 class="text-white text-3xl font-semibold text-center mb-6">Register</h2>

            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" placeholder="Your name" class="w-full rounded-lg p-3 border-2 @error('name') border-red-500 @enderror" value="{{ old('name') }}">

                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror

            </div>
            
            <div class="mb-4">
                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" id="username" placeholder="Your username" class="w-full rounded-lg p-3 border-2  @error('username') border-red-500 @enderror" value="{{ old('username') }}">

                @error('username')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="text" name="email" id="email" placeholder="Your email" class="w-full rounded-lg p-3 border-2 @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Your password" class="w-full rounded-lg p-3 border-2 @error('password') border-red-500 @enderror" value="{{ old('password') }}">

                @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="sr-only">Password again</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" class="w-full rounded-lg p-3 border-2 @error('password_confirmation') border-red-500 @enderror" value="{{ old('password_confirmation') }}">

                @error('password_confirmation')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <input type="submit" class="w-full rounded-lg p-3 bg-orangee text-white cursor-pointer">

        </form>
    </div>
</div>












@endsection