<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
    <!-- Example Sidebar Layout -->
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

</x-app-layout>
