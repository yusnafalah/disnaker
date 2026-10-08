<?php

namespace App\Http\Controllers;

use App\Services\ApiService;
use Illuminate\Http\Request;

class JobController extends Controller
{
    protected ApiService $api;

    public function __construct(ApiService $api)
    {
        $this->api = $api;
    }

    /*
    |--------------------------------------------------------------------------
    | DAFTAR LOWONGAN
    |--------------------------------------------------------------------------
    */

    public function index(Request $request)
    {
        $params = [];

        if ($request->filled('search')) {
            $params['search'] = $request->search;
        }

        if ($request->filled('location')) {
            $params['location'] = $request->location;
        }

        if ($request->filled('page')) {
            $params['page'] = $request->page;
        }

        $response = $this->api->get('jobs', $params);

        $jobs = [];

        if ($response->successful()) {
            $result = $response->json();

            $jobs = $result['data'] ?? [];
        }

        return view('lowongan', [
            'jobs' => $jobs,
            'search' => $request->search ?? '',
        ]);
    }


    /*
    |--------------------------------------------------------------------------
    | DETAIL LOWONGAN
    |--------------------------------------------------------------------------
    */

    public function show($id)
    {
        $response = $this->api->get("jobs/{$id}");

        if (!$response->successful()) {
            abort(404, 'Lowongan tidak ditemukan.');
        }

        $result = $response->json();

        $job = $result['data'] ?? $result;

        if (empty($job)) {
            abort(404, 'Lowongan tidak ditemukan.');
        }

        return view('detail-lowongan', [
            'job' => $job,
        ]);
    }


    /*
    |--------------------------------------------------------------------------
    | HALAMAN LAMAR LOWONGAN
    |--------------------------------------------------------------------------
    */

    public function lamar($id)
    {
        $response = $this->api->get("jobs/{$id}");

        if (!$response->successful()) {
            abort(404, 'Lowongan tidak ditemukan.');
        }

        $result = $response->json();

        $job = $result['data'] ?? $result;

        if (empty($job)) {
            abort(404, 'Lowongan tidak ditemukan.');
        }

        return view('lamar-lowongan', [
            'job' => $job,
        ]);
    }
}