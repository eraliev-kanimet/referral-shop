<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FormData;
use Illuminate\Http\Request;

class SiteFormController extends Controller
{
    public function subscribe(Request $request)
    {
        return $this->createFormData($request, 'subscribe', [
            'email' => ['required', 'email']
        ]);
    }

    public function contact_us(Request $request)
    {
        return $this->createFormData($request, 'contact_us', [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'category' => ['required'],
            'message' => ['required'],
        ]);
    }

    public function callback(Request $request)
    {
        return $this->createFormData($request, 'callback', [
            'phone' => ['required']
        ]);
    }

    private function createFormData(Request $request, $type, $rules)
    {
        $data = $request->validate($rules);

        FormData::create([
            'type' => $type,
            'data' => $data
        ]);

        return response()->json([], 204);
    }
}
