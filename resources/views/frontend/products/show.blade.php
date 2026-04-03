@extends('frontend.layouts.app')

@section('title', $pageTitle ?? $product->title)
@section('meta_description', $pageDescription ?? ($product->summary ?: 'Chi tiet du an'))

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <style>
        .project-detail-content {
            color: var(--Secondary);
            line-height: 1.8;
        }

        .project-detail-content > *:last-child {
            margin-bottom: 0;
        }

        .project-detail-card {
            padding: 32px;
            border-radius: 24px;
            border: 1px solid rgba(20, 24, 32, 0.08);
            background: #fff;
        }

        .project-detail-list {
            display: grid;
            gap: 14px;
        }

        .project-detail-list li {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding-bottom: 14px;
            border-bottom: 1px solid rgba(20, 24, 32, 0.08);
        }

        .project-detail-list li:last-child {
            padding-bottom: 0;
            border-bottom: 0;
        }

        .project-related-card .img-style {
            display: block;
            overflow: hidden;
            border-radius: 24px;
        }

        .project-related-card .img-style img {
            width: 100%;
            height: 280px;
            object-fit: cover;
        }

        .project-gallery-thumb img {
            width: 100%;
            height: 100px;
            object-fit: cover;
            border-radius: 18px;
        }

        .project-gallery-main img {
            width: 100%;
            height: 680px;
            object-fit: cover;
            border-radius: 32px;
        }

        .project-summary {
            padding: 24px 28px;
            border-radius: 24px;
            background: rgba(246, 247, 249, 1);
        }

        .project-sticky-box {
            position: sticky;
            top: 120px;
        }

        @media (max-width: 991.98px) {
            .project-gallery-main img {
                height: 420px;
            }

            .project-sticky-box {
                position: static;
            }
        }

        @media (max-width: 767.98px) {
            .project-detail-card {
                padding: 24px;
                border-radius: 20px;
            }

            .project-gallery-main img {
                height: 280px;
                border-radius: 24px;
            }

            .project-gallery-thumb img {
                height: 72px;
                border-radius: 14px;
            }
        }
    </style>
@endpush

