@extends('layout')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-slate-900 py-20">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="relative max-w-7xl mx-auto px-6 text-center text-white">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Our Construction Services</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">Comprehensive construction solutions for residential, commercial, and industrial projects</p>
        </div>
    </div>

    <!-- Services Grid -->
    <div class="py-20 px-6 max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Residential Construction -->
            <a href="{{ route('services.residential') }}" class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden block">
                <div class="h-48 bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Residential Construction</h3>
                    <p class="text-gray-600 mb-4">Custom homes, apartments, and residential complexes built to your specifications.</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• Single-family homes</li>
                        <li>• Multi-family housing</li>
                        <li>• Custom luxury homes</li>
                    </ul>
                </div>
            </a>

            <!-- Commercial Construction -->
            <a href="{{ route('services.commercial') }}" class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden block">
                <div class="h-48 bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Commercial Construction</h3>
                    <p class="text-gray-600 mb-4">Office buildings, retail spaces, and commercial facilities for businesses.</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• Office buildings</li>
                        <li>• Retail centers</li>
                        <li>• Warehouses</li>
                    </ul>
                </div>
            </a>

            <!-- Industrial Construction -->
            <a href="{{ route('services.industrial') }}" class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden block">
                <div class="h-48 bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Industrial Construction</h3>
                    <p class="text-gray-600 mb-4">Manufacturing facilities, factories, and specialized industrial structures.</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• Manufacturing plants</li>
                        <li>• Processing facilities</li>
                        <li>• Storage facilities</li>
                    </ul>
                </div>
            </a>

            <!-- Renovation & Remodeling -->
            <a href="{{ route('services.renovation') }}" class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden block">
                <div class="h-48 bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a1 1 0 01-1-1V9a1 1 0 011-1h1a2 2 0 100-4H4a1 1 0 01-1-1V5a1 1 0 011-1h3a1 1 0 001-1V4z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Renovation & Remodeling</h3>
                    <p class="text-gray-600 mb-4">Transform existing spaces with modern upgrades and improvements.</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• Kitchen remodeling</li>
                        <li>• Bathroom renovation</li>
                        <li>• Home additions</li>
                    </ul>
                </div>
            </a>

            <!-- Infrastructure Development -->
            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden">
                <div class="h-48 bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Infrastructure Development</h3>
                    <p class="text-gray-600 mb-4">Roads, bridges, utilities, and public infrastructure projects.</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• Road construction</li>
                        <li>• Bridge building</li>
                        <li>• Utility installation</li>
                    </ul>
                </div>
            </div>

            <!-- Project Management -->
            <a href="{{ route('services.project-management') }}" class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden block">
                <div class="h-48 bg-gradient-to-br from-teal-500 to-teal-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Project Management</h3>
                    <p class="text-gray-600 mb-4">Complete project oversight from planning to completion.</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• Planning & design</li>
                        <li>• Timeline management</li>
                        <li>• Quality control</li>
                    </ul>
                </div>
            </a>

            <!-- Consulting Services -->
            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden">
                <div class="h-48 bg-gradient-to-br from-indigo-500 to-indigo-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Consulting Services</h3>
                    <p class="text-gray-600 mb-4">Expert advice and consultation for your construction needs.</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• Feasibility studies</li>
                        <li>• Cost estimation</li>
                        <li>• Technical advice</li>
                    </ul>
                </div>
            </div>

            <!-- Maintenance Services -->
            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden">
                <div class="h-48 bg-gradient-to-br from-yellow-500 to-yellow-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Maintenance Services</h3>
                    <p class="text-gray-600 mb-4">Ongoing maintenance and repair services for all construction types.</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• Preventive maintenance</li>
                        <li>• Emergency repairs</li>
                        <li>• Regular inspections</li>
                    </ul>
                </div>
            </div>

            <!-- Green Building -->
            <a href="{{ route('services.green-building') }}" class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden block">
                <div class="h-48 bg-gradient-to-br from-emerald-500 to-emerald-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Green Building Solutions</h3>
                    <p class="text-gray-600 mb-4">Sustainable and eco-friendly construction practices and materials.</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• LEED certification</li>
                        <li>• Solar installations</li>
                        <li>• Energy-efficient design</li>
                    </ul>
                </div>
            </a>

        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-800 py-16">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Ready to Start Your Project?
            </h2>
            <p class="text-xl text-blue-100 mb-8">
                Contact us today for a free consultation and quote
            </p>
            <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 bg-white text-blue-600 font-semibold rounded-full hover:bg-gray-100 transition-colors duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                Get Free Quote
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
@endsection