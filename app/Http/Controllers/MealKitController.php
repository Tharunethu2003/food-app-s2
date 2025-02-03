<?php
namespace App\Http\Controllers;

use App\Models\MealKit;
use Illuminate\Http\Request;

class MealKitController extends Controller
{
    // Show the homepage
    public function index()
    {
        return view('home'); // Ensure `resources/views/home.blade.php` exists
    }

    // Browse meal kits
    public function browse()
    {
        $mealKits = MealKit::all();
        return view('browse', compact('mealKits')); // Ensure `resources/views/browse.blade.php` exists
    }

    // Show a single meal kit (for resource route if needed)
    public function show(MealKit $mealKit)
    {
        return view('meal-kits.show', compact('mealKit')); // Ensure `resources/views/meal-kits/show.blade.php` exists
    }
}
