<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SupabaseAuthService
{
    protected $baseUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->baseUrl = env('DB_HOST') . '/auth/v1';
        $this->apiKey = env('DB_PASSWORD');
    }

    public function login($email, $password)
    {
        $response = Http::withHeaders([
            'apikey' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->post($this->baseUrl . '/token?grant_type=password', [
            'email' => $email,
            'password' => $password,
        ]);

        return $response->json();
    }

    public function logout($accessToken)
    {
        // Implement logout if necessary
    }
}
