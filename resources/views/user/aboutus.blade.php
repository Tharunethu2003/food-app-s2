<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Farm 2 Plate</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">

    @include('components.navbar')  <!-- Include Navbar Component -->

    <!-- About Section -->
    <div class="container mx-auto px-6 md:px-12 py-12 text-center">
        <h1 class="text-4xl font-bold text-gray-800 leading-tight">Changing the Way People Eat, Forever</h1>
        <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
            We believe that <strong>everyone</strong> deserves fresh, delicious food. That’s why we make it easy to prepare
            home-cooked meals that bring out your inner chef and help you bond with loved ones.
        </p>
    </div>
<!-- Video Banner (smaller size) -->
<div class="relative max-w-4xl mx-auto h-[350px] md:h-[400px] overflow-hidden bg-black"> 
    <iframe 
        class="absolute top-0 left-0 w-full h-full object-cover"
        src="https://www.youtube.com/embed/VRyi0_hDrxs?autoplay=1&mute=1&loop=1&playlist=VRyi0_hDrxs&controls=0&background=1"
        frameborder="0" 
        allow="autoplay; fullscreen" 
        allowfullscreen>
    </iframe>
</div>



   

    <!-- Image & Text Section -->
    <div class="bg-white py-12">
        <div class="container mx-auto px-6 md:px-12 flex flex-col md:flex-row items-center gap-10">
            <div class="md:w-1/2">
                <img src="{{ asset('images/cooking.jpg') }}" 
                    class="rounded-lg shadow-lg w-full hover:scale-105 transition duration-300">
            </div>
            <div class="md:w-1/2">
                <h2 class="text-3xl font-semibold text-gray-800">What Makes Us Different?</h2>
                <p class="text-gray-600 mt-4">
                    Our <strong>sustainable</strong> and <strong>direct-to-consumer</strong> model ensures minimal waste and maximum freshness.
                    Every ingredient is carefully sourced to <strong>reduce your carbon footprint</strong> while delivering top-quality meals.
                </p>
            </div>
        </div>
    </div>

    <!-- Steps Section -->
<div class="py-12">
    <div class="container mx-auto px-6 md:px-12 grid md:grid-cols-2 gap-10">
        
        <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 flex flex-col items-center text-center">
            <img src="{{ asset('images/food.jpg') }}" 
                class="rounded-lg mb-4 w-3/4 max-w-[250px] h-auto">
            <h3 class="text-xl font-semibold text-gray-800">1. Get Your Delivery</h3>
            <p class="text-gray-600 mt-2">
                Receive <strong>fresh, pre-measured ingredients</strong> every week and cook delicious meals in minutes!
            </p>
        </div>

        <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 flex flex-col items-center text-center">
            <img src="{{ asset('images/hellofresh.jpg') }}" 
                class="rounded-lg mb-4 w-3/4 max-w-[250px] h-auto">
            <h3 class="text-xl font-semibold text-gray-800">2. Easy to Follow</h3>
            <p class="text-gray-600 mt-2">
                Whether you're cooking for yourself or your family, we have a recipe plan to <strong>match your lifestyle.</strong>
            </p>
        </div>

    </div>
</div>



    <!-- Footer Section -->
    <footer class="bg-green-800 text-white py-8">
        <div class="container mx-auto text-center">
            <p>© 2025 Farm2Plate. All Rights Reserved.</p>
            <p>About Us | Contact Us | Health Benefits</p>
        </div>
    </footer>
</body>
</html>
