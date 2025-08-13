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
            @if(session('success'))
                <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif
            
            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Full Name</label>
                    <input type="text" name="name" value="{{ auth()->check() ? auth()->user()->name : old('name') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Email Address</label>
                    <input type="email" name="email" value="{{ auth()->check() ? auth()->user()->email : old('email') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Project Type</label>
                    <select name="project_type" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                        <option value="">Select Project Type</option>
                        <option value="residential">Residential Construction</option>
                        <option value="commercial">Commercial Construction</option>
                        <option value="renovation">Renovation</option>
                        <option value="consultation">Consultation</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Message</label>
                    <textarea name="message" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="Tell us about your project...">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-bold py-3 rounded-lg transition duration-300 shadow-lg">
                    Send Message
                </button>
            </form>
            
            @guest
                <div class="mt-6 text-center p-4 bg-blue-50 rounded-lg">
                    <p class="text-blue-700">
                        <a href="{{ route('register') }}" class="font-semibold hover:underline">Create an account</a> 
                        to track your inquiries and get faster responses!
                    </p>
                </div>
            @endguest
        </div>
    </div>
</div>
@endsection
