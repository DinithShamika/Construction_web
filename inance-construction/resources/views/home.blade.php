
@extends('layout')
@section('content')
<div class="text-center py-20 bg-gray-100">
    <h1 class="text-5xl font-bold text-blue-800">Welcome to Construction</h1>
    <p class="mt-4 text-xl text-gray-600">Building your vision with quality and trust.</p>
</div>

<!-- Example Hero Section -->
<section class="bg-cover bg-center h-96 text-white" style="background-image: url('/images/construction-hero.jpg');">
    <div class="h-full w-full bg-black bg-opacity-60 flex items-center justify-center">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold">Building the Future</h1>
            <p class="mt-4 text-lg">Reliable construction project management for every client.</p>
            <a href="{{ route('contact') }}" class="mt-6 inline-block bg-yellow-500 text-white px-6 py-3 rounded hover:bg-yellow-600 transition">Contact Us</a>
        </div>
    </div>
</section>
@endsection