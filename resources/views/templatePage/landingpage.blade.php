@extends('layouts.layout')


@section('content')


<div class="container mx-auto w-cont1">
    <section class="bg-grey rounded-lg p-5 mt-5 ">
        <h2 class="mt-12 text-2xl font-normal">Landing Page</h2>
        
        @auth
        <h2 class="mt-12 text-2xl font-normal">Hello <span class="text-orangee">{{ auth()->user()->name }}</span></h2>
        @endauth

    </section>
</div>

@endsection