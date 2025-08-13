@extends('layout')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-emerald-600 to-emerald-800 py-20">
        <div class="max-w-7xl mx-auto px-6 text-center text-white">
            <h1 class="text-5xl font-bold mb-4">Green Building Solutions</h1>
            <p class="text-xl text-emerald-100">Sustainable construction for a better future</p>
        </div>
    </div>

    <!-- Service Details -->
    <div class="py-20 px-6 max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-16 items-center mb-16">
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Eco-Friendly Construction</h2>
                <p class="text-lg text-gray-600 mb-6">We're committed to sustainable building practices that reduce environmental impact while creating healthier, more efficient spaces. Our green building solutions help you achieve LEED certification and long-term cost savings.</p>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-center"><span class="w-2 h-2 bg-emerald-600 rounded-full mr-3"></span>LEED certification expertise</li>
                    <li class="flex items-center"><span class="w-2 h-2 bg-emerald-600 rounded-full mr-3"></span>Renewable energy integration</li>
                    <li class="flex items-center"><span class="w-2 h-2 bg-emerald-600 rounded-full mr-3"></span>Sustainable material sourcing</li>
                    <li class="flex items-center"><span class="w-2 h-2 bg-emerald-600 rounded-full mr-3"></span>Water conservation systems</li>
                </ul>
            </div>
            <div>
                <img src="{{ asset('images/image02.jpg') }}" alt="Green Building" class="rounded-2xl shadow-2xl">
            </div>
        </div>

        <!-- Services Grid -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">LEED Certification</h3>
                <p class="text-gray-600">Complete LEED certification support from design through construction completion.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Solar Installations</h3>
                <p class="text-gray-600">Professional solar panel installation and renewable energy system integration.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Energy-Efficient Design</h3>
                <p class="text-gray-600">Advanced building systems designed to minimize energy consumption and costs.</p>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <div class="bg-emerald-600 py-16">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h2 class="text-3xl font-bold text-white mb-4">Ready to Build Green?</h2>
            <a href="{{ route('contact') }}" class="bg-white text-emerald-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition">Start Sustainable Project</a>
        </div>
    </div>
</div>
@endsection