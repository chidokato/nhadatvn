@php
    $frontendBase = rtrim(request()->getSchemeAndHttpHost() . request()->getBaseUrl(), '/');
    $footerLogo = $settings && $settings->footer_logo ? $frontendBase . '/' . ltrim($settings->footer_logo, '/') : $frontendBase . '/images/logo/logo-2.svg';
    $socials = is_array($settings->social ?? null) ? $settings->social : [];
@endphp

<footer class="footer">
    <div class="tf-container">
        <div class="footer-body">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-about footer-item">
                        <a href="{{ route('frontend.home') }}" class="footer-logo mb_17">
                            <img src="{{ $footerLogo }}" alt="logo" class="main-logo">
                        </a>
                        <div class="mb_16">
                            <p class="mb_4 text_color-1">Dia chi:</p>
                            <p class="text_white">{{ $settings->address ?? 'Dang cap nhat dia chi' }}</p>
                        </div>
                        <div class="text-body-default text_secondary-color mb_16">
                            <span class="text_color-1">Hotline:</span>
                            <span class="text_white ms_4">{{ $settings->hotline ?? 'Dang cap nhat' }}</span>
                        </div>
                        <div class="text-body-default text_secondary-color">
                            <span class="text_color-1">Email:</span>
                            <a href="mailto:{{ $settings->email ?? '' }}" class="text_white link ms_4">{{ $settings->email ?? 'Dang cap nhat' }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-content footer-item d-flex justify-content-between">
                        <div class="footer-col-block company">
                            <div class="footer-heading footer-heading-mobile text-title fw-6 text_white mb_16">Danh muc</div>
                            <div class="tf-collapse-content">
                                <ul class="footer-menu-list d-grid gap_12">
                                    <li class="text-body-default text_color-1"><a href="{{ route('frontend.home') }}" class="link">Trang chu</a></li>
                                    <li class="text-body-default text_color-1"><a href="{{ route('frontend.about') }}" class="link">Gioi thieu</a></li>
                                    <li class="text-body-default text_color-1"><a href="{{ route('frontend.news.index') }}" class="link">Tin tuc</a></li>
                                    <li class="text-body-default text_color-1"><a href="{{ route('frontend.contact') }}" class="link">Lien he</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-col-block quick-link">
                            <div class="footer-heading footer-heading-mobile text-title fw-6 text_white mb_16">Menu nhanh</div>
                            <div class="tf-collapse-content">
                                <ul class="footer-menu-list d-grid gap_12">
                                    @foreach (($menuTree ?? collect())->take(5) as $menu)
                                        <li class="text-body-default text_color-1">
                                            <a href="{{ $menu->resolved_url }}" class="link" @if($menu->target === '_blank') target="_blank" rel="noopener noreferrer" @endif>{{ $menu->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-newsletter footer-item">
                        <div class="footer-heading text-title fw-6 text_white mb_16">Ket noi voi chung toi</div>
                        <p class="text_color-1 mb_20">Theo doi thong tin moi nhat tu NhaDatVN.</p>
                        <ul class="social d-flex gap_24">
                            @if (!empty($socials['facebook']))
                                <li><a href="{{ $socials['facebook'] }}" class="icon-FacebookLogo" target="_blank" rel="noopener noreferrer"></a></li>
                            @endif
                            @if (!empty($socials['youtube']))
                                <li><a href="{{ $socials['youtube'] }}" class="icon-YoutubeLogo" target="_blank" rel="noopener noreferrer"></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom d-flex align-items-center justify-content-between">
            <p class="text_muted-color">©{{ now()->year }} <a href="{{ route('frontend.home') }}" class="text_white hover-underline-link">NhaDatVN</a>. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
        </path>
    </svg>
</div>

<div class="offcanvas offcanvas-end mobile-nav-wrap" tabindex="-1" id="menu-mobile" aria-labelledby="menu-mobile">
    <div class="fixed-nav-rounded-div">
        <div class="rounded-div-wrap">
            <div class="rounded-div"></div>
        </div>
    </div>
    <div class="offcanvas-header top-nav-mobile">
        <div class="offcanvas-title">
            <a href="{{ route('frontend.home') }}" class="site-logo">
                <img src="{{ $footerLogo }}" alt="logo" class="main-logo" width="193" height="44">
            </a>
        </div>
        <div data-bs-dismiss="offcanvas" class="btn-close-menu">
            <i class="icon-times-solid"></i>
        </div>
    </div>
    <div class="offcanvas-body inner-mobile-nav">
        <div class="mb-body">
            <ul id="menu-mobile-menu" class="style-1">
                <li class="menu-item">
                    <a href="{{ route('frontend.home') }}" class="item-menu-mobile">Trang chủ</a>
                </li>
                @foreach ($menuTree ?? collect() as $menu)
                    @include('frontend.partials.mobile-menu-item', ['menu' => $menu])
                @endforeach
            </ul>
            <div class="support">
                <button type="button" class="tf-btn border-0" data-bs-toggle="modal" data-bs-target="#customer-info-modal">
                    <span>Submit Property</span>
                    <span class="bg-effect"></span>
                </button>
                <a href="#" class="text-need">Need help?</a>
                <ul class="mb-info">
                    <li>Call Us Now: <span class="number">{{ $settings->hotline ?? 'Dang cap nhat' }}</span></li>
                    <li>Support 24/7: <a href="mailto:{{ $settings->email ?? '' }}" class="link">{{ $settings->email ?? 'Dang cap nhat' }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
