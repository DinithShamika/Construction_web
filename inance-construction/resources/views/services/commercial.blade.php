@extends('layout')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-green-600 to-green-800 py-20">
        <div class="max-w-7xl mx-auto px-6 text-center text-white">
            <h1 class="text-5xl font-bold mb-4">Commercial Construction</h1>
            <p class="text-xl text-green-100">Professional spaces that drive business success</p>
        </div>
    </div>

    <!-- Service Details -->
    <div class="py-20 px-6 max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-16 items-center mb-16">
            <div>
                <img src="{{ asset('images/image02.jpg') }}" alt="Commercial Construction" class="rounded-2xl shadow-2xl">
            </div>
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Business-Focused Construction</h2>
                <p class="text-lg text-gray-600 mb-6">We understand that commercial spaces need to be functional, efficient, and impressive. Our team delivers projects on time and within budget while maintaining the highest quality standards.</p>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-center"><span class="w-2 h-2 bg-green-600 rounded-full mr-3"></span>Fast-track construction methods</li>
                    <li class="flex items-center"><span class="w-2 h-2 bg-green-600 rounded-full mr-3"></span>Code compliance expertise</li>
                    <li class="flex items-center"><span class="w-2 h-2 bg-green-600 rounded-full mr-3"></span>Sustainable building practices</li>
                    <li class="flex items-center"><span class="w-2 h-2 bg-green-600 rounded-full mr-3"></span>Minimal business disruption</li>
                </ul>
            </div>
        </div>

        <!-- Services Grid -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Office Buildings</h3>
                <p class="text-gray-600">Modern office spaces designed for productivity and employee satisfaction.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Retail Centers</h3>
                <p class="text-gray-600">Shopping centers and retail spaces that attract customers and drive sales.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Warehouses</h3>
                <p class="text-gray-600">Efficient storage and distribution facilities built for operational excellence.</p>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <div class="bg-green-600 py-16">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h2 class="text-3xl font-bold text-white mb-4">Ready to Expand Your Business?</h2>
            <a href="{{ route('contact') }}" class="bg-white text-green-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition">Get Project Quote</a>
        </div>
    </div>
</div>
@endsection