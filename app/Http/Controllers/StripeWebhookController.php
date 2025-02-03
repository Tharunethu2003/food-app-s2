<?php
namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Webhook;
use Stripe\Checkout\Session;
use Stripe\Exception\SignatureVerificationException;

class StripeWebhookController extends Controller
{
    public function handle(Request $request)
    {
        // Set your Stripe secret key
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $payload = $request->getContent();
        $sigHeader = $request->header('Stripe-Signature');
        $endpointSecret = env('STRIPE_WEBHOOK_SECRET'); // This is the webhook secret you got from Stripe

        try {
            $event = Webhook::constructEvent($payload, $sigHeader, $endpointSecret);

            if ($event->type === 'checkout.session.completed') {
                $session = $event->data->object;  // Contains the session details

                // Create the order in the database
                $order = Order::create([
                    'user_id' => $session->client_reference_id,  // You can pass the user ID in this field when creating the session
                    'total_amount' => $session->amount_total / 100,  // Amount is in cents, divide by 100
                    'currency' => $session->currency,
                    'status' => 'paid',
                ]);

                // Optionally, you can save order items here based on your cart data
                // OrderItem::create([...]);

                // You can also send an email or perform other actions
            }

            return response('Webhook Handled', 200);
        } catch (SignatureVerificationException $e) {
            return response('Invalid signature', 400);
        }
    }
}
