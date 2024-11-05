<?php

namespace App\Http\Clients;

use Illuminate\Http\Client\PendingRequest;
use Throwable;

class PaystackClient extends PendingRequest
{
    public $baseUrl = 'https://api.paystack.co';

    public function initialize(string $email, int $amount, $cartId)
    {
        $response = $this->baseUrl($this->baseUrl)
            ->withToken('sk_test_c3ee93c8d72c19bdaa769303e7019e49321916c3')
            ->post('/transaction/initialize', [
                'email' => $email,
                'amount' => $amount,
                'callback_url' => 'http://127.0.0.1:8000/payment/verify?cart=' . $cartId
            ])
            ->json();

        info(json_encode($response));

        return $response;
    }

    public function verifyTransaction(string $reference)
    {
        try {
            $response = $this->baseUrl($this->baseUrl)
                ->withToken('sk_test_c3ee93c8d72c19bdaa769303e7019e49321916c3')
                ->get('/transaction/verify/' . $reference)
                ->json();

            info(json_encode($response));

            return $response;
        } catch (Throwable $e) {
            logger($e);
            return null;
        }
    }
}
