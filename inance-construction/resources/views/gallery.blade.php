@extends('layout')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-orange-600 to-orange-800 py-20">
        <div class="max-w-7xl mx-auto px-6 text-center text-black">
            <h1 class="text-5xl font-bold mb-4">Project Gallery</h1>
            <p class="text-xl text-orange-100">See our construction transformations</p>
        </div>
    </div>

    <!-- Before/After Gallery -->
    <div class="py-20 px-6 max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12">
            
            <!-- Project 1 -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="grid grid-cols-2">
                    <div class="relative">
                        <img src="{{ asset('images/image01.jpg') }}" alt="Before" class="w-full h-64 object-cover">
                        <div class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">BEFORE</div>
                    </div>
                    <div class="relative">
                        <img src="{{ asset('images/image02.jpg') }}" alt="After" class="w-full h-64 object-cover">
                        <div class="absolute top-4 right-4 bg-green-600 text-white px-3 py-1 rounded-full text-sm font-semibold">AFTER</div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Modern Home Renovation</h3>
                    <p class="text-gray-600">Complete kitchen and living room transformation with modern finishes.</p>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="grid grid-cols-2">
                    <div class="relative">
                        <img src="{{ asset('images/image03.jpg') }}" alt="Before" class="w-full h-64 object-cover">
                        <div class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">BEFORE</div>
                    </div>
                    <div class="relative">
                        <img src="{{ asset('images/image04.jpg') }}" alt="After" class="w-full h-64 object-cover">
                        <div class="absolute top-4 right-4 bg-green-600 text-white px-3 py-1 rounded-full text-sm font-semibold">AFTER</div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Commercial Office Build</h3>
                    <p class="text-gray-600">Professional office space construction with modern amenities.</p>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="grid grid-cols-2">
                    <div class="relative">
                        <img src="{{ asset('images/image01.jpg') }}" alt="Before" class="w-full h-64 object-cover">
                        <div class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">BEFORE</div>
                    </div>
                    <div class="relative">
                        <img src="{{ asset('images/image02.jpg') }}" alt="After" class="w-full h-64 object-cover">
                        <div class="absolute top-4 right-4 bg-green-600 text-white px-3 py-1 rounded-full text-sm font-semibold">AFTER</div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Industrial Facility</h3>
                    <p class="text-gray-600">Large-scale industrial construction with advanced systems.</p>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="grid grid-cols-2">
                    <div class="relative">
                        <img src="{{ asset('images/image03.jpg') }}" alt="Before" class="w-full h-64 object-cover">
                        <div class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">BEFORE</div>
                    </div>
                    <div class="relative">
                        <img src="{{ asset('images/image04.jpg') }}" alt="After" class="w-full h-64 object-cover">
                        <div class="absolute top-4 right-4 bg-green-600 text-white px-3 py-1 rounded-full text-sm font-semibold">AFTER</div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Residential Complex</h3>
                    <p class="text-gray-600">Multi-unit residential development with modern design.</p>
                </div>
            </div>

        </div>
    </div>

    <!-- Customer Design Upload Section -->
    <div class="bg-gray-50 py-20">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-black-900 mb-6">Have Your Own Design?</h2>
            <p class="text-xl text-black-600 mb-8">Upload your drawings and let us bring your vision to life</p>
            <a href="{{ route('design.upload') }}" class="bg-orange-600 hover:bg-orange-700 text-black px-8 py-4 rounded-lg font-semibold transition shadow-lg">
                Upload Your Design
            </a>
        </div>
    </div>
</div>
@endsection