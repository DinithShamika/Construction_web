<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin | Inance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- for Tailwind & Vite -->
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="flex min-h-screen">
        <aside class="w-64 bg-gray-800 text-white">
            <div class="p-4 text-xl font-bold border-b border-gray-600">Inance Admin</div>
            <nav class="mt-4">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 hover:bg-gray-700">Dashboard</a>
                <a href="{{ route('projects.index') }}" class="block px-4 py-2 hover:bg-gray-700">Projects</a>
                <a href="{{ route('clients.index') }}" class="block px-4 py-2 hover:bg-gray-700">Clients</a>
                <a href="{{ route('staff.index') }}" class="block px-4 py-2 hover:bg-gray-700">Staff</a>
                <a href="{{ route('contact') }}" class="block px-4 py-2 hover:bg-gray-700">Contact Forms</a>
            </nav>
        </aside>
        <main class="flex-1 p-6 bg-gray-100">
            @yield('content')
        </main>
    </div>
</body>
</html>
