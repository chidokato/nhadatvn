@extends('frontend.layouts.app')

@section('title', $pageTitle ?? $category->name)
@section('meta_description', $pageDescription ?? ($category->description ?: 'Danh sach san pham'))

@push('styles')
    <style>
        .product-list-sidebar {
            padding: 28px;
            border-radius: 24px;
            background: #fff;
            border: 1px solid rgba(20, 24, 32, 0.08);
        }

        .product-list-sidebar .category-tree,
        .product-list-sidebar .category-tree ul {
            display: grid;
            gap: 12px;
            list-style: none;
            padding-left: 0;
            margin: 0;
        }

        .product-list-sidebar .category-tree ul {
            padding-left: 18px;
            margin-top: 12px;
            border-left: 1px solid rgba(20, 24, 32, 0.08);
        }

        .product-list-card .img-style,
        .product-list-row .img-style {
            display: block;
            overflow: hidden;
            border-radius: 24px;
        }

        .product-list-card .img-style img {
            width: 100%;
            height: 280px;
            object-fit: cover;
        }

        .product-list-row .img-style img {
            width: 100%;
            height: 100%;
            min-height: 260px;
            object-fit: cover;
        }

        .product-empty-state {
            padding: 48px 32px;
            border-radius: 24px;
            border: 1px dashed rgba(20, 24, 32, 0.16);
            background: rgba(246, 247, 249, 1);
            text-align: center;
        }

        @media (max-width: 991.98px) {
            .product-list-row .img-style img {
                min-height: 220px;
            }
        }
    </style>
@endpush

