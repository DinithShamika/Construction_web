@extends('layout')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-blue-600 to-blue-800 py-20">
        <div class="max-w-7xl mx-auto px-6 text-center text-white">
            <h1 class="text-5xl font-bold mb-4">Upload Your Design</h1>
            <p class="text-xl text-blue-100">Share your drawings and get a professional quote</p>
        </div>
    </div>

    <!-- Upload Form -->
    <div class="py-20 px-6 max-w-4xl mx-auto">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <!-- Progress Indicator -->
            <div class="mb-8">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center text-sm font-semibold">1</div>
                        <span class="ml-2 text-sm font-medium text-blue-600">Upload Design</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center text-sm font-semibold">2</div>
                        <span class="ml-2 text-sm font-medium text-gray-500">Project Details</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center text-sm font-semibold">3</div>
                        <span class="ml-2 text-sm font-medium text-gray-500">Review & Submit</span>
                    </div>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-blue-600 h-2 rounded-full" style="width: 33%"></div>
                </div>
            </div>

            <form method="POST" action="{{ route('design.submit') }}" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Customer Information -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                        <input id="name" name="name" type="text" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                        <input id="email" name="email" type="email" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                </div>

                <!-- Project Type -->
                <div>
                    <label for="project_type" class="block text-sm font-semibold text-gray-700 mb-2">Project Type</label>
                    <select id="project_type" name="project_type" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">Select Project Type</option>
                        <option value="residential">Residential Construction</option>
                        <option value="commercial">Commercial Construction</option>
                        <option value="renovation">Renovation & Remodeling</option>
                        <option value="industrial">Industrial Construction</option>
                    </select>
                </div>

                <!-- Design Upload -->
                <div>
                    <label for="design_files" class="block text-sm font-semibold text-gray-700 mb-2">Upload Design Files</label>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-blue-500 transition">
                        <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                        </svg>
                        <p class="text-gray-600 mb-2">Drop your design files here or click to browse</p>
                        <p class="text-sm text-gray-500">Supports: PDF, JPG, PNG, DWG, CAD files (Max 10MB each)</p>
                        <input id="design_files" name="design_files[]" type="file" multiple accept=".pdf,.jpg,.jpeg,.png,.dwg,.cad" 
                               class="hidden" onchange="updateFileList(this)">
                        <button type="button" onclick="document.getElementById('design_files').click()" 
                                class="mt-4 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                            Choose Files
                        </button>
                    </div>
                    <div id="file-list" class="mt-4 space-y-2"></div>
                </div>

                <!-- Project Description -->
                <div>
                    <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">Project Description</label>
                    <textarea id="description" name="description" rows="4" required
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                              placeholder="Describe your project requirements, timeline, and any special considerations..."></textarea>
                </div>

                <!-- Budget Range -->
                <div>
                    <label for="budget" class="block text-sm font-semibold text-gray-700 mb-2">Estimated Budget Range</label>
                    <select id="budget" name="budget" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">Select Budget Range</option>
                        <option value="under-50k">Under $50,000</option>
                        <option value="50k-100k">$50,000 - $100,000</option>
                        <option value="100k-250k">$100,000 - $250,000</option>
                        <option value="250k-500k">$250,000 - $500,000</option>
                        <option value="over-500k">Over $500,000</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="text-center pt-6">
                    <button type="submit" class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-8 py-4 rounded-lg font-semibold hover:from-blue-700 hover:to-blue-800 transition duration-300 shadow-lg">
                        Submit Design for Quote
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function updateFileList(input) {
    const fileList = document.getElementById('file-list');
    fileList.innerHTML = '';
    
    for (let i = 0; i < input.files.length; i++) {
        const file = input.files[i];
        const fileItem = document.createElement('div');
        fileItem.className = 'flex items-center justify-between bg-gray-50 p-3 rounded-lg';
        fileItem.innerHTML = `
            <div class="flex items-center">
                <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <span class="text-sm font-medium text-gray-700">${file.name}</span>
                <span class="text-xs text-gray-500 ml-2">(${(file.size / 1024 / 1024).toFixed(2)} MB)</span>
            </div>
        `;
        fileList.appendChild(fileItem);
    }
}
</script>
@endsection