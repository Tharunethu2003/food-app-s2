<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Display posts for the community page (existing method)
    public function index()
    {
        $posts = Post::with('user')->latest()->get(); // Get posts with the user who created them
        return view('community.index', compact('posts'));
    }
    
    // Store a new post (existing method)
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);
    
        $post = new Post();
        $post->content = $request->content;
        $post->user_id = auth()->id();
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $post->image = $request->file('image')->store('images', 'public');
        }
    
        $post->save();
    
        return redirect()->route('community.index');
    }

    // Get posts as API (new method)
    public function getPosts()
    {
        // Return posts in JSON format (only id, title, description, image)
        return response()->json(Post::all(['id', 'title', 'description', 'image']));
    }
}