@section('content')
    @php
        $formatNumber = static fn ($value) => filled($value) ? number_format((float) $value, 0, ',', '.') : null;
        $formatDecimal = static fn ($value) => filled($value) ? rtrim(rtrim(number_format((float) $value, 2, '.', ''), '0'), '.') : null;
        $formatRange = static function ($from, $to, $suffix = '') use ($formatDecimal) {
            $fromValue = $formatDecimal($from);
            $toValue = $formatDecimal($to);

            if ($fromValue && $toValue) {
                return $fromValue . ' - ' . $toValue . $suffix;
            }

            if ($fromValue) {
                return 'Tu ' . $fromValue . $suffix;
            }

            if ($toValue) {
                return 'Den ' . $toValue . $suffix;
            }

            return null;
        };

        $productImage = static fn ($product) => $product->image ? asset(ltrim($product->image, '/')) : asset('images/section/properties-details-12.jpg');
        $productPrice = static fn ($product) => filled($product->price) ? $formatNumber($product->price) . ' VND' : 'Lien he';
        $productArea = static fn ($product) => $product->area ? $formatDecimal($product->area) . ' m2' : $formatRange($product->area_from, $product->area_to, ' m2');
        $productBedrooms = static fn ($product) => filled($product->bedroom_count) ? $product->bedroom_count . ' PN' : $formatRange($product->bedroom_count_from, $product->bedroom_count_to, ' PN');
        $productBathrooms = static fn ($product) => filled($product->bathroom_count) ? $product->bathroom_count . ' PT' : $formatRange($product->bathroom_count_from, $product->bathroom_count_to, ' PT');
    @endphp

    <div class="main-content">
        <div class="tf-spacing-1 section-properties">
            <div class="tf-container">
                <div class="box-title mb_40">
                    <div>
                        <ul class="breadcrumb style-1 text-button fw-4 mb_4">
                            <li><a href="{{ route('frontend.home') }}">Trang chu</a></li>
                            <li>{{ $category->name }}</li>
                        </ul>
                        <h4>{{ $category->name }}</h4>
                        @if ($category->description)
                            <p class="text-body-default text_secondary-color mt_12 mb-0">{{ $category->description }}</p>
                        @endif
                    </div>
                    <div class="right d-flex gap_12 align-items-center">
                        <span class="text-body-default text_secondary-color">{{ $products->count() }} du an</span>
                        <ul class="nav-tab-filter align-items-center group-layout d-flex gap_12" role="tablist">
                            <li class="nav-tab-item" role="presentation">
                                <a href="#gridLayout" class="btn-layout grid nav-link-item active" data-bs-toggle="tab">
                                    <i class="icon-SquaresFour"></i>
                                </a>
                            </li>
                            <li class="nav-tab-item" role="presentation">
                                <a href="#listLayout" class="nav-link-item btn-layout list" data-bs-toggle="tab">
                                    <i class="icon-Rows"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="product-list-sidebar">
                            <h5 class="mb_20">Danh muc du an</h5>
                            <ul class="category-tree">
                                @foreach ($categoryTree as $treeCategory)
                                    @include('frontend.partials.category-tree-item', [
                                        'category' => $treeCategory,
                                        'currentCategory' => $category,
                                    ])
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="flat-animate-tab">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="gridLayout" role="tabpanel">
                                    @if ($products->isEmpty())
                                        <div class="product-empty-state">
                                            <h5 class="mb_12">Chua co du an trong danh muc nay</h5>
                                            <p class="text-body-default text_secondary-color mb-0">
                                                Noi dung se duoc cap nhat trong thoi gian toi.
                                            </p>
                                        </div>
                                    @else
                                        <div class="tf-grid-layout md-col-2">
                                            @foreach ($products as $product)
                                                @php
                                                    $image = $productImage($product);
                                                    $price = $productPrice($product);
                                                    $area = $productArea($product);
                                                    $bedrooms = $productBedrooms($product);
                                                    $bathrooms = $productBathrooms($product);
                                                @endphp
                                                <div class="card-house style-default hover-image product-list-card" data-id="{{ $product->id }}">
                                                    <div class="img-style mb_20">
                                                        <img loading="lazy" decoding="async" src="{{ $image }}" alt="{{ $product->title }}">
                                                        <div class="wrap-tag d-flex gap_8 mb_12 flex-wrap">
                                                            <div class="tag sale text-button-small fw-6 text_primary-color">Du an</div>
                                                            @if ($product->category)
                                                                <div class="tag categoreis text-button-small fw-6 text_primary-color">
                                                                    {{ $product->category->name }}
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <a href="{{ route('frontend.products.show', $product->slug) }}" class="overlay-link"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="price mb_12">{{ $price }}</h4>
                                                        <a href="{{ route('frontend.products.show', $product->slug) }}" class="title mb_8 h5 link text_primary-color">
                                                            {{ $product->title }}
                                                        </a>
                                                        <p>{{ $product->address ?: 'Thong tin vi tri dang cap nhat' }}</p>
                                                        <ul class="info d-flex flex-wrap">
                                                            <li class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                                <i class="icon-Bed"></i>{{ $bedrooms ?: 'Dang cap nhat' }}
                                                            </li>
                                                            <li class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                                <i class="icon-Bathstub"></i>{{ $bathrooms ?: 'Dang cap nhat' }}
                                                            </li>
                                                            <li class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                                <i class="icon-Ruler"></i>{{ $area ?: 'Dang cap nhat' }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>

                                <div class="tab-pane" id="listLayout" role="tabpanel">
                                    @if ($products->isEmpty())
                                        <div class="product-empty-state">
                                            <h5 class="mb_12">Chua co du an trong danh muc nay</h5>
                                            <p class="text-body-default text_secondary-color mb-0">
                                                Noi dung se duoc cap nhat trong thoi gian toi.
                                            </p>
                                        </div>
                                    @else
                                        <div class="d-grid gap_30">
                                            @foreach ($products as $product)
                                                @php
                                                    $image = $productImage($product);
                                                    $price = $productPrice($product);
                                                    $area = $productArea($product);
                                                    $bedrooms = $productBedrooms($product);
                                                    $bathrooms = $productBathrooms($product);
                                                @endphp
                                                <div class="card-house style-list v3 product-list-row" data-id="{{ $product->id }}">
                                                    <div class="wrap-img">
                                                        <a href="{{ route('frontend.products.show', $product->slug) }}" class="img-style">
                                                            <img loading="lazy" decoding="async" src="{{ $image }}" alt="{{ $product->title }}">
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <div class="d-flex align-items-center gap_6 top mb_16 flex-wrap justify-content-between">
                                                            <h4 class="price">{{ $price }}</h4>
                                                            <div class="wrap-tag d-flex gap_8 mb_12 flex-wrap">
                                                                <div class="tag sale text-button-small fw-6 text_primary-color">Du an</div>
                                                                @if ($product->category)
                                                                    <div class="tag categoreis text-button-small fw-6 text_primary-color">
                                                                        {{ $product->category->name }}
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('frontend.products.show', $product->slug) }}" class="title mb_8 h5 link text_primary-color">
                                                            {{ $product->title }}
                                                        </a>
                                                        <p>{{ $product->address ?: 'Thong tin vi tri dang cap nhat' }}</p>
                                                        @if ($product->summary)
                                                            <p class="mb_16">{{ \Illuminate\Support\Str::limit(strip_tags($product->summary), 140) }}</p>
                                                        @endif
                                                        <ul class="info d-flex flex-wrap">
                                                            <li class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                                <i class="icon-Bed"></i>{{ $bedrooms ?: 'Dang cap nhat' }}
                                                            </li>
                                                            <li class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                                <i class="icon-Bathstub"></i>{{ $bathrooms ?: 'Dang cap nhat' }}
                                                            </li>
                                                            <li class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                                <i class="icon-Ruler"></i>{{ $area ?: 'Dang cap nhat' }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
