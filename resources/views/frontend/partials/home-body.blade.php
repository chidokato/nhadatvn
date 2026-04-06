@php
    $heroProducts = ($featuredProducts ?? collect())->take(3)->values();
    $formatNumber = static fn ($value) => filled($value) ? number_format((float) $value, 0, ',', '.') : null;
    $formatDecimal = static fn ($value) => filled($value) ? rtrim(rtrim(number_format((float) $value, 2, '.', ''), '0'), '.') : null;
    $formatPrice = static function ($value) use ($formatDecimal, $formatNumber) {
        if (! filled($value)) {
            return null;
        }

        $amount = (float) $value;

        if ($amount >= 1000000000) {
            return str_replace('.', ',', $formatDecimal($amount / 1000000000)) . ' tỷ';
        }

        if ($amount >= 1000000) {
            return str_replace('.', ',', $formatDecimal($amount / 1000000)) . ' triệu';
        }

        return $formatNumber($amount) . ' VND';
    };
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
    $heroImage = static fn ($product, $fallback) => asset(ltrim($product->image ?: $fallback, '/'));
    $heroPrice = static fn ($product) => $formatPrice($product->price) ?: 'Liên hệ';
    $heroArea = static fn ($product) => $product->area ? $formatDecimal($product->area) . ' m2' : $formatRange($product->area_from, $product->area_to, ' m2');
    $heroBedrooms = static fn ($product) => filled($product->bedroom_count) ? $product->bedroom_count . ' PN' : ($formatRange($product->bedroom_count_from, $product->bedroom_count_to, 'PN') ?: 'Đang cập nhật');
    $heroBathrooms = static fn ($product) => filled($product->bathroom_count) ? $product->bathroom_count . ' WC' : ($formatRange($product->bathroom_count_from, $product->bathroom_count_to, ' WC') ?: 'Đang cập nhật');
    $latestHomeProducts = ($latestProducts ?? collect())->take(3)->values();
    $latestHomeImage = static fn ($path, $fallback) => asset(ltrim($path ?: $fallback, '/'));
    $latestHomePrice = static fn ($product) => $formatPrice($product->price) ?: 'Lien he';
    $latestHomeArea = static fn ($product) => $product->area ? $formatDecimal($product->area) . ' m2' : ($formatRange($product->area_from, $product->area_to, ' m2') ?: 'Dang cap nhat');
    $latestHomeBedrooms = static fn ($product) => filled($product->bedroom_count) ? $product->bedroom_count . ' PN' : ($formatRange($product->bedroom_count_from, $product->bedroom_count_to, ' PN') ?: 'Dang cap nhat');
    $latestHomeBathrooms = static fn ($product) => filled($product->bathroom_count) ? $product->bathroom_count . ' WC' : ($formatRange($product->bathroom_count_from, $product->bathroom_count_to, ' WC') ?: 'Dang cap nhat');
    $latestNewsItems = ($latestNews ?? collect())->take(3)->values();
    $latestNewsImage = static fn ($post, $fallback) => asset(ltrim(($post->image ?: $fallback), '/'));
    $latestNewsDate = static fn ($post) => optional($post->published_at)->format('M d, Y') ?: 'Dang cap nhat';
@endphp

