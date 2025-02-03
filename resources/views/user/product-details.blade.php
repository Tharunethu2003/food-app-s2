@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-3xl font-bold">{{ $product->name }}</h2>
    <p class="mt-4">{{ $product->description }}</p>
    <p class="text-green-600 mt-4">Price: ${{ $product->price }}</p>
    <form method="POST" action="{{ route('cart.add') }}" class="mt-6">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <button type="submit" class="px-6 py-2 bg-green-500 text-white rounded">Add to Cart</button>
    </form>
</div>
@endsection
