<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Stevebauman\Location\Facades\Location;

class SiteController extends Controller
{
    protected array $response = [
        'isAuth' => false,
    ];

    public function index()
    {
        $this->setClientInfo();

        $this->setCountryCode();

        $this->checkAuthentication();

        return response()->json($this->response);
    }

    protected function setClientInfo()
    {
        if (!session()->has('clientInfo')) {
            session()->put('clientInfo', Location::get());
        }
    }

    protected function setCountryCode()
    {
        $this->response['country'] = session('clientInfo')->countryCode;
    }

    protected function checkAuthentication()
    {
        if (Auth::guard('api')->check()) {
            $this->response['isAuth'] = true;
            $this->response['user'] = new UserResource(Auth::guard('api')->user());
        }
    }
}
