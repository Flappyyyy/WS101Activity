<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Home</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-gray-900 text-white">
    <div class="relative h-screen flex flex-col justify-center items-center text-center px-6 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/1600x900/?technology,design');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10">
            <h1 class="text-6xl font-bold">Welcome to My Page</h1>
            <p class="mt-4 text-lg text-gray-300"></p>
            <a href="#explore" class="mt-6 px-6 py-3 bg-blue-600 text-white text-lg font-bold rounded-lg shadow-lg hover:bg-blue-700 transition-all ">Explore More</a>
        </div>
    </div>
    
    <section id="explore" class="py-20 text-center">
        <h2 class="text-4xl font-bold">Why Choose Us?</h2>
        <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8 px-6 max-w-6xl mx-auto">
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg flex flex-col items-center">
                <div class="text-yellow-400 text-5xl">⚡</div>
                <h3 class="text-2xl mt-4">Fast Performance</h3>
                <p class="mt-2 text-gray-400">Optimized for speed and efficiency.</p>
            </div>
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg flex flex-col items-center">
                <div class="text-green-400 text-5xl">🎨</div>
                <h3 class="text-2xl mt-4">Modern UI</h3>
                <p class="mt-2 text-gray-400">Sleek, intuitive, and user-friendly design.</p>
            </div>
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg flex flex-col items-center">
                <div class="text-red-400 text-5xl">🔒</div>
                <h3 class="text-2xl mt-4">Secure</h3>
                <p class="mt-2 text-gray-400">Top-notch security for your peace of mind.</p>
            </div>
        </div>
    </section>
</body>
</html>
