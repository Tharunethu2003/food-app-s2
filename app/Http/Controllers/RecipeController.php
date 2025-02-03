<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;  // Change to the Recipe model

class RecipeController extends Controller
{
    public function index(Request $request)
    {
        $query = Recipe::query();  // Use Recipe model

        // Filter by vegetarian or non-vegetarian
        if ($request->has('filter')) {
            $filter = $request->input('filter');
            if ($filter === 'vegetarian') {
                $query->where('category', 'Vegetarian');  // Check by category
            } elseif ($filter === 'non-veg') {
                $query->where('category', 'Non-Veg');  // Check by category
            }
        }

        // Search functionality
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'LIKE', "%$search%");  // Search by recipe name
        }

        $recipes = $query->get();  // Fetch filtered recipes
        

        return view('recipes.index', compact('recipes'));  // Pass recipes to the view
        return Recipe::all();

    }

    public function show(Recipe $recipe)
{
    $recipe->load('ingredients');  // Load the ingredients relationship
    return view('recipes.show', compact('recipe'));

    $recipe->load('reviews.user');  // Ensure reviews & user details are loaded
    return view('recipes.show', compact('recipe'));
}



}
