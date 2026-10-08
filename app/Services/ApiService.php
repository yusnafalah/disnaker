<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ApiService
{
    protected string $baseUrl;

    public function __construct()
    {
        $this->baseUrl = config('services.backend.url');
    }

    public function get(string $endpoint, array $params = [])
    {
        return Http::get(
            $this->baseUrl . '/' . ltrim($endpoint, '/'),
            $params
        );
    }
}