<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm2Plate</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Navbar -->
    @include('components.navbar')

<!-- Hero Section -->
<section class="relative w-full h-[400px] bg-cover bg-center flex items-center justify-center text-left text-white" 
    style="background-image: url('{{ asset('images/backgroundimage.png') }}'); background-size: 120% auto; background-position: left;">
    <div class="bg-opacity-0 p-10 rounded-lg w-full max-w-3xl h-48 flex flex-col justify-center items-center text-center">
        <h1 class="text-5xl font-extrabold" style="color: rgb(13, 85, 39);">REVOLUTIONIZE YOUR MEALTIME!</h1>
        <p class="mt-3 text-xl text-black">Make Cooking Easy, Fun, and Fast</p>
        <a href="{{ asset('recipes') }}">
    <button class="mt-5 text-white text-lg font-semibold px-8 py-3 rounded-lg shadow-md transition-all duration-300"
            style="background-color: #4CAF50; hover:background-color: rgb(91, 150, 94);">
        LET'S COOK!
    </button>
</a>

    </div>
</section>



    <!-- Why Choose Us -->
    <section class="bg-[#f3f9f3] py-16 text-center">
        <h2 class="text-4xl font-bold text-gray-800">Why Choose Us?</h2>
        <div class="flex justify-center gap-12 mt-8">
            <img src="{{ asset('images/logo2.png') }}" class="w-28 h-28 rounded-lg shadow-lg">
            <img src="{{ asset('images/logo3.png') }}" class="w-28 h-28 rounded-lg shadow-lg">
            <img src="{{ asset('images/logo4.png') }}" class="w-28 h-28 rounded-lg shadow-lg">
        </div>
    </section><!-- Recipe Highlights -->
<section class="max-w-6xl mx-auto py-16 px-8">
    <h2 class="text-4xl font-bold text-center text-gray-800">Recipes to Fit Your Diet</h2>
    <p class="text-center text-gray-600 mt-4">Delicious recipes tailored to your needs.</p>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-8">
        <!-- Recipe 1 -->
        <div class="bg-[#6E8E59] p-6 rounded-lg text-center shadow-lg">
            <img src="{{ asset('storage/images/quinoa-salad.jpg') }}" class="rounded-lg mx-auto mb-4">
            <p class="text-lg text-white font-semibold">Quinoa Salad with Chickpeas and Avocado</p>
            <p class=" text-white ">A nutritious salad made with quinoa, chickpeas, and avocado.</p>
            <a href="{{ asset('recipes') }}">
                <button class="mt-5 text-white text-lg font-semibold px-8 py-3 rounded-lg shadow-md transition-all duration-300"
                        style="background-color: #4CAF50; hover:background-color: rgb(91, 150, 94);">
                    See More!
                </button>
            </a>
        </div>
        
        <!-- Recipe 2 -->
        <div class="bg-[#6E8E59] p-6 rounded-lg text-center shadow-lg">
            <img src="{{ asset('storage/images/spaghetti-carbonara.jpg') }}" class="rounded-lg mx-auto mb-4">
            <p class="text-lg text-white font-semibold">Spaghetti Carbonara</p>
            <p class=" text-white ">A classic Italian pasta dish with eggs, cheese, pancetta, and pepper.</p>
            <a href="{{ asset('recipes') }}">
                <button class="mt-5 text-white text-lg font-semibold px-8 py-3 rounded-lg shadow-md transition-all duration-300"
                        style="background-color: #4CAF50; hover:background-color: rgb(91, 150, 94);">
                    See More!
                </button>
            </a>
        </div>

        <!-- Recipe 3 -->
        <div class="bg-[#6E8E59] p-6 rounded-lg text-center shadow-lg">
            <img src="{{ asset('storage/images/grilled-veggie-burger.jpg') }}" class="rounded-lg mx-auto mb-4">
            <p class="text-lg text-white font-semibold">Grilled Veggie Burger</p>
            <p class=" text-white ">A plant-based burger made with grilled vegetables and served with lettuce and tomato.</p>
            <a href="{{ asset('recipes') }}">
                <button class="mt-5 text-white text-lg font-semibold px-8 py-3 rounded-lg shadow-md transition-all duration-300"
                        style="background-color: #4CAF50; hover:background-color: rgb(91, 150, 94);">
                    See More!
                </button>
            </a>
        </div>

        <!-- Recipe 4 -->
        <div class="bg-[#6E8E59] p-6 rounded-lg text-center shadow-lg">
            <img src="{{ asset('images/image30.jpg') }}" class="rounded-lg mx-auto mb-4">
            <p class="text-lg text-white font-semibold">COLLEGE NIGHT MEAL</p>
            <p class=" text-white ">A creamy chicken Alfredo sauce topped with mozzarella on a pizza crust.</p>
            <a href="{{ asset('recipes') }}">
                <button class="mt-5 text-white text-lg font-semibold px-8 py-3 rounded-lg shadow-md transition-all duration-300"
                        style="background-color: #4CAF50; hover:background-color: rgb(91, 150, 94);">
                    See More!
                </button>
            </a>
        </div>
    </div>
