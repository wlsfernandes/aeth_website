<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Session;
use Exception;

class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        $amount = session('amount');
        return view('payment', compact('amount'));
    }
    public function handleRedirect(Request $request)
    {
        $amount = $request->input('donate-amount', 0);  
        $customAmount = $request->input('custom-amount');

        if (!empty($customAmount) && $customAmount > 0) {
            $amount = $customAmount;
        }

        if ($amount <= 0) {
            return redirect()->back()->with('error', 'Please enter a valid donation amount.');
        }

        return redirect()->route('payment')->with('amount', $amount);
    }

    public function handleDonation(Request $request)
    {
        $amount = $request->input('donate-amount', 0); 
        $customAmount = $request->input('custom-amount');

        if (!empty($customAmount) && $customAmount > 0) {
            $amount = $customAmount;
        }

        return redirect()->route('payment')->with('amount', $amount);
    }


    public function handlePayment(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $paymentIntent = PaymentIntent::create([
                "amount" => $request->amount * 100, // Amount in cents
                "currency" => "usd",
                "payment_method" => $request->payment_method_id,
                "confirmation_method" => "manual", // Enables manual confirmation
                "confirm" => true,
                "return_url" => route('payment.callback'), // The return URL after 3D Secure or other redirects
            ]);

            // If the payment requires further action (like 3D Secure), return the PaymentIntent
            if ($paymentIntent->status === 'requires_action' || $paymentIntent->status === 'requires_source_action') {
                return response()->json([
                    'requires_action' => true,
                    'payment_intent_client_secret' => $paymentIntent->client_secret
                ]);
            }

            // If the payment is successful
            if ($paymentIntent->status === 'succeeded') {
                Session::flash('success', 'Payment successful!');
                return back();
            }

        } catch (Exception $e) {
            Session::flash('error', $e->getMessage());
            return back();
        }
    }

    // Callback after redirection
    public function paymentCallback(Request $request)
    {
        // Handle the callback after Stripe redirects back to your app
        Session::flash('success', 'Payment completed!');
        return redirect()->route('payment.form');
    }

}
