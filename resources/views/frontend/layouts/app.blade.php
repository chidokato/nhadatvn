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
    <style>
        .customer-modal .modal-content {
            border-radius: 24px;
            box-shadow: 0 24px 64px rgba(14, 22, 35, 0.24);
        }

        .customer-modal .modal-header {
            background: linear-gradient(145deg, #fffaf2 0%, #ffffff 70%);
            border-bottom: 1px solid rgba(25, 32, 45, 0.08);
        }

        .customer-modal .modal-title {
            font-size: 28px;
            line-height: 1.2;
            font-weight: 700;
        }

        .customer-modal .modal-subtitle {
            color: #697586;
            font-size: 16px;
            margin-top: 6px;
        }

        .customer-modal .customer-field label {
            font-weight: 600;
            margin-bottom: 8px;
        }

        .customer-modal .customer-field input {
            border: 1px solid #d5dbe3;
            border-radius: 12px;
            padding: 13px 16px;
            height: auto;
            transition: all 0.2s ease;
        }

        .customer-modal .customer-field input:focus {
            border-color: #d7df50;
            box-shadow: 0 0 0 4px rgba(215, 223, 80, 0.16);
        }

        .customer-modal .policy-note {
            color: #697586;
            font-size: 13px;
            line-height: 1.5;
            margin-top: 12px;
        }

        .customer-modal .policy-note a {
            color: #172554;
            font-weight: 600;
            text-decoration: underline;
        }
    </style>
    @stack('styles')
</head>
<body>
    <div id="wrapper" class="counter-scroll">
        @include('frontend.partials.header')
        @yield('content')
        @include('frontend.partials.footer')
    </div>

    <div class="modal fade customer-modal" id="customer-info-modal" tabindex="-1" aria-labelledby="customer-info-modal-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 overflow-hidden">
                <div class="modal-header px-5 py-5 border-0">
                    <div>
                        <h5 class="modal-title text_primary-color" id="customer-info-modal-label">Thông tin khách hàng</h5>
                        <p class="mb-0 modal-subtitle">Vui lòng để lại thông tin, chúng tôi sẽ liên hệ với bạn sớm nhất.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-5 pb-5 pt-0">
                    <form class="d-grid gap_16">
                        <div class="customer-field">
                            <label for="customer-name" class="text-button text_primary-color mb_8">Họ và tên</label>
                            <fieldset>
                                <input type="text" id="customer-name" name="name" placeholder="Nhập họ và tên">
                            </fieldset>
                        </div>
                        <div class="customer-field">
                            <label for="customer-phone" class="text-button text_primary-color mb_8">Số điện thoại</label>
                            <fieldset>
                                <input type="text" id="customer-phone" name="phone" placeholder="Nhập số điện thoại">
                            </fieldset>
                        </div>
                        <div class="customer-field">
                            <label for="customer-email" class="text-button text_primary-color mb_8">Email</label>
                            <fieldset>
                                <input type="email" id="customer-email" name="email" placeholder="Nhập email">
                            </fieldset>
                        </div>
                        <button type="button" class="tf-btn border-0 w-100">
                            <span>Tải xuống</span>
                            <span class="bg-effect"></span>
                        </button>
                        <p class="policy-note mb-0">
                            ( * ) Bằng việc nhấn vào nút "tải xuống". Quý khách đồng ý với <a href="{{ route('frontend.contact') }}">chính sách bảo mật thông tin</a> của chúng tôi
                        </p>
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
