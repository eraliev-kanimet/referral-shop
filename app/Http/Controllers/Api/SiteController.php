<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Stevebauman\Location\Facades\Location;

class SiteController extends Controller
{
    protected array $response = [
        'isAuth' => false,
    ];

    public function index()
    {
        if (!session()->has('clientInfo')) {
            session()->put('clientInfo', Location::get());
        }

        $this->response['country'] = session('clientInfo')->countryCode;

        return response()->json($this->response);
    }
}
