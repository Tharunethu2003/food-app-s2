<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class CartController extends Controller
{
    // Add recipe to the cart
    public function add($recipeId)
    {
        $recipe = Recipe::findOrFail($recipeId);
        $cart = session()->get('cart', []);

        // Add recipe to cart
        $cart[$recipeId] = [
            'name' => $recipe->name,
            'price' => $recipe->price,
            'quantity' => 1,
            'image' => $recipe->picture
        ];

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Recipe added to cart!');
    }

    // View cart
    public function index()
    {
        $cart = session()->get('cart');
        return view('cart.index', compact('cart'));
    }

    // Remove item from cart
    public function remove($recipeId)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$recipeId])) {
            unset($cart[$recipeId]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Recipe removed from cart!');
    }
}
