<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    @php
        $frontendBase = request()->getSchemeAndHttpHost() . request()->getBaseUrl();
        $frontendBase = rtrim($frontendBase, '/');
    @endphp
    <base href="{{asset('')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title', $pageTitle ?? 'NhaDatVN')</title>
    <meta name="description" content="@yield('meta_description', $pageDescription ?? 'Website bat dong san NhaDatVN.')">
    <meta name="keywords" content="RealEstate, Buy, Rent, Homes, Apartment, Listings, Sale, Rental, Housing">
    <meta name="author" content="NhaDatVN">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ $frontendBase }}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ $frontendBase }}/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="{{ $frontendBase }}/css/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="{{ $frontendBase }}/css/odometer.min.css">
    <link rel="stylesheet" type="text/css" href="{{ $frontendBase }}/css/sib-styles.css">
    <link rel="stylesheet" type="text/css" href="{{ $frontendBase }}/css/styles.css">
    <link rel="stylesheet" href="{{ $frontendBase }}/font/fonts.css">
    <link rel="stylesheet" type="text/css" href="{{ $frontendBase }}/icons/icomoon/style.css">
    <link rel="shortcut icon" href="{{ $settings && $settings->favicon ? $frontendBase . '/' . ltrim($settings->favicon, '/') : $frontendBase . '/images/favicon.svg' }}">
    <link rel="apple-touch-icon-precomposed" href="{{ $settings && $settings->favicon ? $frontendBase . '/' . ltrim($settings->favicon, '/') : $frontendBase . '/images/favicon.svg' }}">
    @stack('styles')
</head>
<body>
    <div id="wrapper" class="counter-scroll">
        @include('frontend.partials.header')
        @yield('content')
        @include('frontend.partials.footer')
    </div>

    <div class="modal fade" id="customer-info-modal" tabindex="-1" aria-labelledby="customer-info-modal-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-4 overflow-hidden">
                <div class="modal-header px-4 py-3 border-0">
                    <div>
                        <h5 class="modal-title text_primary-color" id="customer-info-modal-label">Thong tin khach hang</h5>
                        <p class="mb-0 text_secondary-color">Vui long de lai thong tin, chung toi se lien he voi ban som nhat.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-4 pb-4 pt-0">
                    <form class="d-grid gap_16">
                        <div>
                            <label for="customer-name" class="text-button text_primary-color mb_8">Ho ten</label>
                            <fieldset>
                                <input type="text" id="customer-name" name="name" placeholder="Nhap ho ten">
                            </fieldset>
                        </div>
                        <div>
                            <label for="customer-phone" class="text-button text_primary-color mb_8">So dien thoai</label>
                            <fieldset>
                                <input type="text" id="customer-phone" name="phone" placeholder="Nhap so dien thoai">
                            </fieldset>
                        </div>
                        <div>
                            <label for="customer-email" class="text-button text_primary-color mb_8">Email</label>
                            <fieldset>
                                <input type="email" id="customer-email" name="email" placeholder="Nhap email">
                            </fieldset>
                        </div>
                        <button type="button" class="tf-btn border-0 w-100">
                            <span>Gui thong tin</span>
                            <span class="bg-effect"></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ $frontendBase }}/js/bootstrap.min.js"></script>
    <script src="{{ $frontendBase }}/js/jquery.min.js"></script>
    <script src="{{ $frontendBase }}/js/splitting.min.js"></script>
    <script src="{{ $frontendBase }}/js/swiper-bundle.min.js"></script>
    <script src="{{ $frontendBase }}/js/carousel.js"></script>
    <script src="{{ $frontendBase }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ $frontendBase }}/js/odometer.min.js"></script>
    <script src="{{ $frontendBase }}/js/counter.js"></script>
    <script src="{{ $frontendBase }}/js/parallaxie.js"></script>
    <script src="{{ $frontendBase }}/js/infinityslide.js"></script>
    <script src="{{ $frontendBase }}/js/ScrollSmooth.js"></script>
    <script src="{{ $frontendBase }}/js/ScrollTrigger.min.js"></script>
    <script src="{{ $frontendBase }}/js/SplitText.min.js"></script>
    <script src="{{ $frontendBase }}/js/gsap.min.js"></script>
    <script src="{{ $frontendBase }}/js/handleGsap.js"></script>
    <script src="{{ $frontendBase }}/js/main.js"></script>
    @stack('scripts')
</body>
</html>
