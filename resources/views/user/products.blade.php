@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Available Products</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($products as $product)
            <div class="border p-4 rounded shadow">
                <h3 class="font-bold text-lg">{{ $product->name }}</h3>
                <p class="text-gray-700 mt-2">{{ $product->description }}</p>
                <p class="text-green-600 mt-2">Price: ${{ $product->price }}</p>
                <a href="{{ route('product.details', $product->id) }}" class="text-blue-500 mt-4 inline-block">View Details</a>
            </div>
        @endforeach
    </div>
</div>
@endsection
