@extends('layout')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-gray-900">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover opacity-60" src="{{ asset('images/about-image02.jpg') }}" alt="Construction Site">
            <div class="absolute inset-0 bg-gradient-to-r from-gray-900 to-transparent"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 py-24 text-white">
            <h1 class="text-4xl font-bold">About Us</h1>
            <p class="mt-4 text-lg">Building trust, quality, and excellence in every project we undertake.</p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="py-16 px-6 lg:px-20 max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-800">Who We Are</h2>
                <p class="mt-4 text-gray-600">
                    Inance Construction is a full-service construction company delivering top-tier residential, commercial, and industrial projects. Our commitment to craftsmanship and transparency has earned us a trusted name in the industry.
                </p>
                <p class="mt-2 text-gray-600">
                    With a team of seasoned professionals, we ensure every project is delivered with precision, on time, and within budget.
                </p>
            </div>
            <div>
                <img src="{{ asset('images/image02.jpg') }}" alt="Our Team" class="rounded-xl shadow-lg">
            </div>
        </div>
    </div>

    <!-- Values Section -->
    <div class="bg-gray-100 py-16">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-2xl font-semibold text-gray-800 mb-10">Our Core Values</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition">
                    <h3 class="text-xl font-bold text-blue-600 mb-2">Integrity</h3>
                    <p class="text-gray-600">We prioritize honesty and fairness in every relationship and decision.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition">
                    <h3 class="text-xl font-bold text-blue-600 mb-2">Quality</h3>
                    <p class="text-gray-600">Delivering superior results using the best materials and practices.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition">
                    <h3 class="text-xl font-bold text-blue-600 mb-2">Innovation</h3>
                    <p class="text-gray-600">We adapt and innovate to meet modern construction challenges.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
