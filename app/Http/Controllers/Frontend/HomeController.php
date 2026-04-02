<?php

namespace App\Http\Controllers\Frontend;

class HomeController extends BaseFrontendController
{
    public function index()
    {
        return view('frontend.home', $this->sharedViewData([
            'pageTitle' => 'Trang chủ',
            'pageDescription' => 'Trang chủ bất động sản NhaDatVN.',
        ]));
    }
}
