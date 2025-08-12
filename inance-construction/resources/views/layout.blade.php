<!DOCTYPE html>
<html>
<head>
    <title>Inance Construction</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-white text-gray-900">
    <nav class="bg-blue-800 text-white p-4">
        <div class="max-w-7xl mx-auto flex justify-between">
            <a href="{{ route('home') }}" class="font-bold text-xl">Inance</a>
            <div class="space-x-4">
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('services') }}">Services</a>
                <a href="{{ route('contact') }}">Contact</a>
                @auth
                    <a href="/dashboard">Dashboard</a>
                    <form method="POST" action="/logout" class="inline">@csrf <button>Logout</button></form>
                @else
                    <a href="/login">Login</a>
                    <a href="/register">Register</a>
                @endauth
            </div>
        </div>
    </nav>
    <main class="p-6">
        @yield('content')
    </main>
</body>
</html>
