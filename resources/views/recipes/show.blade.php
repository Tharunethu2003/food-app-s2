@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div style="max-width: 800px; margin: 0 auto; background-color: #F8F9FA; border-radius: 10px; padding: 20px; display: flex; flex-wrap: wrap;">
        <!-- Recipe Image and Price -->
        <div style="flex: 1; max-width: 50%; padding-right: 20px; text-align: center;">
            <img src="{{ asset($recipe->picture) }}" alt="{{ $recipe->name }}" 
                 style="width: 100%; height: auto; object-fit: cover; border-radius: 10px;">
            <!-- Display price below the image -->
            <p class="price-display" style="font-size: 18px; font-weight: bold; color: #333; margin-top: 10px;">
                Rs. {{ number_format($recipe->price, 2) }}
            </p>
        </div>
        
        <!-- Recipe Details -->
        <div style="flex: 1; max-width: 50%; padding-left: 20px;">
            <!-- Recipe Name and Description -->
            <h2 style="font-size: 24px; font-weight: bold; color: #2d2d2d; margin-top: 20px;">{{ $recipe->name }}</h2>
            <p style="color: #4a4a4a; font-size: 16px; margin: 10px 0;">{{ $recipe->description }}</p>

            <!-- Price and Prep Time -->
            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 15px;">
                <span style="background-color: #E0E0E0; padding: 6px 12px; border-radius: 5px; font-size: 14px;">
                    {{ $recipe->prep_time ? $recipe->prep_time . ' minutes' : 'N/A' }}
                </span>
            </div>

            <!-- Serving Selector -->
            <div style="margin-top: 20px;">
                <label for="servings" style="font-size: 18px; font-weight: bold;">Number of Servings:</label>
                <select id="servings" name="servings" style="margin-left: 10px; padding: 6px 12px; border-radius: 5px; font-size: 16px;">
                    <option value="1">1 Serving</option>
                    <option value="2">2 Servings</option>
                    <option value="3">3 Servings</option>
                    <!-- Add more options if needed -->
                </select>
            </div>

           <!-- Ingredients List -->
<div style="margin-top: 20px;">
    <h3 style="font-size: 20px; font-weight: bold;">Ingredients:</h3>
    <ul id="ingredients-list">
        @foreach($recipe->ingredients as $index => $ingredient)
            <li style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                <span>{{ $ingredient }}</span>
                <button class="remove-ingredient" data-index="{{ $index }}" style="background-color: red; color: white; border: none; border-radius: 5px; padding: 5px 10px; cursor: pointer;">-</button>
            </li>
        @endforeach
    </ul>
</div>


            <!-- Instructions -->
            <div style="margin-top: 20px;">
                <h3 style="font-size: 20px; font-weight: bold;">Instructions:</h3>
                <p>{{ $recipe->instructions }}</p>
            </div>

            <!-- Add to Cart Button -->
            <div style="margin-top: 30px; display: flex; justify-content: center;">
                @if (Auth::check())
                    <form action="{{ route('cart.add', $recipe->id) }}" method="POST">
                        @csrf
                        <!-- Hidden servings input -->
                        <input type="hidden" name="servings" id="hidden-servings" value="1">
                        <button type="submit" style="background-color: #28a745; color: white; border: none; border-radius: 5px; padding: 10px 20px; cursor: pointer;">
                            Add to Cart
                        </button>
                    </form>
                @else
                    <p style="color: red;">You must <a href="{{ route('login') }}" style="color: #28a745;">log in</a> or <a href="{{ route('register') }}" style="color: #28a745;">register</a> to add items to your cart.</p>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="mt-8 flex justify-center">
    <div class="w-full max-w-lg bg-gray-100 p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4 text-green-700 text-center">User Reviews</h2>

        @if ($recipe->reviews && $recipe->reviews->count() > 0)
            @foreach ($recipe->reviews as $review)
                <div class="bg-white shadow-sm rounded-md p-4 mb-4 border border-gray-300">
                    <div class="flex items-center">
                        <!-- User Avatar (Initial) -->
                        <div class="w-10 h-10 bg-green-600 text-white rounded-full flex items-center justify-center font-bold">
                            {{ strtoupper(substr($review->user->name, 0, 1)) }}
                        </div>
                        <div class="ml-3">
                            <p class="font-semibold text-gray-900">{{ $review->user->name }}</p>
                            <p class="text-sm text-gray-500">{{ $review->created_at->diffForHumans() }}</p>
                        </div>
                    </div>

                    <!-- Review Text -->
                    <p class="mt-3 text-gray-800 italic">{{ $review->review }}</p>

                    <!-- Star Rating -->
                    <div class="mt-2 flex items-center">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $review->rating)
                                <span class="text-yellow-500 text-lg">★</span>
                            @else
                                <span class="text-gray-400 text-lg">☆</span>
                            @endif
                        @endfor
                        <span class="ml-2 text-gray-600">({{ $review->rating }}/5)</span>
                    </div>
                </div>
            @endforeach
        @else
            <p class="text-gray-600 italic text-center">No reviews yet. Be the first to leave a review!</p>
        @endif
    </div>
</div>

<!-- Footer Section -->
<footer class="bg-green-800 text-white py-8">
    <div class="container mx-auto text-center">
        <p>© 2025 Farm2Plate. All Rights Reserved.</p>
        <p>About Us | Contact Us | Health Benefits</p>
    </div>
</footer>

<script>
    // Get the servings dropdown and price elements
    const servingsSelect = document.getElementById('servings');
    const priceElement = document.querySelector('.price-display');

    // Set initial price based on the number of servings
    servingsSelect.addEventListener('change', function() {
        const servings = parseInt(servingsSelect.value);
        const basePrice = {{ $recipe->price }}; // Get base price from PHP variable

        // Calculate the new price based on servings
        const newPrice = basePrice * servings;

        // Update the price displayed on the page
        priceElement.textContent = `Rs. ${newPrice.toFixed(2)}`;

        // Update the hidden servings input when the user selects a number of servings
        document.getElementById('hidden-servings').value = servings;
    });
</script>

@endsection
