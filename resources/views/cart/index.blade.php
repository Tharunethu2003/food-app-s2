@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6 text-center">Your Cart</h2>

    @if(session('cart'))
        <div class="cart-items grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach(session('cart') as $id => $details)
                <div class="cart-item bg-white p-4 rounded-lg shadow-lg flex items-center justify-between space-x-4">
                    <!-- Image Section -->

                    <!-- Details Section -->
                    <div class="cart-item-details flex-1">
                        <p class="font-semibold text-lg">{{ $details['name'] }}</p>
                        <p class="text-gray-600">Rs. {{ number_format($details['price'], 2) }}</p>
                        <p class="text-gray-600">Quantity: {{ $details['quantity'] }}</p>
                    </div>

                    <!-- Remove Button -->
                    <div class="remove-btn">
                        <a href="{{ route('cart.remove', $id) }}" class="text-red-600 hover:text-red-800 font-semibold">Remove</a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Checkout Section -->
        <div class="mt-8 text-right">
            <a href="{{ route('checkout') }}" class="bg-green-600 text-white py-2 px-6 rounded-lg hover:bg-green-800 transition">Proceed to Checkout</a>
        </div>
        
    @else
        <p class="text-center text-gray-500">Your cart is empty.</p>
    @endif
</div>
@endsection
