<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="relative flex items-center justify-center w-screen h-screen bg-gray-100">
    
    <!-- Background Image with Transparency -->
    <div class="absolute inset-0 bg-cover bg-center opacity-30" 
         style="background-image: url('https://img.freepik.com/free-vector/modern-abstract-white-minimal-background_84443-8367.jpg');">
    </div>

    <!-- Content in a Square Container -->
    <div class="relative w-full max-w-md aspect-square p-8 bg-white bg-opacity-90 shadow-lg rounded-lg text-center flex flex-col justify-center">
        <h1 class="text-3xl font-bold text-gray-800 mb-10">About</h1>
        <p class="mt-4 text-lg text-gray-600 italic">“The only way to do great work is to love what you do.”</p>
        <div class="mt-6 flex justify-center">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKuWUssAkcuJPsVhjeR-vMIweTH3x8HRYUjg&s" 
                 alt="Inspirational Image" 
                 class="w-32 h-32 rounded-lg shadow-md object-cover">
        </div>
    </div>

</body>
</html>
