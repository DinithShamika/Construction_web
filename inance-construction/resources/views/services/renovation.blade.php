@extends('layout')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-purple-600 to-purple-800 py-20">
        <div class="max-w-7xl mx-auto px-6 text-center text-white">
            <h1 class="text-5xl font-bold mb-4">Renovation & Remodeling</h1>
            <p class="text-xl text-purple-100">Transform your space into something extraordinary</p>
        </div>
    </div>

    <!-- Service Details -->
    <div class="py-20 px-6 max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-16 items-center mb-16">
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Complete Renovations</h2>
                <p class="text-lg text-gray-600 mb-6">Whether you're updating a single room or renovating your entire property, we bring fresh ideas and expert craftsmanship to every project. We work with your budget and timeline to deliver stunning results.</p>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-center"><span class="w-2 h-2 bg-purple-600 rounded-full mr-3"></span>3D design visualization</li>
                    <li class="flex items-center"><span class="w-2 h-2 bg-purple-600 rounded-full mr-3"></span>Permit handling</li>
                    <li class="flex items-center"><span class="w-2 h-2 bg-purple-600 rounded-full mr-3"></span>Quality material sourcing</li>
                    <li class="flex items-center"><span class="w-2 h-2 bg-purple-600 rounded-full mr-3"></span>Clean, organized work sites</li>
                </ul>
            </div>
            <div>
                <img src="{{ asset('images/image03.jpg') }}" alt="Renovation" class="rounded-2xl shadow-2xl">
            </div>
        </div>

        <!-- Services Grid -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Kitchen Remodeling</h3>
                <p class="text-gray-600">Modern kitchens designed for cooking, entertaining, and family gatherings.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Bathroom Renovation</h3>
                <p class="text-gray-600">Luxurious bathrooms that combine style, comfort, and functionality.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Home Additions</h3>
                <p class="text-gray-600">Expand your living space with seamlessly integrated additions.</p>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <div class="bg-purple-600 py-16">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h2 class="text-3xl font-bold text-white mb-4">Ready to Transform Your Space?</h2>
            <a href="{{ route('contact') }}" class="bg-white text-purple-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition">Start Your Renovation</a>
        </div>
    </div>
</div>
@endsection