@section('content')
    @php
        $gallery = collect([$product->image])
            ->merge($product->galleryImages->pluck('image'))
            ->filter()
            ->unique()
            ->values();

        if ($gallery->isEmpty()) {
            $gallery = collect(['images/section/properties-details-11.jpg']);
        }

        $displayImage = static fn ($path) => asset(ltrim($path, '/'));
        $displayText = static fn ($value, $fallback = 'Dang cap nhat') => filled($value) ? $value : $fallback;
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

        $areaText = $product->area ? $formatDecimal($product->area) . ' m2' : $formatRange($product->area_from, $product->area_to, ' m2');
        $floorText = filled($product->floor_count) ? $product->floor_count . ' tang' : $formatRange($product->floor_count_from, $product->floor_count_to, ' tang');
        $unitText = filled($product->unit_count) ? $product->unit_count . ' can' : $formatRange($product->unit_count_from, $product->unit_count_to, ' can');
        $bedroomText = filled($product->bedroom_count) ? $product->bedroom_count . ' phong ngu' : $formatRange($product->bedroom_count_from, $product->bedroom_count_to, ' phong ngu');
        $bathroomText = filled($product->bathroom_count) ? $product->bathroom_count . ' phong tam' : $formatRange($product->bathroom_count_from, $product->bathroom_count_to, ' phong tam');
        $priceText = filled($product->price) ? $formatNumber($product->price) . ' VND' : 'Lien he';
        $summaryText = $product->summary ?: strip_tags($product->content ?? '');
    @endphp

    <div class="main-content section-onepage">
        <div class="properties-details tf-spacing-1 pt-0">
            <div class="properties-hero">
                <div class="properties-title">
                    <div>
                        <ul class="breadcrumb style-1 text-button fw-4 mb_16">
                            <li><a href="{{ route('frontend.home') }}">Trang chu</a></li>
                            @if ($product->category)
                                <li>
                                    <a href="{{ route('frontend.categories.show', $product->category->slug) }}">{{ $product->category->name }}</a>
                                </li>
                            @endif
                            <li>{{ $product->title }}</li>
                        </ul>
                        <div class="wrap-tag d-flex gap_12 mb_16 flex-wrap">
                            <div class="tag sale text-title fw-6 text_primary-color">
                                Du an
                            </div>
                            @if ($product->category)
                                <div class="tag categoreis text-title fw-6 text_primary-color">
                                    {{ $product->category->name }}
                                </div>
                            @endif
                        </div>
                        <h2>{{ $product->title }}</h2>
                        <ul class="list-action d-flex gap_16 flex-wrap">
                            <li>
                                <span class="gap_8 d-inline-flex align-items-center">
                                    <i class="icon-MapPin"></i>
                                    <span class="text-button">{{ $displayText($product->address) }}</span>
                                </span>
                            </li>
                            <li>
                                <span class="gap_8 d-inline-flex align-items-center">
                                    <i class="icon-HouseSimple"></i>
                                    <span class="text-button">Ma du an: #{{ $product->id }}</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="mb_16">Gia tham khao:</h5>
                        <h2 class="price">{{ $priceText }}</h2>
                        @if ($product->published_at)
                            <p class="text-body-default text_secondary-color mt_12">
                                Cap nhat {{ $product->published_at->format('d/m/Y') }}
                            </p>
                        @endif
                    </div>
                </div>

                <div class="right">
                    <div class="wrap-thumb">
                        <div class="swiper sw-single">
                            <div class="swiper-wrapper">
                                @foreach ($gallery as $image)
                                    <div class="swiper-slide">
                                        <div class="thumb-main project-gallery-main">
                                            <a href="{{ $displayImage($image) }}" data-fancybox="project-gallery" class="img-style">
                                                <img src="{{ $displayImage($image) }}" alt="{{ $product->title }}">
                                            </a>
                                            <div class="wrap-btn d-flex gap_10 flex-wrap">
                                                <button type="button" class="tf-btn btn-bg-1 border-0" data-bs-toggle="modal" data-bs-target="#customer-info-modal">
                                                    <span class="d-flex align-items-center gap_8">
                                                        <i class="icon-PhoneCall"></i>Nhan tu van
                                                    </span>
                                                    <span class="bg-effect"></span>
                                                </button>
                                                <a href="{{ $displayImage($image) }}" data-fancybox="project-gallery" class="tf-btn btn-bg-1">
                                                    <span class="d-flex align-items-center gap_8">
                                                        <i class="icon-Image"></i>Xem album
                                                    </span>
                                                    <span class="bg-effect"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @if ($gallery->count() > 1)
                        <div class="sw-button sw-thumbs-prev">
                            <i class="icon-CaretLeft"></i>
                        </div>
                        <div class="sw-button sw-thumbs-next">
                            <i class="icon-CaretRight"></i>
                        </div>
                    @endif
                    <div class="wrap-pagi">
                        <div class="swiper thumbs-sw-pagi" data-preview="6" data-mobile="3" data-space="12">
                            <div class="swiper-wrapper">
                                @foreach ($gallery as $image)
                                    <div class="swiper-slide">
                                        <div class="image-detail project-gallery-thumb">
                                            <img src="{{ $displayImage($image) }}" alt="{{ $product->title }} thumbnail">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="properties-menut-list">
                <div class="tf-container">
                    <ul class="tab-slide overflow-x-auto" id="navbar">
                        <li class="text-button nav-tab-item text_primary-color active"><a href="#tong-quan" class="nav_link">Tong quan</a></li>
                        <li class="text-button nav-tab-item text_primary-color"><a href="#thong-so" class="nav_link">Thong so</a></li>
                        <li class="text-button nav-tab-item text_primary-color"><a href="#mo-ta" class="nav_link">Mo ta</a></li>
                        <li class="text-button nav-tab-item text_primary-color"><a href="#vi-tri" class="nav_link">Vi tri</a></li>
                    </ul>
                </div>
            </div>

            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-8">
                        <div id="tong-quan" class="section tf-spacing-9">
                            <div class="properties-overview v3 properties-2">
                                <h5 class="properties-title mb_20">Tong quan du an</h5>
                                <div class="tf-grid-layout tf-col-2 lg-col-4">
                                    <div class="item d-flex gap_16">
                                        <i class="icon icon-HouseSimple"></i>
                                        <div class="d-flex flex-column gap">
                                            <span class="text-body-default">Ma du an:</span>
                                            <span class="text-title fw-6 text_primary-color">#{{ $product->id }}</span>
                                        </div>
                                    </div>
                                    <div class="item d-flex gap_16">
                                        <i class="icon icon-SlidersHorizontal"></i>
                                        <div class="d-flex flex-column gap">
                                            <span class="text-body-default">Loai hinh:</span>
                                            <span class="text-title fw-6 text_primary-color">{{ $displayText(optional($product->category)->name) }}</span>
                                        </div>
                                    </div>
                                    <div class="item d-flex gap_16">
                                        <i class="icon icon-Ruler"></i>
                                        <div class="d-flex flex-column gap">
                                            <span class="text-body-default">Dien tich:</span>
                                            <span class="text-title fw-6 text_primary-color">{{ $displayText($areaText) }}</span>
                                        </div>
                                    </div>
                                    <div class="item d-flex gap_16">
                                        <i class="icon icon-Money"></i>
                                        <div class="d-flex flex-column gap">
                                            <span class="text-body-default">Gia:</span>
                                            <span class="text-title fw-6 text_primary-color">{{ $priceText }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if (filled(trim($summaryText)))
                                <div class="project-summary mt_32">
                                    <h5 class="properties-title mb_12">Diem nhan du an</h5>
                                    <p class="text-body-default text_secondary-color mb-0">{{ \Illuminate\Support\Str::limit(trim($summaryText), 280) }}</p>
                                </div>
                            @endif
                        </div>

                        <div id="thong-so" class="section tf-spacing-9 pt-0">
                            <div class="project-detail-card">
                                <h5 class="properties-title mb_20">Thong tin chi tiet</h5>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <ul class="project-detail-list list-unstyled mb-0">
                                            <li>
                                                <span class="text-body-default">Danh muc</span>
                                                <strong class="text_primary-color">{{ $displayText(optional($product->category)->name) }}</strong>
                                            </li>
                                            <li>
                                                <span class="text-body-default">Dien tich</span>
                                                <strong class="text_primary-color">{{ $displayText($areaText) }}</strong>
                                            </li>
                                            <li>
                                                <span class="text-body-default">So tang</span>
                                                <strong class="text_primary-color">{{ $displayText($floorText) }}</strong>
                                            </li>
                                            <li>
                                                <span class="text-body-default">So can</span>
                                                <strong class="text_primary-color">{{ $displayText($unitText) }}</strong>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="project-detail-list list-unstyled mb-0">
                                            <li>
                                                <span class="text-body-default">Phong ngu</span>
                                                <strong class="text_primary-color">{{ $displayText($bedroomText) }}</strong>
                                            </li>
                                            <li>
                                                <span class="text-body-default">Phong tam</span>
                                                <strong class="text_primary-color">{{ $displayText($bathroomText) }}</strong>
                                            </li>
                                            <li>
                                                <span class="text-body-default">Gia tham khao</span>
                                                <strong class="text_primary-color">{{ $priceText }}</strong>
                                            </li>
                                            <li>
                                                <span class="text-body-default">Ngay dang</span>
                                                <strong class="text_primary-color">{{ $product->published_at?->format('d/m/Y') ?? 'Dang cap nhat' }}</strong>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="mo-ta" class="section tf-spacing-9 pt-0">
                            <div class="project-detail-card">
                                <h5 class="properties-title mb_20">Mo ta du an</h5>
                                <div class="project-detail-content">
                                    {!! $product->content ?: '<p>Thong tin mo ta dang duoc cap nhat.</p>' !!}
                                </div>
                            </div>
                        </div>

                        <div id="vi-tri" class="section tf-spacing-9 pt-0">
                            <div class="project-detail-card">
                                <h5 class="properties-title mb_20">Vi tri du an</h5>
                                <p class="text-body-default text_secondary-color mb_12">
                                    {{ $displayText($product->address, 'Thong tin dia chi dang duoc cap nhat.') }}
                                </p>
                                <div class="project-summary">
                                    <div class="d-flex align-items-start gap_12">
                                        <i class="icon-MapPin text_primary-color fs-4"></i>
                                        <div>
                                            <h6 class="mb_8">Dia chi</h6>
                                            <p class="text-body-default text_secondary-color mb-0">{{ $displayText($product->address) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="project-sticky-box tf-spacing-9">
                            <div class="project-detail-card mb_30">
                                <h5 class="properties-title mb_20">Nhan thong tin du an</h5>
                                <p class="text-body-default text_secondary-color mb_20">
                                    De lai thong tin de chung toi gui bang gia, mat bang va chinh sach moi nhat cua du an.
                                </p>
                                <button type="button" class="tf-btn w-100 border-0" data-bs-toggle="modal" data-bs-target="#customer-info-modal">
                                    <span>Dang ky tu van</span>
                                    <span class="bg-effect"></span>
                                </button>
                            </div>

                            <div class="project-detail-card">
                                <h5 class="properties-title mb_20">Thong tin nhanh</h5>
                                <ul class="project-detail-list list-unstyled mb-0">
                                    <li>
                                        <span class="text-body-default">So hinh anh</span>
                                        <strong class="text_primary-color">{{ $gallery->count() }}</strong>
                                    </li>
                                    <li>
                                        <span class="text-body-default">Slug</span>
                                        <strong class="text_primary-color">{{ $product->slug }}</strong>
                                    </li>
                                    <li>
                                        <span class="text-body-default">Trang thai</span>
                                        <strong class="text_primary-color">Dang hien thi</strong>
                                    </li>
                                    <li>
                                        <span class="text-body-default">Danh muc</span>
                                        <strong class="text_primary-color">{{ $displayText(optional($product->category)->name) }}</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if ($relatedProducts->isNotEmpty())
            <div class="tf-container tf-spacing-1 pt-0">
                <div class="heading-section mb_48 d-flex justify-content-between align-items-end gap_20 flex-wrap">
                    <div>
                        <h3>Du an lien quan</h3>
                        <p class="text-body-default text_secondary-color mb-0">Nhung du an khac co the phu hop voi nhu cau cua ban.</p>
                    </div>
                </div>
                <div class="row g-4">
                    @foreach ($relatedProducts as $relatedProduct)
                        @php
                            $relatedImage = $relatedProduct->image ? $displayImage($relatedProduct->image) : asset('images/section/properties-details-12.jpg');
                            $relatedPrice = filled($relatedProduct->price) ? $formatNumber($relatedProduct->price) . ' VND' : 'Lien he';
                            $relatedArea = $relatedProduct->area ? $formatDecimal($relatedProduct->area) . ' m2' : $formatRange($relatedProduct->area_from, $relatedProduct->area_to, ' m2');
                        @endphp
                        <div class="col-lg-4 col-md-6">
                            <div class="card-house style-default project-related-card h-100">
                                <a href="{{ route('frontend.products.show', $relatedProduct->slug) }}" class="img-style mb_20">
                                    <img src="{{ $relatedImage }}" alt="{{ $relatedProduct->title }}">
                                </a>
                                <div class="content">
                                    <div class="wrap-tag d-flex gap_8 mb_12 flex-wrap">
                                        <div class="tag sale text-button-small fw-6 text_primary-color">Du an</div>
                                        @if ($relatedProduct->category)
                                            <div class="tag categoreis text-button-small fw-6 text_primary-color">
                                                {{ $relatedProduct->category->name }}
                                            </div>
                                        @endif
                                    </div>
                                    <h4 class="price mb_12">{{ $relatedPrice }}</h4>
                                    <a href="{{ route('frontend.products.show', $relatedProduct->slug) }}" class="title mb_8 h5 link text_primary-color">
                                        {{ $relatedProduct->title }}
                                    </a>
                                    <p>{{ $displayText($relatedProduct->address) }}</p>
                                    <ul class="info d-flex flex-wrap">
                                        <li class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                            <i class="icon-Ruler"></i>{{ $displayText($relatedArea) }}
                                        </li>
                                        <li class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                            <i class="icon-HouseSimple"></i>#{{ $relatedProduct->id }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
@endpush
