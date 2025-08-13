@extends('layout')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-slate-900 via-blue-900 to-slate-800 min-h-screen flex items-center">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover opacity-30" src="{{ asset('images/image01.jpg') }}" alt="Construction">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-900/80 via-blue-900/60 to-transparent"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-6 py-32">
            <div class="max-w-4xl">
                <h1 class="text-6xl md:text-7xl font-bold text-white mb-6 leading-tight">
                    Building Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-400">Dreams</span> Into Reality
                </h1>
                <p class="text-xl md:text-2xl text-blue-100 mb-8 max-w-2xl">
                    Professional construction services with 15+ years of experience. Quality, reliability, and excellence in every project.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}" class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-8 py-4 rounded-lg font-semibold hover:from-blue-700 hover:to-blue-800 transition duration-300 shadow-lg text-center">
                        Get Free Quote
                    </a>
                    <a href="{{ route('services') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-blue-900 transition duration-300 text-center">
                        View Services
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="py-16 bg-blue-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 text-center">
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="text-4xl font-bold text-blue-600 mb-2">500+</div>
                    <div class="text-gray-600">Projects Completed</div>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="text-4xl font-bold text-green-600 mb-2">15+</div>
                    <div class="text-gray-600">Years Experience</div>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="text-4xl font-bold text-orange-600 mb-2">100%</div>
                    <div class="text-gray-600">Client Satisfaction</div>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="text-4xl font-bold text-purple-600 mb-2">24/7</div>
                    <div class="text-gray-600">Support Available</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Preview -->
    <div class="py-20 px-6 max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Services</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Comprehensive construction solutions for all your needs</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition">
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Residential</h3>
                <p class="text-gray-600">Custom homes and residential projects built to perfection.</p>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition">
                <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Commercial</h3>
                <p class="text-gray-600">Office buildings and commercial spaces for your business.</p>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition">
                <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Industrial</h3>
                <p class="text-gray-600">Large-scale industrial and manufacturing facilities.</p>
            </div>
        </div>
        <div class="text-center mt-12">
            <a href="{{ route('services') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold transition">
                View All Services
            </a>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">Why Choose Inance Construction?</h2>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Expert Team</h3>
                                <p class="text-gray-600">Skilled professionals with decades of combined experience.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Quality Materials</h3>
                                <p class="text-gray-600">Only the finest materials and latest construction techniques.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">On-Time Delivery</h3>
                                <p class="text-gray-600">Projects completed on schedule and within budget.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <img src="{{ asset('images/image02.jpg') }}" alt="Construction Team" class="rounded-2xl shadow-2xl">
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-800 py-20">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Ready to Build Something Amazing?
            </h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Get started with a free consultation and discover how we can bring your construction vision to life.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition shadow-lg">
                    Get Free Consultation
                </a>
                @guest
                    <a href="{{ route('register') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">
                        Create Account
                    </a>
                @endguest
            </div>
        </div>
    </div>
</div>
@endsection