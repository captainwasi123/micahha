<?php

namespace App\Http\Controllers\payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class stripeController extends Controller
{

    public function paymentCharge(Request $request)
    {
    $stripe = new \Stripe\StripeClient(
        env('STRIPE_PRIVATE_KEY')
      );
      $charge_amount = $request->get('amount')*100;
      $paymentIntent = \Stripe\PaymentIntent::create([
        'amount' => $charge_amount,
        'currency' => 'usd'
      ]);
      
      return response()->json($paymentIntent);

    }
}
