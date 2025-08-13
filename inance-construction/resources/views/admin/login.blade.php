@extends('layout')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-900 to-blue-900 flex items-center justify-center py-12 px-4">
    <div class="max-w-md w-full">
        <!-- Header -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-white mb-2">Admin Login</h2>
            <p class="text-gray-300">Access admin dashboard</p>
        </div>

        <!-- Login Form -->
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <form method="POST" action="{{ route('admin.login.submit') }}" class="space-y-6">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                    <input id="password" type="password" name="password" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full bg-gradient-to-r from-gray-800 to-gray-900 text-white font-semibold py-3 rounded-lg hover:from-gray-900 hover:to-black transition duration-300 shadow-lg">
                    Admin Login
                </button>
            </form>

            <!-- Registration Link -->
            <div class="mt-6 text-center">
                <p class="text-gray-600 mb-2">Don't have an admin account?</p>
                <a href="{{ route('admin.register') }}" class="text-blue-600 hover:text-blue-800 font-medium">Create Admin Account</a>
            </div>
            
            <!-- Back Link -->
            <div class="mt-4 text-center">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-800 font-medium">
                    ← Back to Website
                </a>
            </div>
        </div>
    </div>
</div>
@endsection