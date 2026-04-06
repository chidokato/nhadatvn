<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PageController extends BaseFrontendController
{
    public function productCategory(string $slug)
    {
        $category = Category::query()
            ->where('type', Category::TYPE_PRODUCT)
            ->where('is_active', true)
            ->where('slug', $slug)
            ->firstOrFail();

        $allCategories = Category::query()
            ->where('type', Category::TYPE_PRODUCT)
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        $categoryIds = $this->collectDescendantIds($allCategories, $category->id);
        $categoryTree = $this->buildCategoryTree($allCategories);

        $products = Post::query()
            ->with('category')
            ->where('type', Post::TYPE_PRODUCT)
            ->where('is_active', true)
            ->whereIn('category_id', $categoryIds)
            ->orderByDesc('published_at')
            ->orderByDesc('id')
            ->get();

        return view('frontend.products.index', $this->sharedViewData([
            'category' => $category,
            'categoryTree' => $categoryTree,
            'products' => $products,
            'pageTitle' => $category->seo_title ?: $category->name,
            'pageDescription' => $category->seo_description,
        ]));
    }

    public function categoryBySlug(string $slug)
    {
        $category = Category::query()
            ->where('is_active', true)
            ->where('slug', $slug)
            ->firstOrFail();

        if ($category->type === Category::TYPE_PRODUCT) {
            return $this->productCategory($slug);
        }

        return $this->newsCategory($slug);
    }

    public function legacyProductShow(string $slug)
    {
        $product = Post::query()
            ->with(['category', 'galleryImages'])
            ->where('type', Post::TYPE_PRODUCT)
            ->where('is_active', true)
            ->where('slug', $slug)
            ->firstOrFail();

        return redirect()->to($product->frontend_url, 301);
    }

    public function legacyNewsShow(string $slug)
    {
        $post = Post::query()
            ->with('category')
            ->where('type', Post::TYPE_NEWS)
            ->where('is_active', true)
            ->where('slug', $slug)
            ->firstOrFail();

        return redirect()->to($post->frontend_url, 301);
    }

    public function contentShow(string $categorySlug, string $slug)
    {
        $category = Category::query()
            ->where('is_active', true)
            ->where('slug', $categorySlug)
            ->firstOrFail();

        if ($category->type === Category::TYPE_PRODUCT) {
            $product = Post::query()
                ->with(['category', 'galleryImages', 'seller'])
                ->where('type', Post::TYPE_PRODUCT)
                ->where('is_active', true)
                ->where('category_id', $category->id)
                ->where('slug', $slug)
                ->firstOrFail();

            return $this->renderProductShow($product);
        }

        $post = Post::query()
            ->with('category')
            ->where('type', Post::TYPE_NEWS)
            ->where('is_active', true)
            ->where('category_id', $category->id)
            ->where('slug', $slug)
            ->firstOrFail();

        return $this->renderNewsShow($post);
    }

    protected function renderProductShow(Post $product)
    {
        $contactSeller = User::query()
            ->orderBy('id')
            ->first();

        if ($product->relationLoaded('seller') && $product->seller) {
            $contactSeller = $product->seller;
        }

        $relatedProducts = Post::query()
            ->with('category')
            ->where('type', Post::TYPE_PRODUCT)
            ->where('is_active', true)
            ->where('id', '!=', $product->id)
            ->when($product->category_id, function ($query) use ($product) {
                $query->where('category_id', $product->category_id);
            })
            ->orderByDesc('published_at')
            ->orderByDesc('id')
            ->limit(3)
            ->get();

        return view('frontend.products.show', $this->sharedViewData([
            'product' => $product,
            'contactSeller' => $contactSeller,
            'relatedProducts' => $relatedProducts,
            'pageTitle' => $product->seo_title ?: $product->title,
            'pageDescription' => $product->seo_description ?: $product->summary,
        ]));
    }

    public function newsIndex()
    {
        $categories = Category::query()
            ->where('type', Category::TYPE_NEWS)
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        $posts = Post::query()
            ->with('category')
            ->where('type', Post::TYPE_NEWS)
            ->where('is_active', true)
            ->orderByDesc('published_at')
            ->orderByDesc('id')
            ->get();

        return view('frontend.news.index', $this->sharedViewData([
            'currentCategory' => null,
            'categories' => $categories,
            'posts' => $posts,
            'recentPosts' => $posts->take(5),
            'pageTitle' => 'Tin tuc',
            'pageDescription' => 'Tin tuc va bai viet moi nhat.',
        ]));
    }

    public function newsCategory(string $slug)
    {
        $category = Category::query()
            ->where('type', Category::TYPE_NEWS)
            ->where('is_active', true)
            ->where('slug', $slug)
            ->firstOrFail();

        $allCategories = Category::query()
            ->where('type', Category::TYPE_NEWS)
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        $categoryIds = $this->collectDescendantIds($allCategories, $category->id);

        $posts = Post::query()
            ->with('category')
            ->where('type', Post::TYPE_NEWS)
            ->where('is_active', true)
            ->whereIn('category_id', $categoryIds)
            ->orderByDesc('published_at')
            ->orderByDesc('id')
            ->get();

        return view('frontend.news.index', $this->sharedViewData([
            'currentCategory' => $category,
            'categories' => $allCategories,
            'posts' => $posts,
            'recentPosts' => $posts->take(5),
            'pageTitle' => $category->seo_title ?: $category->name,
            'pageDescription' => $category->seo_description,
        ]));
    }

    protected function renderNewsShow(Post $post)
    {
        $relatedPosts = Post::query()
            ->with('category')
            ->where('type', Post::TYPE_NEWS)
            ->where('is_active', true)
            ->where('id', '!=', $post->id)
            ->when($post->category_id, function ($query) use ($post) {
                $query->where('category_id', $post->category_id);
            })
            ->orderByDesc('published_at')
            ->orderByDesc('id')
            ->limit(3)
            ->get();

        $categories = Category::query()
            ->where('type', Category::TYPE_NEWS)
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        $recentPosts = Post::query()
            ->with('category')
            ->where('type', Post::TYPE_NEWS)
            ->where('is_active', true)
            ->where('id', '!=', $post->id)
            ->orderByDesc('published_at')
            ->orderByDesc('id')
            ->limit(5)
            ->get();

        return view('frontend.news.show', $this->sharedViewData([
            'post' => $post,
            'categories' => $categories,
            'recentPosts' => $recentPosts,
            'relatedPosts' => $relatedPosts,
            'pageTitle' => $post->seo_title ?: $post->title,
            'pageDescription' => $post->seo_description ?: $post->summary,
        ]));
    }

    public function about()
    {
        return view('frontend.pages.about', $this->sharedViewData([
            'pageTitle' => 'Gioi thieu',
            'pageDescription' => 'Thong tin gioi thieu ve cong ty.',
        ]));
    }

    public function contact()
    {
        return view('frontend.pages.contact', $this->sharedViewData([
            'pageTitle' => 'Lien he',
            'pageDescription' => 'Thong tin lien he voi chung toi.',
        ]));
    }
}
