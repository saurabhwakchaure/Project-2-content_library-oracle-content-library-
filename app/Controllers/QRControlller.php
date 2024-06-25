<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class QRControlller extends BaseController
{
    public function pay()
    {
        return view('Payment/payment_form');
    }

    public function process()
    {
        require 'vendor/autoload.php';

        $stripe = new \Stripe\StripeClient(config('Stripe')->secretKey);

        try {
            $paymentIntent = $stripe->paymentIntents->create([
                'amount' => 1000, // Amount in cents
                'currency' => 'usd',
                'payment_method_types' => ['card'],
            ]);

            return view('Payment/payment_success', ['paymentIntent' => $paymentIntent]);
        } catch (\Exception $e) {
            return view('Payment/payment_failure', ['error' => $e->getMessage()]);
        }
    }

    public function success()
    {
        return view('Payment/payment_success');
    }

    public function failure()
    {
        return view('Payment/payment_failure');
    }
}
