<?php

namespace App\Http\Controllers;

use App\Models\MealKit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Show all products (meal kits)
    public function index()
    {
        $mealKits = MealKit::all(); // Fetch all meal kits
        return view('user.browse', compact('mealKits')); // Pass to view
    }

    // Show a single product (meal kit) details
    public function show($id)
    {
        $mealKit = MealKit::findOrFail($id); // Find meal kit by ID
        return view('user.product_details', compact('mealKit')); // Pass to view
    }

    // Add product to cart
    public function addToCart($id)
    {
        $mealKit = MealKit::findOrFail($id);
        $user = auth()->user();
        // Logic to add the meal kit to the user's cart
        $user->cartItems()->create([
            'meal_kit_id' => $mealKit->id,
            'quantity' => 1 // Default quantity (can be changed)
        ]);
        return redirect()->route('cart')->with('success', 'Meal kit added to cart');
    }
}
