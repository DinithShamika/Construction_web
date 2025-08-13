@extends('layout')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-green-600 to-green-800 py-20">
        <div class="max-w-7xl mx-auto px-6 text-center text-white">
            <h1 class="text-5xl font-bold mb-4">Certifications & Licenses</h1>
            <p class="text-xl text-green-100">Trusted, certified, and fully licensed construction company</p>
        </div>
    </div>

    <!-- Certifications Grid -->
    <div class="py-20 px-6 max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- License 1 -->
            <div class="bg-white rounded-2xl shadow-xl p-8 text-center border-2 border-green-100">
                <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">General Contractor License</h3>
                <p class="text-gray-600 mb-4">License #GC-2024-001</p>
                <p class="text-sm text-gray-500">Valid through December 2025</p>
            </div>

            <!-- License 2 -->
            <div class="bg-white rounded-2xl shadow-xl p-8 text-center border-2 border-blue-100">
                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Commercial Building Permit</h3>
                <p class="text-gray-600 mb-4">Permit #CB-2024-789</p>
                <p class="text-sm text-gray-500">Valid through March 2026</p>
            </div>

            <!-- Certification 1 -->
            <div class="bg-white rounded-2xl shadow-xl p-8 text-center border-2 border-orange-100">
                <div class="w-20 h-20 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">LEED Certified Professional</h3>
                <p class="text-gray-600 mb-4">Green Building Council</p>
                <p class="text-sm text-gray-500">Certified since 2020</p>
            </div>

            <!-- Insurance 1 -->
            <div class="bg-white rounded-2xl shadow-xl p-8 text-center border-2 border-purple-100">
                <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">General Liability Insurance</h3>
                <p class="text-gray-600 mb-4">$2M Coverage</p>
                <p class="text-sm text-gray-500">Policy #GL-2024-456</p>
            </div>

            <!-- Insurance 2 -->
            <div class="bg-white rounded-2xl shadow-xl p-8 text-center border-2 border-red-100">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Workers' Compensation</h3>
                <p class="text-gray-600 mb-4">Full Coverage</p>
                <p class="text-sm text-gray-500">Policy #WC-2024-123</p>
            </div>

            <!-- Certification 2 -->
            <div class="bg-white rounded-2xl shadow-xl p-8 text-center border-2 border-teal-100">
                <div class="w-20 h-20 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">OSHA Safety Certified</h3>
                <p class="text-gray-600 mb-4">30-Hour Construction</p>
                <p class="text-sm text-gray-500">Renewed annually</p>
            </div>

        </div>
    </div>

    <!-- Trust Section -->
    <div class="bg-gray-50 py-20">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Why Choose Licensed Professionals?</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Quality Assurance</h3>
                    <p class="text-gray-600">All work meets industry standards and building codes</p>
                </div>
                <div>
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Full Protection</h3>
                    <p class="text-gray-600">Comprehensive insurance coverage for your peace of mind</p>
                </div>
                <div>
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Professional Service</h3>
                    <p class="text-gray-600">Certified professionals with proven expertise</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection