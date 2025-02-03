<!-- resources/views/checkout.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6 text-center">Checkout</h2>

    @if(session('cart'))
        <form action="{{ route('checkout.process') }}" method="POST">
            @csrf
            <div class="bg-white p-6 rounded-lg shadow-md">
                <!-- Customer Details -->
                <h3 class="text-xl font-semibold mb-4">Customer Details</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="name" class="block font-medium text-gray-700">Full Name</label>
                        <input type="text" name="name" id="name" class="w-full p-3 border border-gray-300 rounded-md" required>
                    </div>
                    <div>
                        <label for="email" class="block font-medium text-gray-700">Email Address</label>
                        <input type="email" name="email" id="email" class="w-full p-3 border border-gray-300 rounded-md" required>
                    </div>
                    <div>
                        <label for="phone" class="block font-medium text-gray-700">Phone Number</label>
                        <input type="text" name="phone" id="phone" class="w-full p-3 border border-gray-300 rounded-md" required>
                    </div>
                    <div>
                        <label for="address" class="block font-medium text-gray-700">Shipping Address</label>
                        <textarea name="address" id="address" class="w-full p-3 border border-gray-300 rounded-md" required></textarea>
                    </div>
                </div>

                <!-- Order Summary -->
                <h3 class="text-xl font-semibold mb-4">Order Summary</h3>
                <div class="cart-items mb-6">
                    @foreach(session('cart') as $id => $details)
                        <div class="flex justify-between mb-4">
                            <span>{{ $details['name'] }} (x{{ $details['quantity'] }})</span>
                            <span>Rs. {{ number_format($details['price'] * $details['quantity'], 2) }}</span>
                        </div>
                    @endforeach
                </div>

                <!-- Total Price -->
                <div class="flex justify-between font-semibold text-lg mb-6">
                    <span>Total</span>
                    <span>
                        Rs. 
                        @php
                            $total = 0;
                            foreach(session('cart') as $id => $details) {
                                $total += $details['price'] * $details['quantity'];
                            }
                        @endphp
                        {{ number_format($total, 2) }}
                    </span>
                </div>

                <!-- Stripe Button -->
                <div class="text-right">
                    <a href="{{ route('checkout.stripe') }}" class="bg-green-600 text-white py-2 px-6 rounded-lg hover:bg-green-800 transition">
                        Proceed to Checkout
                    </a>
                </div>
            </div>
        </form>
    @else
        <p class="text-center text-gray-500">Your cart is empty. Please add some items first.</p>
    @endif
</div>
@endsection
