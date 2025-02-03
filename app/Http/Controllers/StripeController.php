<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StripeController extends Controller
{
    public function createCheckoutSession(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $cart = session('cart', []);

        $lineItems = [];
        $totalAmount = 0;

        foreach ($cart as $id => $details) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'lkr', // Sri Lankan Rupees
                    'product_data' => [
                        'name' => $details['name'],
                    ],
                    'unit_amount' => $details['price'] * 100, // Convert to cents
                ],
                'quantity' => $details['quantity'],
            ];
            $totalAmount += $details['price'] * $details['quantity'];
        }

        $checkoutSession = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems,
            'mode' => 'payment',
            'customer_email' => Auth::user()->email,  // Ensure the user is authenticated
            'client_reference_id' => Auth::id(), // Pass the user ID
            'success_url' => route('checkout.success'),
            'cancel_url' => route('checkout.cancel'),
        ]);

        return redirect($checkoutSession->url);
    }

    public function success()
{
    $user = Auth::user();
    $cart = session('cart', []);

    if (empty($cart)) {
        return redirect('/')->with('error', 'Cart is empty.');
    }

    // Calculate the total amount of the order
    $totalAmount = array_reduce($cart, function ($sum, $item) {
        return $sum + ($item['price'] * $item['quantity']);
    }, 0);

    // Save the order with items as a JSON
    $order = \App\Models\Order::create([
        'user_id' => $user->id,
        'total_amount' => $totalAmount,
        'status' => 'paid', // or any status like 'completed'
        'items' => json_encode($cart), // Store the entire cart in the 'items' column
    ]);

    // Clear the cart session
    session()->forget('cart');

    return redirect('/')->with('success', 'Payment successful! Your order has been placed.');
}


public function cancel()
{
    return redirect('/')->with('error', 'Payment was cancelled.');
}

}
