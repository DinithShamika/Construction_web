@extends('layout')

@section('content')
<head>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

</head>
<body>
    

<!-- Services Section with Background -->
<section class="relative py-20 bg-cover bg-center" style="background-image: url('{{ asset('images/services-image01.jpg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-70"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold text-center text-white mb-16" data-aos="fade-up">
            Our Construction Services
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Service Card 1 -->
            <div class="bg-white bg-opacity-90 backdrop-blur-lg rounded-3xl shadow-xl p-8 hover:scale-105 transition-transform duration-300" data-aos="fade-up">
                <img src="{{ asset('images/image04.jpg') }}" alt="Residential Construction" class="w-full h-48 object-cover rounded-xl mb-4">
                <h3 class="text-xl font-bold text-blue-700 mb-2 text-center">Residential Construction</h3>
                <p class="text-gray-700 text-center">Custom homes, villas, and residential projects with end-to-end management and quality assurance.</p>
            </div>

            <!-- Service Card 2 -->
            <div class="bg-white bg-opacity-90 backdrop-blur-lg rounded-3xl shadow-xl p-8 hover:scale-105 transition-transform duration-300" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('images/image02.jpg') }}" alt="Commercial Projects" class="w-full h-48 object-cover rounded-xl mb-4">
                <h3 class="text-xl font-bold text-blue-700 mb-2 text-center">Commercial Projects</h3>
                <p class="text-gray-700 text-center">Warehouses, office spaces, and retail structures executed with high standards and timelines.</p>
            </div>

            <!-- Service Card 3 -->
            <div class="bg-white bg-opacity-90 backdrop-blur-lg rounded-3xl shadow-xl p-8 hover:scale-105 transition-transform duration-300" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('images/image03.jpg') }}" alt="Renovation & Remodeling" class="w-full h-48 object-cover rounded-xl mb-4">
                <h3 class="text-xl font-bold text-blue-700 mb-2 text-center">Renovation & Remodeling</h3>
                <p class="text-gray-700 text-center">Transforming existing spaces into modern, functional environments with precision and care.</p>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</body>
@endsection
