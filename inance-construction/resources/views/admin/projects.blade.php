@extends('layout')

@section('content')
<div class="min-h-screen bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Projects</h1>
            <p class="text-gray-600 mt-1">Manage construction projects</p>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="text-center py-12">
                <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
                <h3 class="text-lg font-medium text-gray-900 mb-2">Projects Management</h3>
                <p class="text-gray-500">Project management features coming soon</p>
            </div>
        </div>

        <div class="mt-6">
            <a href="{{ route('admin.dashboard') }}" class="text-blue-600 hover:text-blue-800 font-medium">
                ← Back to Dashboard
            </a>
        </div>
    </div>
</div>
@endsection