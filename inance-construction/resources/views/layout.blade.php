<!DOCTYPE html>
<html>
<head>
    <title>Inance Construction</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-white text-gray-900">
    <nav class="bg-gradient-to-r from-blue-800 to-blue-900 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a href="{{ route('home') }}" class="font-bold text-2xl hover:text-blue-200 transition">
                    Inance Construction
                </a>
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="{{ route('about') }}" class="hover:text-blue-200 transition font-medium">About</a>
                    <a href="{{ route('services') }}" class="hover:text-blue-200 transition font-medium">Services</a>
                    <a href="{{ route('contact') }}" class="hover:text-blue-200 transition font-medium">Contact</a>
                    @auth
                        <div class="flex items-center space-x-4">
                            <span class="text-blue-200">Welcome, {{ Auth::user()->name }}</span>
                            <a href="{{ route('dashboard') }}" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg transition font-medium">Dashboard</a>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded-lg transition font-medium">Logout</button>
                            </form>
                        </div>
                    @else
                        <div class="flex space-x-3">
                            <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg transition font-medium">Login</a>
                            <a href="{{ route('register') }}" class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded-lg transition font-medium">Register</a>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
