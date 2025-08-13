@extends('layout')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-blue-600 to-blue-800 py-20">
        <div class="max-w-7xl mx-auto px-6 text-center text-white">
            <h1 class="text-5xl font-bold mb-4">Residential Construction</h1>
            <p class="text-xl text-blue-100">Building dream homes with quality and precision</p>
        </div>
    </div>

    <!-- Service Details -->
    <div class="py-20 px-6 max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-16 items-center mb-16">
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Custom Home Construction</h2>
                <p class="text-lg text-gray-600 mb-6">We specialize in building custom homes that reflect your unique style and meet your family's needs. From initial design to final walkthrough, we ensure every detail exceeds your expectations.</p>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-center"><span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>Custom architectural design</li>
                    <li class="flex items-center"><span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>Premium materials and finishes</li>
                    <li class="flex items-center"><span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>Energy-efficient construction</li>
                    <li class="flex items-center"><span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>Smart home integration</li>
                </ul>
            </div>
            <div>
                <img src="{{ asset('images/image04.jpg') }}" alt="Residential Construction" class="rounded-2xl shadow-2xl">
            </div>
        </div>

        <!-- Services Grid -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Single Family Homes</h3>
                <p class="text-gray-600">Custom designed homes built to your specifications with attention to every detail.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Multi-Family Housing</h3>
                <p class="text-gray-600">Duplexes, townhomes, and apartment complexes designed for modern living.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Luxury Estates</h3>
                <p class="text-gray-600">High-end custom homes with premium materials and exclusive features.</p>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <div class="bg-blue-600 py-16">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h2 class="text-3xl font-bold text-white mb-4">Ready to Build Your Dream Home?</h2>
            <a href="{{ route('contact') }}" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition">Get Free Consultation</a>
        </div>
    </div>
</div>
@endsection