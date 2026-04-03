<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;

class HomeController extends BaseFrontendController
{
    public function index()
    {
        return view('frontend.home', $this->sharedViewData([
            'featuredProducts' => Post::query()
                ->with(['category', 'galleryImages'])
                ->where('type', Post::TYPE_PRODUCT)
                ->where('is_active', true)
                ->where('is_featured', true)
                ->orderByDesc('published_at')
                ->orderByDesc('id')
                ->limit(3)
                ->get(),
            'latestProducts' => Post::query()
                ->with(['category', 'galleryImages'])
                ->where('type', Post::TYPE_PRODUCT)
                ->where('is_active', true)
                ->orderByDesc('published_at')
                ->orderByDesc('id')
                ->limit(10)
                ->get(),
            'latestNews' => Post::query()
                ->with('category')
                ->where('type', Post::TYPE_NEWS)
                ->where('is_active', true)
                ->orderByDesc('published_at')
                ->orderByDesc('id')
                ->limit(3)
                ->get(),
            'pageTitle' => 'Trang chu',
            'pageDescription' => 'Trang chu bat dong san NhaDatVN.',
        ]));
    }
}