</section>



   <!-- What's in the Package? -->
<section class="max-w-6xl mx-auto py-16 px-8 bg-[#f9f9f9] flex items-center">
    <div class="w-1/2">
        <img src="{{ asset('images/inpackage.jpg') }}" alt="Package Image" class="rounded-lg mx-auto">
    </div>
    <div class="w-1/2 pl-16 text-right">
        <h2 class="text-4xl font-bold text-gray-800">What’s in the Package with Each Meal?</h2>
        <p class="mt-4 text-lg text-gray-600">Curated recipes, pre-portioned ingredients, and fresh, high-quality meals.</p>
        <ul class="mt-6 text-lg text-gray-800 list-inside list-disc">
            <li>Pre-portioned ingredients</li>
            <li>Fresh, high-quality meals</li>
            <li>Curated recipes for all diets</li>
            <li>Easy-to-follow cooking instructions</li>
            <li>Convenient and quick meal prep</li>
        </ul>
    </div>
</section>

   <!-- Contact Section -->
<section class="max-w-6xl mx-auto py-16 px-8 text-center">
    <h2 class="text-4xl font-bold text-gray-800">Any Questions? Ask Away!</h2>
    <form id="whatsapp-form" action="https://wa.me/<YOUR_PHONE_NUMBER>" method="get" target="_blank">
        <input 
            type="text" 
            id="question-input" 
            placeholder="Type your question..." 
            class="mt-6 w-full md:w-1/2 p-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-300" 
            required
        >
        <button 
            type="submit" 
            class="mt-4 bg-green-600 hover:bg-green-700 text-white text-lg font-semibold px-8 py-3 rounded-lg shadow-md transition-all duration-300">
            Send to WhatsApp
        </button>
    </form>

    
</section>

<script>
    const form = document.getElementById('whatsapp-form');
    const input = document.getElementById('question-input');

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        const question = input.value;
        if (question) {
            const whatsappLink = `https://wa.me/94772174723?text=${encodeURIComponent(question)}`;
            window.open(whatsappLink, '_blank');
        }
    });
</script>


    <!-- Footer -->
    <footer class="bg-[#333333] text-white py-8">
        <div class="max-w-6xl mx-auto flex justify-between px-8">
            <p>© 2025 Farm2Plate</p>
            <div class="flex gap-8">
                <a href="#" class="hover:text-gray-400 transition-all duration-300">About Us</a>
                <a href="#" class="hover:text-gray-400 transition-all duration-300">Contact</a>
                <a href="#" class="hover:text-gray-400 transition-all duration-300">Explore</a>
            </div>
        </div>
    </footer>
</body>
</html>
