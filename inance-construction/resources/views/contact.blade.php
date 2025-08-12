@extends('layout')

@section('content')
<!-- Hero Section with Background Image -->
<div class="relative bg-cover bg-center min-h-screen" style="background-image: url('{{ asset('images/image01.jpg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-70"></div>

    <div class="relative z-10 flex flex-col items-center justify-center min-h-screen px-6">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 text-center">Get in Touch With Us</h1>
        <p class="text-lg text-gray-200 mb-10 max-w-2xl text-center">
            We're here to answer your questions, provide consultations, and help turn your construction ideas into reality.
        </p>

        <!-- Contact Form -->
        <div class="w-full max-w-2xl bg-white rounded-lg shadow-lg p-8">
            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Full Name</label>
                    <input type="text" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Email Address</label>
                    <input type="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Message</label>
                    <textarea name="message" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg transition duration-300">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
