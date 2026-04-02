@extends('frontend.layouts.app')

@section('title', $pageTitle ?? $product->title)
@section('meta_description', $pageDescription ?? ($product->excerpt ?: 'Chi tiet san pham'))

@section('content')
<!-- main-content -->
        <div class="main-content section-onepage">

            <div class="properties-details tf-spacing-1 pt-0">

                <div class="properties-hero">
                    <div class="properties-title">
                        <div>
                            <div class="wrap-tag d-flex gap_12 mb_16">
                                <div class="tag rent text-title fw-6 text_primary-color">
                                    For Rent
                                </div>
                                <div class="tag categoreis text-title fw-6 text_primary-color">
                                    House
                                </div>
                            </div>
                            <h2>Coastal Serenity Cottage</h2>
                            <ul class="list-action d-flex gap_16">
                                <li class="compare">
                                    <a href="#" class="gap_8"><i class="icon-ArrowsLeftRight"></i><span
                                            class="text-button">Compare</span></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon icon-Heart"></span>
                                    </a>
                                </li>
                                <li> <a href="#" class=""><i class="icon-ShareNetwork"></i></a></li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="mb_16">Price:</h5>
                            <h2 class="price">$5280,00<span class="text_secondary-color text-body-1">/month</span>
                            </h2>
                        </div>
                    </div>
                    <div class="right">
                        <div class="wrap-thumb">
                            <div class="swiper sw-single">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="thumb-main">
                                            <a href="images/section/properties-details-11.jpg" data-fancybox="gallery"
                                                class="img-style">
                                                <img width="1200" height="675" loading="eager" decoding="async"
                                                    src="images/section/properties-details-11.jpg"
                                                    alt="properties-details">
                                            </a>
                                            <div class="wrap-btn d-flex gap_10">
                                                <div class="widget-video">
                                                    <a href="https://www.youtube.com/watch?v=MLpWrANjFbI"
                                                        class="tf-btn tf-btn btn-bg-1 popup-youtube">
                                                        <span class="d-flex align-items-center gap_8"><i
                                                                class="icon-PlayCircle"></i>Play
                                                            Video</span>
                                                        <span class="bg-effect"></span>
                                                    </a>
                                                </div>
                                                <a href="images/section/properties-details-11.jpg"
                                                    data-fancybox="gallery" class="tf-btn btn-bg-1">
                                                    <span class="d-flex align-items-center gap_8"><i
                                                            class="icon-Image"></i>View
                                                        All Photo</span>
                                                    <span class="bg-effect"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="thumb-main">
                                            <a href="images/section/properties-details-12.jpg" data-fancybox="gallery"
                                                class="img-style">
                                                <img width="1200" height="675" loading="eager" decoding="async"
                                                    src="images/section/properties-details-12.jpg"
                                                    alt="properties-details">
                                            </a>
                                            <div class="wrap-btn d-flex gap_10">
                                                <div class="widget-video">
                                                    <a href="https://www.youtube.com/watch?v=MLpWrANjFbI"
                                                        class="tf-btn tf-btn btn-bg-1 popup-youtube">
                                                        <span class="d-flex align-items-center gap_8"><i
                                                                class="icon-PlayCircle"></i>Play
                                                            Video</span>
                                                        <span class="bg-effect"></span>
                                                    </a>
                                                </div>
                                                <a href="images/section/properties-details-12.jpg"
                                                    data-fancybox="gallery" class="tf-btn btn-bg-1">
                                                    <span class="d-flex align-items-center gap_8"><i
                                                            class="icon-Image"></i>View
                                                        All Photo</span>
                                                    <span class="bg-effect"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="thumb-main">
                                            <a href="images/section/properties-details-13.jpg" data-fancybox="gallery"
                                                class="img-style">
                                                <img width="1200" height="675" loading="eager" decoding="async"
                                                    src="images/section/properties-details-13.jpg"
                                                    alt="properties-details">
                                            </a>
                                            <div class="wrap-btn d-flex gap_10">
                                                <div class="widget-video">
                                                    <a href="https://www.youtube.com/watch?v=MLpWrANjFbI"
                                                        class="tf-btn tf-btn btn-bg-1 popup-youtube">
                                                        <span class="d-flex align-items-center gap_8"><i
                                                                class="icon-PlayCircle"></i>Play
                                                            Video</span>
                                                        <span class="bg-effect"></span>
                                                    </a>
                                                </div>
                                                <a href="images/section/properties-details-13.jpg"
                                                    data-fancybox="gallery" class="tf-btn btn-bg-1">
                                                    <span class="d-flex align-items-center gap_8"><i
                                                            class="icon-Image"></i>View
                                                        All Photo</span>
                                                    <span class="bg-effect"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="thumb-main">
                                            <a href="images/section/properties-details-14.jpg" data-fancybox="gallery"
                                                class="img-style">
                                                <img width="1200" height="675" loading="eager" decoding="async"
                                                    src="images/section/properties-details-14.jpg"
                                                    alt="properties-details">
                                            </a>
                                            <div class="wrap-btn d-flex gap_10">
                                                <div class="widget-video">
                                                    <a href="https://www.youtube.com/watch?v=MLpWrANjFbI"
                                                        class="tf-btn tf-btn btn-bg-1 popup-youtube">
                                                        <span class="d-flex align-items-center gap_8"><i
                                                                class="icon-PlayCircle"></i>Play
                                                            Video</span>
                                                        <span class="bg-effect"></span>
                                                    </a>
                                                </div>
                                                <a href="images/section/properties-details-14.jpg"
                                                    data-fancybox="gallery" class="tf-btn btn-bg-1">
                                                    <span class="d-flex align-items-center gap_8"><i
                                                            class="icon-Image"></i>View
                                                        All Photo</span>
                                                    <span class="bg-effect"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="thumb-main">
                                            <a href="images/section/properties-details-15.jpg" data-fancybox="gallery"
                                                class="img-style">
                                                <img width="1200" height="675" loading="eager" decoding="async"
                                                    src="images/section/properties-details-15.jpg"
                                                    alt="properties-details">
                                            </a>
                                            <div class="wrap-btn d-flex gap_10">
                                                <a href="#" class="tf-btn tf-btn btn-bg-1">
                                                    <span class="d-flex align-items-center gap_8"><i
                                                            class="icon-PlayCircle"></i>Play
                                                        Video</span>
                                                    <span class="bg-effect"></span>
                                                </a>
                                                <a href="images/section/properties-details-15.jpg"
                                                    data-fancybox="gallery" class="tf-btn btn-bg-1">
                                                    <span class="d-flex align-items-center gap_8"><i
                                                            class="icon-Image"></i>View
                                                        All Photo</span>
                                                    <span class="bg-effect"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sw-button sw-thumbs-prev">
                            <i class="icon-CaretLeft"></i>
                        </div>
                        <div class="sw-button sw-thumbs-next">
                            <i class="icon-CaretRight"></i>
                        </div>
                        <div class="wrap-pagi">
                            <div class="swiper thumbs-sw-pagi" data-preview="6" data-mobile="3" data-space="12">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="image-detail">
                                            <img loading="lazy" decoding="async" src="images/section/tbumb-pagi-1.jpg"
                                                width="100" height="100" alt="images">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image-detail">
                                            <img loading="lazy" decoding="async" src="images/section/tbumb-pagi-2.jpg"
                                                width="100" height="100" alt="images">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image-detail">
                                            <img loading="lazy" decoding="async" src="images/section/tbumb-pagi-3.jpg"
                                                width="100" height="100" alt="images">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image-detail">
                                            <img loading="lazy" decoding="async" src="images/section/tbumb-pagi-4.jpg"
                                                width="100" height="100" alt="images">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image-detail">
                                            <img loading="lazy" decoding="async" src="images/section/tbumb-pagi-5.jpg"
                                                width="100" height="100" alt="images">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="properties-menut-list">
                    <div class="tf-container">
                        <ul class="tab-slide overflow-x-auto" id="navbar">
                            <li class="text-button nav-tab-item text_primary-color active"><a href="#overview"
                                    class="nav_link">Overview
                                </a></li>
                            <li class="text-button nav-tab-item text_primary-color"><a href="#property-utility"
                                    class="nav_link">Property Utility
                                </a></li>
                            <li class="text-button nav-tab-item text_primary-color"><a href="#video"
                                    class="nav_link">Video
                                </a></li>

                            <li class="text-button nav-tab-item text_primary-color"><a href="#loan-calculator"
                                    class="nav_link">Loan
                                    Calculator
                                </a></li>
                            <li class="text-button nav-tab-item text_primary-color"><a href="#floor-plans"
                                    class="nav_link">Floor Plans
                                </a></li>
                            <li class="text-button nav-tab-item text_primary-color"><a href="#location"
                                    class="nav_link">Location</a>
                            </li>
                            <li class="text-button nav-tab-item text_primary-color"><a href="#nearby"
                                    class="nav_link">Whatâ€™s
                                    Nearby?</a></li>
                            <li class="text-button nav-tab-item text_primary-color"><a href="#customer-reviews"
                                    class="nav_link">Customer Reviews</a></li>
                            <li class="text-button nav-tab-item text_primary-color"><a href="#reviews"
                                    class="nav_link">Reviews</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="tf-container ">
                    <div class="row">
                        <div class="col-lg-8">

                            <div id="overview" class="section tf-spacing-9">
                                <div class="properties-overview v3 properties-2   ">
                                    <h5 class="properties-title mb_20">
                                        Overview
                                    </h5>
                                    <div class="tf-grid-layout tf-col-2 lg-col-4">
                                        <div class="item d-flex gap_16">
                                            <i class="icon icon-HouseSimple"></i>
                                            <div class="d-flex flex-column gap">
                                                <span class="text-body-default">ID:</span>
                                                <span class="text-title fw-6 text_primary-color">423146</span>
                                            </div>
                                        </div>
                                        <div class="item d-flex gap_16">
                                            <i class="icon icon-SlidersHorizontal"></i>
                                            <div class="d-flex flex-column gap">
                                                <span class="text-body-default">Type:</span>
                                                <span class="text-title fw-6 text_primary-color">Villa</span>
                                            </div>
                                        </div>
                                        <div class="item d-flex gap_16">
                                            <i class="icon icon-Bed"></i>
                                            <div class="d-flex flex-column gap">
                                                <span class="text-body-default">Bedrooms:</span>
                                                <span class="text-title fw-6 text_primary-color">3 Rooms</span>
                                            </div>
                                        </div>
                                        <div class="item d-flex gap_16">
                                            <i class="icon icon-Shower"></i>
                                            <div class="d-flex flex-column gap">
                                                <span class="text-body-default">Bathrooms:</span>
                                                <span class="text-title fw-6 text_primary-color">3 Rooms</span>
                                            </div>
                                        </div>
                                        <div class="item d-flex gap_16">
                                            <i class="icon icon-Warehouse"></i>
                                            <div class="d-flex flex-column gap">
                                                <span class="text-body-default">Garages:</span>
                                                <span class="text-title fw-6 text_primary-color">Yes</span>
                                            </div>
                                        </div>
                                        <div class="item d-flex gap_16">
                                            <i class="icon icon-Ruler"></i>
                                            <div class="d-flex flex-column gap">
                                                <span class="text-body-default">Size:</span>
                                                <span class="text-title fw-6 text_primary-color">3,200 SqFt</span>
                                            </div>
                                        </div>
                                        <div class="item d-flex gap_16">
                                            <i class="icon icon-Crop"></i>
                                            <div class="d-flex flex-column gap">
                                                <span class="text-body-default">Land area:</span>
                                                <span class="text-title fw-6 text_primary-color">423146</span>
                                            </div>
                                        </div>
                                        <div class="item d-flex gap_16">
                                            <i class="icon icon-CalendarBlank"></i>
                                            <div class="d-flex flex-column gap">
                                                <span class="text-body-default">Year Built:</span>
                                                <span class="text-title fw-6 text_primary-color">2024</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tf-spacing-9">
                                    <div class="properties-description properties-2  ">
                                        <h5 class="properties-title mb_20">
                                            Description
                                        </h5>
                                        <p class="mb_8 text-body-2">Casa Lomas de MachalÃ­ offers a perfect blend of
                                            comfort,
                                            privacy, and
                                            nature.
                                            Nestled in one of MachalÃ­â€™s most secure and peaceful residential areas, this
                                            beautiful
                                            property features modern architecture, open interiors, and large windows
                                            that
                                            fill
                                            the home
                                            with natural light.</p>
                                        <p class="mb_20 text-body-2">Its tranquil surroundings and convenient access to
                                            local amenities make
                                            it
                                            ideal for families or anyone seeking a serene lifestyle just minutes from
                                            Rancagua.
                                        </p>
                                        <a href="#" class="hover-underline-link text_primary-color text-button">View
                                            More</a>
                                    </div>
                                </div>
                            </div>

                            <div id="property-utility" class="tf-spacing-9 section">
                                <div class="properties-utility properties-2 ">
                                    <h5 class="properties-title mb_20">
                                        Property Utility
                                    </h5>
                                    <div class="tf-grid-layout md-col-2">
                                        <div class="col-utility">
                                            <div class="item d-flex justify-content-between">
                                                <div
                                                    class="d-flex align-items-center gap_8 text-body-default text_primary-color">
                                                    <i class="icon-Thermometer"></i>
                                                    Heating
                                                </div>
                                                <span class="text-button text_primary-color">Natural Gas</span>
                                            </div>
                                            <div class="item d-flex justify-content-between">
                                                <div
                                                    class="d-flex align-items-center gap_8 text-body-default text_primary-color">
                                                    <i class="icon-Snowflake"></i>
                                                    Air Conditioning
                                                </div>
                                                <span class="text-button text_primary-color">Yes</span>
                                            </div>
                                            <div class="item d-flex justify-content-between">
                                                <div
                                                    class="d-flex align-items-center gap_8 text-body-default text_primary-color">
                                                    <i class="icon-WifiHigh"></i>
                                                    Wifi
                                                </div>
                                                <span class="text-button text_primary-color">Yes</span>
                                            </div>
                                            <div class="item d-flex justify-content-between">
                                                <div
                                                    class="d-flex align-items-center gap_8 text-body-default text_primary-color">
                                                    <i class="icon-FingerprintSimple"></i>
                                                    Self check-in with lockbox
                                                </div>
                                                <span class="text-button text_primary-color">Yes</span>
                                            </div>
                                            <div class="item d-flex justify-content-between">
                                                <div
                                                    class="d-flex align-items-center gap_8 text-body-default text_primary-color">
                                                    <i class="icon-SecurityCamera"></i>
                                                    Security cameras
                                                </div>
                                                <span class="text-button text_primary-color">Yes</span>
                                            </div>
                                        </div>
                                        <div class="col-utility">
                                            <div class="item d-flex justify-content-between">
                                                <div
                                                    class="d-flex align-items-center gap_8 text-body-default text_primary-color">
                                                    <i class="icon-Television"></i>
                                                    Cable TV
                                                </div>
                                                <span class="text-button text_primary-color">Yes</span>
                                            </div>
                                            <div class="item d-flex justify-content-between">
                                                <div
                                                    class="d-flex align-items-center gap_8 text-body-default text_primary-color">
                                                    <i class="icon-CloudWarning"></i>
                                                    Carbon monoxide alarm
                                                </div>
                                                <span class="text-button text_primary-color">Yes</span>
                                            </div>
                                            <div class="item d-flex justify-content-between">
                                                <div
                                                    class="d-flex align-items-center gap_8 text-body-default text_primary-color">
                                                    <i class="icon-SolarPanel"></i>
                                                    Solar power
                                                </div>
                                                <span class="text-button text_primary-color">Yes</span>
                                            </div>
                                            <div class="item d-flex justify-content-between">
                                                <div
                                                    class="d-flex align-items-center gap_8 text-body-default text_primary-color">
                                                    <i class="icon-Fire"></i>
                                                    Fireplace
                                                </div>
                                                <span class="text-button text_primary-color">Yes</span>
                                            </div>
                                            <div class="item d-flex justify-content-between">
                                                <div
                                                    class="d-flex align-items-center gap_8 text-body-default text_primary-color">
                                                    <i class="icon-Fan"></i>
                                                    Ventilation
                                                </div>
                                                <span class="text-button text_primary-color">Yes</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="video" class="tf-spacing-9 section">
                                <div class="properties-video properties-2 ">
                                    <h5 class="properties-title mb_20">
                                        Video
                                    </h5>
                                    <div class="widget-video">
                                        <img class="lazyload" data-src="images/section/property-detail.html"
                                            src="images/section/properties-video.jpg" alt="">
                                        <a href="https://www.youtube.com/watch?v=MLpWrANjFbI" class="popup-youtube">
                                            <img src="icons/play.svg" alt="play"> </a>
                                    </div>
                                </div>
                            </div>

                            <div id="loan-calculator" class="properties-calculator v2 section tf-spacing-9">
                                <h5 class="properties-title mb_20">
                                    Loan Calculator
                                </h5>
                                <div class="wrap-form ">
                                    <form class="form-calculator  ">
                                        <div class=" tf-grid-layout xl-col-4 md-col-2">
                                            <fieldset class="">
                                                <label for="total"
                                                    class="text-body-default text_primary-color mb_8">Total
                                                    Amount:</label>
                                                <input class="" id="total" type="text" name="text" tabindex="2"
                                                    value="$480.300|" aria-required="true" required="">
                                            </fieldset>
                                            <fieldset class="">
                                                <label for="interest"
                                                    class="text-body-default text_primary-color mb_8">Interest
                                                    Rate</label>
                                                <input class="" id="interest" type="text" name="text" tabindex="2"
                                                    value="1.2%" aria-required="true" required="">
                                            </fieldset>
                                            <div>
                                                <div class="text-body-default text_primary-color mb_8">Loan Term
                                                    (months)
                                                </div>
                                                <div class="nice-select" tabindex="0"><span class="current">60
                                                        months</span>
                                                    <ul class="list">
                                                        <li data-value="default" class="option selected">60 months</li>
                                                        <li data-value="120" class="option">120 months</li>
                                                        <li data-value="180" class="option">180 months</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <fieldset class="">
                                                <label for="payment"
                                                    class="text-body-default text_primary-color mb_8">Down
                                                    Payment</label>
                                                <input class="" id="payment" type="text" name="text" tabindex="2"
                                                    value="$400" aria-required="true" required="">
                                            </fieldset>
                                        </div>
                                        <button class="tf-btn btn-bg-1 btn-px-28 w-full" type="submit">
                                            <span>Calculate</span>
                                            <span class="bg-effect"></span>
                                        </button>
                                    </form>
                                    <ul class="info tf-grid-layout md-col-3 gap_8">
                                        <li>
                                            <p class="mb_5">Monthly Payment:</p>
                                            <div class="text-button text_primary-color fw-7">$788.56/Month</div>
                                        </li>
                                        <li>
                                            <p class="mb_5">Total Interest Payment:</p>
                                            <div class="text-button text_primary-color fw-7">$1413.60</div>
                                        </li>
                                        <li>
                                            <p class="mb_5">Est. Total Loan:</p>
                                            <div class="text-button text_primary-color fw-7">$47713.60</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div id="floor-plans" class="section tf-spacing-9">
                                <div class="properties-floor properties-2 ">
                                    <h5 class="properties-title mb_20">
                                        Floor Plans
                                    </h5>
                                    <ul class="box-floor d-grid gap_20 mb_20" id="parent-floor">
                                        <li class="floor-item">
                                            <div role="button"
                                                class="floor-header d-flex align-items-center justify-content-between"
                                                data-bs-target="#floor-one" data-bs-toggle="collapse"
                                                aria-expanded="false" aria-controls="floor-one">
                                                <div
                                                    class="inner-left d-flex gap_8 align-items-center text_primary-color">
                                                    <i class="icon icon-CaretDown"></i>
                                                    <span class="text-button fw-7">First Floor</span>
                                                </div>
                                                <ul class="inner-right d-flex gap_20">
                                                    <li
                                                        class="d-flex align-items-center gap_8 text-body-default text_primary-color">
                                                        <i class="icon icon-Bed"></i>
                                                        3 Beds
                                                    </li>
                                                    <li
                                                        class="d-flex align-items-center gap_8 text-body-default text_primary-color">
                                                        <i class="icon icon-Bathstub"></i>
                                                        2 Baths
                                                    </li>
                                                </ul>
                                            </div>
                                            <div id="floor-one" class="collapse show" data-bs-parent="#parent-floor">
                                                <div class="contnet">
                                                    <div class="box-img">
                                                        <img src="images/section/floor-3.jpg" alt="img-floor">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="floor-item">
                                            <div class="floor-header d-flex align-items-center justify-content-between collapsed"
                                                role="button" data-bs-target="#floor-two" data-bs-toggle="collapse"
                                                aria-expanded="false" aria-controls="floor-two">
                                                <div
                                                    class="inner-left d-flex gap_8 align-items-center text_primary-color">
                                                    <i class="icon icon-CaretDown"></i>
                                                    <span class="text-button fw-7">Second Floor</span>
                                                </div>
                                                <ul class="inner-right d-flex gap_20">
                                                    <li
                                                        class="d-flex align-items-center gap_8 text-body-default text_primary-color">
                                                        <i class="icon icon-Bed"></i>
                                                        3 Beds
                                                    </li>
                                                    <li
                                                        class="d-flex align-items-center gap_8 text-body-default text_primary-color">
                                                        <i class="icon icon-Bathstub"></i>
                                                        2 Baths
                                                    </li>
                                                </ul>
                                            </div>
                                            <div id="floor-two" class="collapse" data-bs-parent="#parent-floor">
                                                <div class="contnet">
                                                    <div class="box-img">
                                                        <img src="images/section/floor-3.jpg" alt="img-floor">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="wrap-download">
                                        <a href="#" target="_blank"
                                            class="attachments-item d-flex align-items-center gap_12 text-button fw-7 text_primary-color effect-icon">
                                            <div class="icon">
                                                <i class="icon-FilePdf"></i>
                                            </div>
                                            <span>Villa-Document.Pdf</span>
                                            <i class="icon-DownloadSimple"></i>
                                        </a>
                                        <a href="#" target="_blank"
                                            class="attachments-item d-flex align-items-center gap_12 text-button fw-7 text_primary-color effect-icon">
                                            <div class="icon">
                                                <i class="icon-FileDoc"></i>
                                            </div>
                                            <span>Villa-Document.Pdf</span>
                                            <i class="icon-DownloadSimple"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div id="location" class="section  tf-spacing-9">
                                <div class="properties-location v2 properties-2  ">
                                    <h5 class="properties-title mb_20">
                                        Location
                                    </h5>
                                    <div
                                        class="heading d-flex align-items-center justify-content-between flex-wrap gap_12 mb_16 flex-wrap">
                                        <div
                                            class=" d-flex align-items-center gap_4 text-button fw-7 text_primary-color">
                                            <i class="icon-MapPin"></i>4600 Sunset Blvd, Los Angeles, CA 90027
                                        </div>
                                        <a href="#" class="hover-underline-link text-button fw-7 text_primary-color">Get
                                            Directions</a>
                                    </div>
                                    <div class="wrap-map">
                                        <div id="map"></div>
                                    </div>
                                </div>
                            </div>

                            <div id="nearby" class="section tf-spacing-9">
                                <div class="properties-nearby properties-2 ">
                                    <h5 class="properties-title mb_20">
                                        Whatâ€™s Nearby?
                                    </h5>
                                    <p class="text-body-2">Whether you're raising a family or enjoying a peaceful
                                        retreat,
                                        youâ€™ll appreciate the
                                        close proximity to essential services, green spaces, and entertainment options.
                                    </p>
                                    <div class="wrap tf-grid-layout md-col-3">
                                        <ul class="col-nearby d-flex flex-column gap_8">
                                            <li>
                                                <span class="text-body-default">School:</span>
                                                <span class="text-button fw-7 text_primary-color">0.7 Km</span>
                                            </li>
                                            <li>
                                                <span class="text-body-default">Supermarket:</span>
                                                <span class="text-button fw-7 text_primary-color">1.3 Km</span>
                                            </li>
                                            <li>
                                                <span class="text-body-default">Clinic:</span>
                                                <span class="text-button fw-7 text_primary-color">0.6 Km</span>
                                            </li>
                                            <li>
                                                <span class="text-body-default">Park:</span>
                                                <span class="text-button fw-7 text_primary-color">1.1 Km</span>
                                            </li>
                                        </ul>
                                        <ul class="col-nearby d-flex flex-column gap_8">
                                            <li>
                                                <span class="text-body-default">Sports Stadium:</span>
                                                <span class="text-button fw-7 text_primary-color">0.4 Km</span>
                                            </li>
                                            <li>
                                                <span class="text-body-default">Pharmacy:</span>
                                                <span class="text-button fw-7 text_primary-color">1.8 Km</span>
                                            </li>
                                            <li>
                                                <span class="text-body-default">CafÃ©:</span>
                                                <span class="text-button fw-7 text_primary-color">1.3 Km</span>
                                            </li>
                                            <li>
                                                <span class="text-body-default">Shopping:</span>
                                                <span class="text-button fw-7 text_primary-color">2.1 Km</span>
                                            </li>
                                        </ul>
                                        <ul class="col-nearby d-flex flex-column gap_8">
                                            <li>
                                                <span class="text-body-default">Center:</span>
                                                <span class="text-button fw-7 text_primary-color">0.7 Km</span>
                                            </li>
                                            <li>
                                                <span class="text-body-default">City Center:</span>
                                                <span class="text-button fw-7 text_primary-color">1.8 Km</span>
                                            </li>
                                            <li>
                                                <span class="text-body-default">Vineyard:</span>
                                                <span class="text-button fw-7 text_primary-color">1.3 Km</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tf-spacing-9">
                                <div class="properties-2 ">
                                    <div id="customer-reviews" class="reply-comment mb_40 section">
                                        <div class="title d-flex align-items-center justify-content-between mb_20">
                                            <h5>Customer Reviews</h5>
                                            <a href="#leaveComment" class="tf-btn btn-bg-1 btn-px-28">
                                                <span>Write A Review</span>
                                                <span class="bg-effect"></span>
                                            </a>
                                        </div>
                                        <div class="reply-comment-wrap">
                                            <div class="reply-comment-item">
                                                <div class="avatar">
                                                    <img src="images/avatar/avatar-1.jpg" width="60" height="60"
                                                        alt="avatar">
                                                </div>
                                                <div class="content">
                                                    <div class="info mb_12">
                                                        <h6 class="name text_primary-color mb_4"><a href="#"
                                                                class="link">Claudia
                                                                M.</a>
                                                        </h6>
                                                        <p class="text-body-default">March 18, 2025</p>
                                                    </div>
                                                    <ul class="ratings d-flex mb_10">
                                                        <li><i class="icon-favorite_major"></i></li>
                                                        <li><i class="icon-favorite_major"></i></li>
                                                        <li><i class="icon-favorite_major"></i></li>
                                                        <li><i class="icon-favorite_major"></i></li>
                                                        <li><i class="icon-favorite_major"></i></li>
                                                    </ul>
                                                    <p class="comment text-body-2">
                                                        This home is exactly what we were looking forâ€”quiet, spacious,
                                                        and
                                                        surrounded by nature. The location is perfect for our family,
                                                        close to
                                                        schools and just a short drive to the city.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="reply-comment-item">
                                                <div class="avatar">
                                                    <img src="images/avatar/avatar-2.jpg" width="60" height="60"
                                                        alt="avatar">
                                                </div>
                                                <div class="content">
                                                    <div class="info mb_12">
                                                        <h6 class="name text_primary-color mb_4"><a href="#"
                                                                class="link">Jorge
                                                                R.</a>
                                                        </h6>
                                                        <p class="text-body-default">February 10, 2025</p>
                                                    </div>
                                                    <ul class="ratings d-flex mb_10">
                                                        <li><i class="icon-favorite_major"></i></li>
                                                        <li><i class="icon-favorite_major"></i></li>
                                                        <li><i class="icon-favorite_major"></i></li>
                                                        <li><i class="icon-favorite_major"></i></li>
                                                        <li><i class="icon-favorite_major"></i></li>
                                                    </ul>
                                                    <p class="comment text-body-2">
                                                        Very peaceful neighborhood with great views. The house has a
                                                        modern
                                                        design
                                                        and lots of natural light. We especially love the garden and how
                                                        private
                                                        it
                                                        feels.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="reply-comment-item">
                                                <div class="avatar">
                                                    <img src="images/avatar/avatar-3.jpg" width="60" height="60"
                                                        alt="avatar">
                                                </div>
                                                <div class="content">
                                                    <div class="info mb_12">
                                                        <h6 class="name text_primary-color mb_4"><a href="#"
                                                                class="link">Isabel
                                                                T.</a>
                                                        </h6>
                                                        <p class="text-body-default">January 5, 2025</p>
                                                    </div>
                                                    <ul class="ratings d-flex mb_10">
                                                        <li><i class="icon-favorite_major"></i></li>
                                                        <li><i class="icon-favorite_major"></i></li>
                                                        <li><i class="icon-favorite_major"></i></li>
                                                        <li><i class="icon-favorite_major"></i></li>
                                                        <li><i class="icon-favorite_major"></i></li>
                                                    </ul>
                                                    <p class="comment text-body-2">
                                                        I was impressed by the quality of the finishes and how
                                                        well-maintained
                                                        the
                                                        property is. It's in a great areaâ€”close to everything but still
                                                        quiet
                                                        and
                                                        safe.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#"
                                            class="all-review hover-underline-link text_primary-color text-button">See
                                            All Review (98)</a>
                                    </div>
                                    <div id="reviews" class="leave-comment section">
                                        <div class="heading-title mb_20">
                                            <h5 class="mb_8">Add A Review</h5>
                                            <p>Your email address will not be published</p>
                                        </div>
                                        <form id="leaveComment" class="form-leave-comment">
                                            <div class="wrap mb_20">
                                                <div class="tf-grid-layout md-col-2 mb_20">
                                                    <fieldset class="">
                                                        <label for="name"
                                                            class="text-button text_primary-color fw-7 mb_8">Name</label>
                                                        <input class="" id="name" type="text" placeholder="Your Name*"
                                                            name="text" tabindex="2" value="" aria-required="true"
                                                            required="">
                                                    </fieldset>
                                                    <fieldset class="">
                                                        <label for="email"
                                                            class="text-button text_primary-color fw-7 mb_8">Email</label>
                                                        <input class="" id="email" type="email"
                                                            placeholder="Your Email*" name="email" tabindex="2" value=""
                                                            aria-required="true" required="">
                                                    </fieldset>
                                                </div>
                                                <fieldset>
                                                    <label for="comment"
                                                        class="text-button text_primary-color fw-7 mb_8">Review</label>
                                                    <textarea id="comment" class="" rows="4" placeholder="Write comment"
                                                        tabindex="2" aria-required="true" required=""></textarea>
                                                </fieldset>
                                            </div>
                                            <div class="box-fieldset-item d-flex mb_20">
                                                <fieldset>
                                                    <input type="checkbox" class="tf-check" id="note">
                                                </fieldset>
                                                <p class="text-body-default ">Save your name, email for the next time
                                                    review</p>
                                            </div>
                                            <button class="tf-btn btn-bg-1 btn-px-28" type="submit">
                                                <span>Submit Review</span>
                                                <span class="bg-effect"></span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 tf-spacing-9 ">
                            <div class="wrap-sidebar-right">
                                <div class="box-sellers  style-no-border mb_30">
                                    <h5 class="mb_24">Contact Sellers</h5>
                                    <div class="author d-flex mb_24">
                                        <div class="avatar">
                                            <img src="images/avatar/avatar-10.jpg" width="100" height="100"
                                                alt="avatar">
                                        </div>
                                        <div class="author-info d-flex flex-column">
                                            <h6 class="mb_8">Jorge R.</h6>
                                            <span class="text-body-default">1-555-678-8888</span>
                                            <a href="#"
                                                class="text_secondary-color text-body-default link">themesflat@gmail.com</a>
                                        </div>
                                    </div>
                                    <ul class="info mb_23">
                                        <li class="item d-flex gap_12 mb_20">
                                            <i class="icon icon-MapPin"></i>
                                            <div>
                                                <p class="text_primary-color mb_4">6205 Peachtree Dunwoody Rd, <br>
                                                    Atlanta,
                                                    GA
                                                    30328</p>
                                                <a href="#"
                                                    class="hover-underline-link text-button fw-7 text_primary-color">Get
                                                    Directions</a>
                                            </div>
                                        </li>
                                        <li class="item d-flex gap_12 align-items-center">
                                            <i class="icon icon-PhoneCall"></i>
                                            <div>
                                                <p class="text_primary-color">1-555-678-8888</p>
                                                <p class="text_primary-color ">1-555-678-8888</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="#" class="tf-btn btn-bg-1 w-full mb_12">
                                        <span class="d-flex align-items-center gap_8"><i class="icon-PhoneCall"></i>Call
                                            To
                                            Dealer</span>
                                        <span class="bg-effect"></span>
                                    </a>
                                    <a href="#" class="tf-btn w-full">
                                        <span class="d-flex align-items-center gap_8"><i
                                                class="icon-ChatCircleDots"></i>Chat via
                                            WhatsApp</span>
                                        <span class="bg-effect"></span>
                                    </a>
                                </div>
                                <div class="tf-filter-sidebar style-2 ms-lg-auto">
                                    <div class="tab-slide mb_14">
                                        <ul class="menu-tab tf-grid-layout tf-col-2 gap_8" role="tablist">
                                            <li class="item-slide-effect"></li>
                                            <li class="nav-tab-item active" role="presentation">
                                                <a href="#standard-plan" class="text-title tab-link fw-6 active"
                                                    data-bs-toggle="tab">For Rent</a>
                                            </li>
                                            <li class="nav-tab-item" role="presentation">
                                                <a href="#premium-plan" class="text-title tab-link fw-6"
                                                    data-bs-toggle="tab">For Sale</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" role="tabpanel">
                                            <div class="form-sl">
                                                <form method="post">
                                                    <div class="wd-filter-select">
                                                        <div class="inner-group d-grid gap_16">
                                                            <fieldset>
                                                                <label for="searchrKeyWord"
                                                                    class="text-button fw-7 text_primary-color mb_8">Looking
                                                                    For</label>
                                                                <input type="text" placeholder="Search keyword"
                                                                    id="searchrKeyWord" name="s" title="Search for"
                                                                    required="">
                                                            </fieldset>
                                                            <div>
                                                                <div class="text-button text_primary-color mb_8">
                                                                    Location</div>
                                                                <div class="nice-select" tabindex="0">
                                                                    <span class="current">All Cities</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option">All Cities
                                                                        </li>
                                                                        <li data-value="2" class="option selected">
                                                                            Texas</li>
                                                                        <li data-value="3" class="option">Florida
                                                                        </li>
                                                                        <li data-value="4" class="option">New York
                                                                        </li>
                                                                        <li data-value="5" class="option">Illinois
                                                                        </li>
                                                                        <li data-value="6" class="option">Washington
                                                                        </li>
                                                                        <li data-value="7" class="option">
                                                                            Pennsylvania</li>
                                                                        <li data-value="8" class="option">Ohio</li>
                                                                        <li data-value="9" class="option">Georgia
                                                                        </li>
                                                                        <li data-value="10" class="option">North
                                                                            Carolina
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-button text_primary-color mb_8">
                                                                    Bedrooms</div>
                                                                <div class="nice-select" tabindex="0">
                                                                    <span class="current">Any Bedrooms</span>
                                                                    <ul class="list">
                                                                        <li data-value class="option selected">Any
                                                                            Bedrooms</li>
                                                                        <li data-value="1 Bedroom" class="option">1
                                                                            Bedroom</li>
                                                                        <li data-value="2 Bedrooms" class="option">2
                                                                            Bedrooms</li>
                                                                        <li data-value="3+ Bedrooms" class="option">
                                                                            3+ Bedrooms</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-button text_primary-color mb_8">
                                                                    Bathrooms</div>
                                                                <div class="nice-select" tabindex="0">
                                                                    <span class="current">Any Bathrooms</span>
                                                                    <ul class="list">
                                                                        <li data-value class="option selected">Any
                                                                            Bathrooms</li>
                                                                        <li data-value="1 Bedroom" class="option">1
                                                                            Bedroom</li>
                                                                        <li data-value="2 Bathrooms" class="option">2
                                                                            Bathrooms</li>
                                                                        <li data-value="3+ Bathrooms" class="option">
                                                                            3+ Bedrooms</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-button text_primary-color mb_8">Your
                                                                    Budget</div>
                                                                <div class="nice-select" tabindex="0">
                                                                    <span class="current">Max. Price</span>
                                                                    <ul class="list">
                                                                        <li data-value class="option selected">Max.
                                                                            Price
                                                                        </li>
                                                                        <li data-value="Under $500" class="option">Under
                                                                            $500</li>
                                                                        <li data-value="Under $1,000" class="option">
                                                                            Under
                                                                            $1,000</li>
                                                                        <li data-value="Under $1,500" class="option">
                                                                            Under
                                                                            $1,500</li>
                                                                        <li data-value="Under $2,000" class="option">
                                                                            Under
                                                                            $2,000</li>
                                                                        <li data-value="Under $2,500" class="option">
                                                                            Under
                                                                            $2,500</li>
                                                                        <li data-value="$3,000" class="option">$3,000
                                                                        </li>
                                                                        <li data-value="Above $3,000" class="option">
                                                                            Above
                                                                            $3,000</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="tf-grid-layout sm-col-2 gap_20">
                                                                <div class="box-select">
                                                                    <div class="text-button text_primary-color mb_8">Min
                                                                        Size</div>
                                                                    <div class="nice-select" tabindex="0">
                                                                        <span class="current">Min (SqFt)</span>
                                                                        <ul class="list">
                                                                            <li data-value="1" class="option">Min (SqFt)
                                                                            </li>
                                                                            <li data-value="500 SqFt" class="option">500
                                                                                SqFt</li>
                                                                            <li data-value="1,000 SqFt"
                                                                                class="option selected">1,000 SqFt</li>
                                                                            <li data-value="1,500 SqFt" class="option">
                                                                                1,500
                                                                                SqFt</li>
                                                                            <li data-value="2,000 SqFt" class="option">
                                                                                2,000
                                                                                SqFt</li>
                                                                            <li data-value="2,500 SqFt" class="option">
                                                                                2,500
                                                                                SqFt</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="box-select">
                                                                    <div class="text-button text_primary-color mb_8">Max
                                                                        Size</div>
                                                                    <div class="nice-select" tabindex="0">
                                                                        <span class="current">Max (SqFt)</span>
                                                                        <ul class="list">
                                                                            <li data-value="1" class="option">Max (SqFt)
                                                                            </li>
                                                                            <li data-value="500 SqFt" class="option">500
                                                                                SqFt</li>
                                                                            <li data-value="1,000 SqFt"
                                                                                class="option selected">1,000 SqFt</li>
                                                                            <li data-value="1,500 SqFt" class="option">
                                                                                1,500
                                                                                SqFt</li>
                                                                            <li data-value="2,000 SqFt" class="option">
                                                                                2,000
                                                                                SqFt</li>
                                                                            <li data-value="2,500 SqFt" class="option">
                                                                                2,500
                                                                                SqFt</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-button text_primary-color mb_8">Garages
                                                                </div>
                                                                <div class="nice-select" tabindex="0">
                                                                    <span class="current">Any Garages</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option">Any Garages
                                                                        </li>
                                                                        <li data-value="1 Garages" class="option">1
                                                                            Garages
                                                                        </li>
                                                                        <li data-value="2 Garages"
                                                                            class="option selected">2
                                                                            Garages</li>
                                                                        <li data-value="3+ Garages" class="option">3+
                                                                            Garages </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <a class="show-avanced d-flex gap_4 align-items-center text_primary-color text-button"
                                                                data-bs-toggle="modal" href="#modalFilter"
                                                                role="button"><i class="icon-Faders"></i>Show Advanced
                                                            </a>
                                                            <div class="form-style">
                                                                <button type="submit" class="tf-btn w-full">
                                                                    <span>Search</span>
                                                                    <span class="bg-effect"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tf-container sw-layout tf-spacing-1 pt-0">
                <div class="heading-section mb_48">
                    <h3>The Most Recent Estate</h3>
                </div>
                <div class="swiper " data-preview="3" data-tablet="2" data-mobile-sm="2" data-mobile="1"
                    data-space-lg="30" data-space-md="20" data-space="15">
                    <div class="swiper-wrapper ">
                        <div class="swiper-slide">
                            <div class="card-house style-default hover-image" data-id="2">
                                <div class="img-style mb_20">
                                    <img loading="lazy" decoding="async" src="images/home/home-1.jpg"
                                        srcset="images/home/home-1.jpg 410w" sizes="(max-width: 410px) 100vw, 410px"
                                        width="410" height="308" alt="home">
                                    <div class="wrap-tag d-flex gap_8 mb_12">
                                        <div class="tag rent text-button-small fw-6 text_primary-color">
                                            For Rent
                                        </div>
                                        <div class="tag categoreis text-button-small fw-6 text_primary-color">
                                            Apartment
                                        </div>
                                    </div>

                                    <a href="property-details-1.html" class="overlay-link"></a>
                                    <div class="wishlist">
                                        <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                            <span class="icon icon-Heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="price mb_12">$250,00<span
                                            class="text_secondary-color text-body-default">/month</span></h4>
                                    <a href="property-details-1.html"
                                        class="title mb_8 h5 link text_primary-color">Villa
                                        del Mar Retreat,
                                        Malibu</a>
                                    <p>72 Sunset Avenue, Los Angeles, California</p>
                                    <ul class="info d-flex">
                                        <li class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                            <i class="icon-Bed"></i>4 Beds
                                        </li>
                                        <li class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                            <i class="icon-Bathstub"></i>2 Baths
                                        </li>
                                        <li class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                            <i class="icon-Ruler"></i>2,400 sqft
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-house style-default hover-image" data-id="3">
                                <div class="img-style mb_20">
                                    <img loading="lazy" decoding="async" src="images/home/home-2.jpg"
                                        srcset="images/home/home-2.jpg 410w" sizes="(max-width: 410px) 100vw, 410px"
                                        width="410" height="308" alt="home">
                                    <div class="wrap-tag d-flex gap_8 mb_12">
                                        <div class="tag sale text-button-small fw-6 text_primary-color">
                                            For sale
                                        </div>
                                        <div class="tag categoreis text-button-small fw-6 text_primary-color">
                                            Villa
                                        </div>
                                    </div>

                                    <a href="property-details-1.html" class="overlay-link"></a>
                                    <div class="wishlist">
                                        <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                            <span class="icon icon-Heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="price mb_12">$6130,00<span
                                            class="text_secondary-color text-body-default">/SqFT</span></h4>
                                    <a href="property-details-1.html"
                                        class="title mb_8 h5 link text_primary-color">Sunset
                                        Heights Estate</a>
                                    <p>245 Elm Street, San Francisco, CA 94102</p>
                                    <ul class="info d-flex">
                                        <li class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                            <i class="icon-Bed"></i>3 Beds
                                        </li>
                                        <li class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                            <i class="icon-Bathstub"></i>2 Baths
                                        </li>
                                        <li class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                            <i class="icon-Ruler"></i>1,600 sqft
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="card-house style-default hover-image" data-id="4">
                                <div class="img-style mb_20">
                                    <img loading="lazy" decoding="async" src="images/home/home-3.jpg"
                                        srcset="images/home/home-3.jpg 410w" sizes="(max-width: 410px) 100vw, 410px"
                                        width="410" height="308" alt="home">
                                    <div class="wrap-tag d-flex gap_8 mb_12">
                                        <div class="tag rent text-button-small fw-6 text_primary-color">
                                            For Rent
                                        </div>
                                        <div class="tag categoreis text-button-small fw-6 text_primary-color">
                                            Studio
                                        </div>
                                    </div>

                                    <a href="property-details-1.html" class="overlay-link"></a>
                                    <div class="wishlist">
                                        <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                            <span class="icon icon-Heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="price mb_12">$5280,00<span
                                            class="text_secondary-color text-body-default">/month</span></h4>
                                    <a href="property-details-1.html"
                                        class="title mb_8 h5 link text_primary-color">Coastal
                                        Serenity Cottage</a>
                                    <p>918 Maple Avenue, Brooklyn, NY 11215</p>
                                    <ul class="info d-flex">
                                        <li class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                            <i class="icon-Bed"></i>4 Beds
                                        </li>
                                        <li class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                            <i class="icon-Bathstub"></i>2 Baths
                                        </li>
                                        <li class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                            <i class="icon-Ruler"></i>2,600 sqft
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-dots style-1 sw-pagination-layout text-center mt_24">
                    </div>
                </div>
            </div>

        </div>
        <!-- End main-content -->
@endsection
