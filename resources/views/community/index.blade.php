@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 py-12" style="max-width: 1200px; margin: 0 auto;">
        <div class="flex justify-between gap-12" style="display: flex; justify-content: space-between; gap: 3rem;">
            <!-- Left Section - Post Form -->
            <div class="lg:w-1/3 bg-white p-8 rounded-xl shadow-xl space-y-6" style="width: 33%; background-color: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                <div class="text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Farm to Plate Logo" class="w-32 mx-auto mb-4" style="width: 8rem; margin-bottom: 1rem;">
                </div>

                <!-- Community Post Form -->
                <form method="POST" action="{{ route('community.store') }}" enctype="multipart/form-data" style="display: block; width: 100%;">
                    @csrf
                    <div class="space-y-4" style="margin-bottom: 1rem;">
                        <textarea name="content" rows="4" class="block w-full p-4 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-400" placeholder="Share your experience..." style="width: 100%; padding: 1rem; border: 1px solid #e0e0e0; border-radius: 1rem;"></textarea>
                    </div>
                    <div class="space-y-2" style="margin-bottom: 1rem;">
                        <label for="image" class="text-gray-700 font-semibold" style="font-weight: 600; color: #4a4a4a;">Upload Image (optional)</label>
                        <input type="file" name="image" id="image" class="block w-full p-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500" style="width: 100%; padding: 0.75rem; border: 1px solid #e0e0e0; border-radius: 1rem;"/>
                    </div>
                    <div class="flex justify-end mt-6" style="display: flex; justify-content: flex-end; margin-top: 1.5rem;">
                        <x-button class="w-full py-4 bg-green-600 text-white font-semibold rounded-xl hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500" style="background-color: #4CAF50; color: white; padding: 1rem; border-radius: 1rem; width: 100%; cursor: pointer;">
                            Post
                        </x-button>
                    </div>
                </form>
            </div>

            <!-- Right Section - Displaying Posts -->
            <div class="lg:w-2/3 bg-white p-8 rounded-xl shadow-xl space-y-8 w-full" style="width: 66%; background-color: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                <h2 class="text-3xl font-semibold text-center mb-6 text-gray-800" style="font-size: 2rem; font-weight: 600; color: #4a4a4a; margin-bottom: 1.5rem; text-align: center;">Community Posts</h2>

                <!-- Post Grid -->
                @if($posts->isEmpty())
                    <div class="text-center text-gray-600 py-12" style="text-align: center; color: #757575; padding: 3rem 0;">
                        No posts to show. Be the first to share!
                    </div>
                @else
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 1.5rem;">
                        @foreach($posts as $post)
                            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300" style="background-color: white; padding: 1.5rem; border-radius: 1rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: box-shadow 0.3s;">
                                <div class="flex items-center justify-between mb-4" style="display: flex; justify-content: space-between; margin-bottom: 1rem;">
                                    <div class="font-semibold text-green-600 text-lg" style="font-weight: 600; color: #4CAF50; font-size: 1.25rem;">
                                        {{ $post->user->name }}
                                    </div>
                                    <div class="text-sm text-gray-500" style="font-size: 0.875rem; color: #9E9E9E;">
                                        {{ $post->created_at->diffForHumans() }}
                                    </div>
                                </div>
                                <div class="text-gray-700 leading-relaxed mb-4" style="color: #616161; margin-bottom: 1.5rem;">
                                    {!! nl2br(e($post->content)) !!}
                                </div>
                                @if ($post->image)
                                    <div class="mt-4" style="margin-top: 1rem;">
                                        <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="max-w-full rounded-lg shadow-lg" style="max-width: 100%; border-radius: 1rem; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);">
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