<!-- page-title -->
        <div class="page-title style-5 sw-layout">
            <div class="page-inner">
                <div class="swiper effect-content-slide" data-autoplay="false">
                    <div class="swiper-wrapper">
                        @forelse ($heroProducts as $index => $product)
                            <div class="swiper-slide">
                                <div class="slide-inner">
                                    <div class="thumbs effect-img-zoom ">
                                        <img class="img-zoom" loading="eager" decoding="async"
                                            src="{{ $heroImage($product, $index % 2 === 0 ? 'images/page-title/page-title-10.jpg' : 'images/page-title/page-title-11.jpg') }}"
                                            width="1920" height="760" alt="{{ $product->title }}">
                                    </div>
                                    <div class="content effect-left effect-item effect-1">
                                        <div class="tf-container">
                                            <div class="row justify-content-end">
                                                <div class="col-lg-5 col-sm-9">
                                                    <div class="content-inner">
                                                        <div class="wrap-tag d-flex gap_8 mb_12 effect-left effect-item effect-3">
                                                            <div class="tag sale text-button-small fw-6 text_primary-color">
                                                                Dự án nổi bật
                                                            </div>
                                                            @if ($product->category)
                                                                <div class="tag categoreis text-button-small fw-6 text_primary-color">
                                                                    {{ $product->category->name }}
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <h4 class="price mb_12 effect-left effect-item effect-4">
                                                            {{ $heroPrice($product) }}
                                                        </h4>
                                                        <h4 class="title mb_8 effect-left effect-item effect-5"><a href="{{ $product->frontend_url }}">{{ $product->title }}</a></h4>
                                                        <p class="effect-left effect-item effect-6">{{ $product->address ?: 'Thông tin vị trí đang cập nhật' }}</p>
                                                        <ul class="info d-flex effect-up effect-item effect-7">
                                                            <li class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                                <i class="icon-Bed"></i>{{ $heroBedrooms($product) }}
                                                            </li>
                                                            <li class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                                <i class="icon-Bathstub"></i>{{ $heroBathrooms($product) }}
                                                            </li>
                                                            <li class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                                <i class="icon-Ruler"></i>{{ $heroArea($product) ?: 'Đang cập nhật' }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="swiper-slide">
                                <div class="slide-inner">
                                    <div class="thumbs effect-img-zoom ">
                                        <img class="img-zoom" loading="eager" decoding="async"
                                            src="images/page-title/page-title-10.jpg" width="1920" height="760"
                                            alt="page-title">
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                    <div class="sw-button nav-prev-layout lg-hide">
                        <i class="icon-CaretLeft"></i>
                    </div>
                    <div class="sw-button nav-next-layout lg-hide">
                        <i class="icon-CaretRight"></i>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- End page-title -->

        <!-- main-content -->
        <div class="main-content">
            <!-- section-features-property -->
            <div class="bg-light-color tf-spacing-1">
                <div class="tf-container w-1830">
                    <div class="heading-section justify-content-center text-center mb_40">
                        <span class="sub text-uppercase fw-6 text_secondary-color-2 split-text effect-rotate">Dự án mới nhất</span>
                        <h3 class="split-text effect-blur-fade">Những sản phẩm dành cho bạn !!</h3>
                    </div>
                    <div class="d-grid gap_30">
                        @forelse ($latestHomeProducts as $index => $product)
                            @php
                                $detailUrl = $product->frontend_url;
                                $fallbackIndex = ($index % 3) + 1;
                                $galleryImages = $product->galleryImages->pluck('image')->filter()->values();
                                $mainImage = $latestHomeImage($product->image, 'images/home/home-list-' . $fallbackIndex . '.jpg');
                                $subImageOne = $latestHomeImage($galleryImages->get(0), 'images/home/home-list-' . $fallbackIndex . '.1.jpg');
                                $subImageTwo = $latestHomeImage($galleryImages->get(1), 'images/home/home-list-' . $fallbackIndex . '.2.jpg');
                            @endphp
                            <div class="card-house style-list v1 scrolling-effect effectBottom">
                                <div class="wrap-img">
                                    <a href="{{ $detailUrl }}" class="img-style">
                                        <img loading="lazy" decoding="async" src="{{ $mainImage }}"
                                            srcset="{{ $mainImage }} 600w"
                                            sizes="(max-width: 600px) 100vw, 600px" width="600" height="300" alt="{{ $product->title }}">
                                    </a>
                                    <a href="{{ $detailUrl }}" class="img-style">
                                        <img loading="lazy" decoding="async" src="{{ $subImageOne }}"
                                            srcset="{{ $subImageOne }} 300w"
                                            sizes="(max-width: 300px) 100vw, 300px" width="300" height="300" alt="{{ $product->title }}">
                                    </a>
                                    <a href="{{ $detailUrl }}" class="img-style">
                                        <img loading="lazy" decoding="async" src="{{ $subImageTwo }}"
                                            srcset="{{ $subImageTwo }} 300w"
                                            sizes="(max-width: 300px) 100vw, 300px" width="300" height="300" alt="{{ $product->title }}">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="d-flex align-items-center gap_12 mb_16 flex-wrap justify-content-between">
                                        <h4 class="price ">{{ $latestHomePrice($product) }}</h4>
                                        <div class="wrap-tag d-flex gap_8">
                                            <div class="tag rent text-button-small fw-6 text_primary-color">
                                                Mới nhất
                                            </div>
                                            <div class="tag categoreis text-button-small fw-6 text_primary-color">
                                                {{ $product->category->name ?? 'Dự án' }}
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ $detailUrl }}" class="title mb_8 h5 link text_primary-color ">{{ $product->title }}</a>
                                    <p>{{ $product->address ?: 'Thong tin vi tri dang cap nhat' }}</p>
                                    <ul class="info d-flex">
                                        <li class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                            <i class="icon-Bed"></i>{{ $latestHomeBedrooms($product) }}
                                        </li>
                                        <li class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                            <i class="icon-Bathstub"></i>{{ $latestHomeBathrooms($product) }}
                                        </li>
                                        <li class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                            <i class="icon-Ruler"></i>{{ $latestHomeArea($product) }}
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        @empty
                            <div class="card-house style-list v1 scrolling-effect effectBottom">
                                <div class="content">
                                    <div class="d-flex align-items-center gap_12 mb_16 flex-wrap justify-content-between">
                                        <h4 class="price ">Chưa có dự án</h4>
                                    </div>
                                    <p>Nội dung sẽ được cập nhật sớm.</p>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
            <!-- End section-features-property -->

            <!-- section-why -->
            <div class="section-why-1 tf-spacing-1">
                <div class="tf-container">
                    <div class="box-why">
                        <div class="tf-grid-layout lg-col-2 align-items-center">
                            <div class="thumbs tf-animate-1">
                                <img loading="lazy" decoding="async" src="images/section/section-why.jpg" width="610"
                                    height="813" alt="section-why">
                                <div class="text-center item tf-animate-2 scroll-tranform" data-distance="20%">
                                    <div class="h1 mb_6">16</div>
                                    <h5>Years Of Experience</h5>
                                </div>
                            </div>
                            <div class="content-inner">
                                <div class="heading-section mb_48">
                                    <span class="sub text-uppercase fw-6 split-text effect-rotate">Why CHoose Us</span>
                                    <h3 class="split-text effect-blur-fade">Experience The Difference With Our Solutions
                                    </h3>
                                </div>
                                <div class="wrap-icon">
                                    <div class="tf-box-icon style-2 v2 effect-icon scrolling-effect effectLeft ">
                                        <div class="icon"><i class="icon-Lifebuoy"></i></div>
                                        <div class="content">
                                            <h5 class="mb_8">Personalized Support</h5>
                                            <p class="text_secondary-color-2">Receive tailored assistance from our
                                                experienced team
                                                to ensure every step fits your specific needs and goals.</p>
                                        </div>
                                    </div>
                                    <div class="tf-box-icon style-2 v2 effect-icon scrolling-effect effectLeft ">
                                        <div class="icon"><i class="icon-ClockCountdown
                                            "></i></div>
                                        <div class="content">
                                            <h5 class="mb_8">Time-Saving Process</h5>
                                            <p class="text_secondary-color-2">From quick callbacks to streamlined
                                                procedures, we value your time and help you move forward without delays.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tf-box-icon style-2 v2 effect-icon scrolling-effect effectLeft ">
                                        <div class="icon"><i class="icon-SketchLogo"></i></div>
                                        <div class="content">
                                            <h5 class="mb_8">Trusted Expertise</h5>
                                            <p class="text_secondary-color-2">Work with professionals who bring deep
                                                industry knowledge and proven strategies to guide your decisions
                                                confidently.</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="about-us.html" class="tf-btn btn-bg-1 btn-px-32 scrolling-effect effectBottom">
                                    <span>About Us</span>
                                    <span class="bg-effect"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End section-why -->

            

            


            <!-- section-categories -->
            <div class="sw-layout bg-dark-color tf-spacing-1">
                <div class="tf-container w-1830">
                    <div class="heading-section justify-content-center text-center mb_48">
                        <span
                            class="sub text-uppercase fw-6 text_secondary-color-2 split-text effect-rotate">Căn hộ</span>
                        <h3 class="text_white split-text effect-blur-fade">Có thể bạn đang tìm kiếm ?</h3>
                    </div>
                    <div class="swiper" data-screen-xl="5" data-preview="4" data-tablet="3" data-mobile-sm="2"
                        data-mobile="1" data-space-lg="30" data-space-md="20" data-space="15">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="category-item style-1 hover-image-translate scrolling-effect effectFade "
                                    data-delay="0.1">
                                    <a href="#" class="img-style">
                                        <img src="images/section/category-6.jpg" width="296" height="296"
                                            alt="category">
                                    </a>
                                    <div class="content">
                                        <a href="#" class="mb_8 h5 text_primary-color link">Apartment</a>
                                        <p>263 properties</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-item style-1 hover-image-translate scrolling-effect effectFade "
                                    data-delay="0.2">
                                    <a href="#" class="img-style">
                                        <img src="images/section/category-7.jpg" width="296" height="296"
                                            alt="category">
                                    </a>
                                    <div class="content">
                                        <a href="#" class="mb_8 h5 text_primary-color link">Studio</a>
                                        <p>256 properties</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-item style-1 hover-image-translate scrolling-effect effectFade "
                                    data-delay="0.3">
                                    <a href="#" class="img-style">
                                        <img src="images/section/category-8.jpg" width="296" height="296"
                                            alt="category">
                                    </a>
                                    <div class="content">
                                        <a href="#" class="mb_8 h5 text_primary-color link">Office</a>
                                        <p>312 properties</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-item style-1 hover-image-translate scrolling-effect effectFade "
                                    data-delay="0.4">
                                    <a href="#" class="img-style">
                                        <img src="images/section/category-9.jpg" width="296" height="296"
                                            alt="category">
                                    </a>
                                    <div class="content">
                                        <a href="#" class="mb_8 h5 text_primary-color link">Townhouse</a>
                                        <p>237 properties</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-item style-1 hover-image-translate scrolling-effect effectFade "
                                    data-delay="0.5">
                                    <a href="#" class="img-style">
                                        <img src="images/section/category-10.jpg" width="296" height="296"
                                            alt="category">
                                    </a>
                                    <div class="content">
                                        <a href="#" class="mb_8 h5 text_primary-color link">Commercial</a>
                                        <p>221 properties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sw-dots sw-pagination-layout text-center mt_24">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End section-categories -->

            <!-- section-latest-new -->
            <div class="sw-layout tf-spacing-1">
                <div class="tf-container">
                    <div class="heading-section justify-content-center text-center mb_48">
                        <span class="sub text-uppercase fw-6 text_secondary-color-2 split-text effect-rotate">Cập nhật mới nhất</span>
                        <h3 class="split-text effect-blur-fade">Tin tức thị trường bất động sản !</h3>
                    </div>
                    <div class="swiper " data-preview="3" data-tablet="2" data-mobile-sm="2" data-mobile="1"
                        data-space-lg="30" data-space-md="20" data-space="15">
                        <div class="swiper-wrapper ">
                            @forelse ($latestNewsItems as $index => $post)
                                @php
                                    $newsUrl = $post->frontend_url;
                                    $fallbackImage = match ($index) {
                                        1 => 'images/blog/blog-item-10.jpg',
                                        2 => 'images/blog/blog-item-2.jpg',
                                        default => 'images/blog/blog-item-3.jpg',
                                    };
                                @endphp
                                <div class="swiper-slide">
                                    <div class="blog-article-item style-default hover-image-translate">
                                        <div class="article-thumb image-wrap mb_24">
                                            <img loading="lazy" decoding="async" src="{{ $latestNewsImage($post, $fallbackImage) }}"
                                                width="850" height="478" alt="{{ $post->title }}">
                                            <a href="{{ $newsUrl }}" class="tag text-label text text_primary-color text-uppercase">
                                                {{ $post->category->name ?? 'Tin tuc' }}
                                            </a>
                                            <a href="{{ $newsUrl }}" class="overlay-link"></a>
                                        </div>
                                        <div class="article-content ">
                                            <div class="meta-post d-flex align-items-center mb_12">
                                                <div class="item text_secondary-color text-caption-1 ">Post By <a href="{{ $newsUrl }}"
                                                        class="link text_primary-color">NhaDatVN</a></div>
                                                <div class="item text_secondary-color text-caption-1 ">{{ $latestNewsDate($post) }}</div>
                                            </div>
                                            <h5 class="title ">
                                                <a href="{{ $newsUrl }}" class=" hover-line-text">{{ $post->title }}</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="swiper-slide">
                                    <div class="blog-article-item style-default hover-image-translate">
                                        <div class="article-content ">
                                            <h5 class="title ">
                                                <a href="#" class=" hover-line-text">Chua co tin tuc moi</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                        <div class="sw-dots style-1 sw-pagination-layout text-center mt_24">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End section-latest-new -->
        </div>
        <!-- End main-content -->
