@extends('layouts.layout')


@section('content')



<div class="flex justify-center items-center mt-20 text-black">
    <div class="bg-grey w-4/12 p-6 rounded-lg">
        <form action="{{ route('login') }}" method="post">
            @csrf
            
            @if(session('status'))
                <div class="w-full rounded-lg p-3 bg-red-500 text-white text-center mb-3">
                    {{ session('status') }}
                </div>
            @endif
         
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


            <input type="submit" value="Log In" class="w-full rounded-lg p-3 bg-orangee text-white cursor-pointer">

        </form>
    </div>
</div>












@endsection