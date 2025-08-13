@extends('layout')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Header -->
    <div class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <h1 class="text-3xl font-bold text-gray-900">Customer Dashboard</h1>
            <p class="text-gray-600 mt-1">Welcome back, {{ Auth::user()->name }}!</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Profile Card -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="flex items-center space-x-4">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">{{ Auth::user()->name }}</h3>
                        <p class="text-gray-600">{{ Auth::user()->email }}</p>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="{{ route('profile.edit') }}" class="text-blue-600 hover:text-blue-800 font-medium">
                        Edit Profile →
                    </a>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Quick Actions</h3>
                <div class="space-y-3">
                    <a href="{{ route('contact') }}" class="block w-full bg-blue-50 hover:bg-blue-100 text-blue-700 px-4 py-3 rounded-lg transition">
                        Request Quote
                    </a>
                    <a href="{{ route('services') }}" class="block w-full bg-green-50 hover:bg-green-100 text-green-700 px-4 py-3 rounded-lg transition">
                        View Services
                    </a>
                </div>
            </div>

            <!-- Account Status -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Account Status</h3>
                <div class="space-y-3">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Member Since:</span>
                        <span class="font-medium">{{ Auth::user()->created_at->format('M Y') }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Status:</span>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-sm font-medium">Active</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Welcome to Inance Construction</h3>
            <div class="prose text-gray-600">
                <p>Thank you for joining our construction community! Here you can:</p>
                <ul class="mt-4 space-y-2">
                    <li>• Request quotes for your construction projects</li>
                    <li>• View our comprehensive services</li>
                    <li>• Contact our team directly</li>
                    <li>• Manage your profile and preferences</li>
                </ul>
                <div class="mt-6">
                    <a href="{{ route('contact') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition">
                        Get Started with a Quote
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection