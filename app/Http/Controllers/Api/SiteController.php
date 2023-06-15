<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Category\CategoryIndexResource;
use App\Http\Resources\UserResource;
use App\Models\Category;
use App\Models\Page;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Stevebauman\Location\Facades\Location;

class SiteController extends Controller
{
    protected Collection $pages;

    protected array $response = [
        'isAuth' => false,
    ];

    public function index()
    {
        $this->pages = Page::all();

        $this->setClientInfo();

        $this->setCountryCode();

        $this->checkAuthentication();

        $this->setCategories();

        $this->setTestimonials();

        $this->setFaq();

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

    protected function setCategories()
    {
        $this->response['categories'] = CategoryIndexResource::collection(Category::with('products')->get());
    }

    protected function setTestimonials()
    {
        $page = $this->pages->where('name', 'testimonials')->first();

        $testimonials = [];

        foreach ($page->content as $content) {
            if ($content['avatar']) {
                $content['avatar'] = asset('storage/' . $content['avatar']);
            }

            $testimonials[] = $content;
        }

        $this->response['testimonials'] = $testimonials;
    }

    protected function setFaq()
    {
        $page = $this->pages->where('name', 'faq')->first();

        $this->response['faq'] = $page->content;
    }
}
