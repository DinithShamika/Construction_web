@extends('layout')

@section('content')
<div class="min-h-screen bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Clients</h1>
            <p class="text-gray-600 mt-1">Manage client information</p>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="text-center py-12">
                <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <h3 class="text-lg font-medium text-gray-900 mb-2">Client Management</h3>
                <p class="text-gray-500">Client management features coming soon</p>
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