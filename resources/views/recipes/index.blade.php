@extends('layouts.app')

@section('content')

<div class="container mx-auto p-6">
    <div class="flex justify-between items-center mb-4">
        <div>
            <!-- Filter Buttons -->
            <a href="{{ route('recipes.index') }}" 
               style="padding: 10px 16px; background-color: rgb(29, 100, 81); color: #FFFFFF; border-radius: 5px; text-decoration: none; margin-right: 5px; 
               {{ !request('filter') ? 'background-color:rgb(65, 85, 75);' : '' }}">All Recipes</a>

            <a href="{{ route('recipes.index', ['filter' => 'vegetarian']) }}" 
               style="padding: 10px 16px; background-color:rgb(29, 100, 81); color: #FFFFFF; border-radius: 5px; text-decoration: none; margin-right: 5px; 
               {{ request('filter') === 'vegetarian' ? 'background-color:rgb(65, 85, 75);' : '' }}">Vegetarian</a>

            <a href="{{ route('recipes.index', ['filter' => 'non-veg']) }}" 
               style="padding: 10px 16px; background-color:rgb(29, 100, 81); color: #FFFFFF; border-radius: 5px; text-decoration: none; 
               {{ request('filter') === 'non-veg' ? 'background-color: rgb(65, 85, 75);' : '' }}">Non-Veg</a>
        </div>

        <!-- Search Form -->
        <form action="{{ route('recipes.index') }}" method="GET" style="display: flex; align-items: center;">
            <input type="text" name="search" placeholder="Search recipes..." 
                   style="border: 1px solid #ccc; padding: 10px; border-radius: 5px; margin-right: 5px;" value="{{ request('search') }}">
            <button type="submit" style="padding: 10px 16px; background-color:rgb(48, 112, 84); color: white; border-radius: 5px; border: none;">Search</button>
        </form>
    </div>

    <!-- Recipe Grid -->
    @if($recipes->isEmpty())
        <div style="text-align: center; padding: 20px; color: #888; font-size: 18px;">
            No items match your search.
        </div>
    @else
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px;">
            @foreach($recipes as $recipe)
            <a href="{{ route('recipes.show', $recipe->id) }}">
                <div style="border-radius: 10px; overflow: hidden; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); background-color: #F8F9FA;">
                    <img src="{{ asset($recipe->picture) }}" alt="{{ $recipe->name }}" 
                         style="width: 100%; height: 180px; object-fit: cover; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                    
                    <div style="padding: 12px;">
                        <h2 style="font-size: 16px; font-weight: bold; color: #2d2d2d; margin-bottom: 5px;">{{ $recipe->name }}</h2>
                        <p style="color: #4a4a4a; font-size: 13px; margin-bottom: 10px;">{{ Str::limit($recipe->description, 70) }}</p>
                        
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <p style="font-size: 14px; font-weight: bold; color: #333;">Rs. {{ number_format($recipe->price, 2) }}</p>
                            <span style="background-color: #E0E0E0; padding: 4px 8px; border-radius: 5px; font-size: 12px;">
                                {{ $recipe->prep_time ? $recipe->prep_time . ' minutes' : 'N/A' }}
                            </span>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    @endif
</div>
@endsection
