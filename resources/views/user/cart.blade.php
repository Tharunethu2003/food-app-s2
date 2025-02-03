@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Your Cart</h2>
    @if ($cartItems->isEmpty())
        <p class="text-gray-700">Your cart is empty.</p>
    @else
        <ul class="list-disc pl-5">
            @foreach ($cartItems as $item)
                <li class="mb-2">
                    {{ $item->product->name }} - ${{ $item->product->price }} x {{ $item->quantity }}
                </li>
            @endforeach
        </ul>
        <p class="text-green-600 mt-4">Total: ${{ $total }}</p>
    @endif
</div>
@endsection
