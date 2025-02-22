<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="relative flex items-center justify-center w-screen h-screen bg-gray-100">
    
    <!-- Background Image with Transparency -->
    <div class="absolute inset-0 bg-cover bg-center opacity-20" 
         style="background-image: url('https://img.freepik.com/free-vector/modern-abstract-white-minimal-background_84443-8367.jpg');">
    </div>

    <!-- Contact Information -->
    <div class="relative w-full max-w-md aspect-square p-8 bg-white bg-opacity-90 shadow-lg rounded-lg text-center flex flex-col justify-center">
        <h1 class="text-3xl font-bold text-gray-800">Contact</h1>
        <p class="mt-4 text-lg text-gray-600">Feel free to reach out!</p>

        <div class="mt-6 space-y-4 text-gray-700">
            <p><strong>📧 Student Account:</strong>  
                <a href="mailto:khen.delacruz@hcdc.edu.ph" class="text-blue-500 hover:underline">khen.delacruz@hcdc.edu.ph</a>
            </p>
            <p><strong>📞 Contact:</strong> 0907-543-6972</p>
            <p><strong>📩 Personal Account:</strong>  
                <a href="mailto:KhenDC69@gmail.com" class="text-blue-500 hover:underline">KhenDC69@gmail.com</a>
            </p>
        </div>
    </div>

</body>
</html>
