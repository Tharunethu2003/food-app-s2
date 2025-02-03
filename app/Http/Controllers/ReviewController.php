<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
{
    return Review::with('user', 'recipe')->get(); // Fetch reviews with user & recipe
}


    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'recipe_id' => 'required|exists:recipes,id',
            'review' => 'required|string',
            'rating' => 'required|integer|min:1|max:5'
        ]);

        return Review::create($request->all());
    }

    public function show($id)
    {
        return Review::with('user', 'recipe')->findOrFail($id);
    }

    public function update(Request $request, Review $review)
    {
        $request->validate([
            'review' => 'string',
            'rating' => 'integer|min:1|max:5'
        ]);

        $review->update($request->all());

        return $review;
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return response()->json(['message' => 'Review deleted']);
    }
}
