@extends('frontend.layouts.app')

@section('title', $pageTitle ?? $category->name)
@section('meta_description', $pageDescription ?? ($category->description ?: 'Danh sach san pham'))

@section('content')
<!-- main-content -->
        <div class="main-content">

            <div class="tf-spacing-1 section-properties">
                <div class="tf-container">
                    <div class="box-title mb_40">
                        <div>
                            <ul class="breadcrumb style-1 text-button fw-4 mb_4">
                                <li><a class="" href="index-2.html">Home</a></li>
                                <li>With Top Map</li>
                            </ul>
                            <h4>With Left Sidebar</h4>
                        </div>
                        <div class="right d-flex gap_12">
                            <ul class="nav-tab-filter align-items-center group-layout  d-flex gap_12" role="tablist">
                                <li class="nav-tab-item" role="presentation">
                                    <a href="#gridLayout" class=" btn-layout grid nav-link-item active"
                                        data-bs-toggle="tab">
                                        <i class="icon-SquaresFour"></i>
                                    </a>
                                </li>
                                <li class="nav-tab-item" role="presentation">
                                    <a href="#listLayout" class="nav-link-item btn-layout list " data-bs-toggle="tab">
                                        <i class="icon-Rows"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="nice-select select-filter list-sort" tabindex="0"><span class="current">Sort
                                    by
                                    (Default)</span>
                                <ul class="list">
                                    <li data-value="default" class="option selected">Sort by (Default)</li>
                                    <li data-value="new" class="option">Newest</li>
                                    <li data-value="old" class="option">Oldest</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="tf-filter-sidebar">
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
                                                                    <li data-value class="option selected">Max. Price
                                                                    </li>
                                                                    <li data-value="Under $500" class="option">Under
                                                                        $500</li>
                                                                    <li data-value="Under $1,000" class="option">Under
                                                                        $1,000</li>
                                                                    <li data-value="Under $1,500" class="option">Under
                                                                        $1,500</li>
                                                                    <li data-value="Under $2,000" class="option">Under
                                                                        $2,000</li>
                                                                    <li data-value="Under $2,500" class="option">Under
                                                                        $2,500</li>
                                                                    <li data-value="$3,000" class="option">$3,000</li>
                                                                    <li data-value="Above $3,000" class="option">Above
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
                                                                        <li data-value="1,500 SqFt" class="option">1,500
                                                                            SqFt</li>
                                                                        <li data-value="2,000 SqFt" class="option">2,000
                                                                            SqFt</li>
                                                                        <li data-value="2,500 SqFt" class="option">2,500
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
                                                                        <li data-value="1,500 SqFt" class="option">1,500
                                                                            SqFt</li>
                                                                        <li data-value="2,000 SqFt" class="option">2,000
                                                                            SqFt</li>
                                                                        <li data-value="2,500 SqFt" class="option">2,500
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
                                                                    <li data-value="1" class="option">Any Garages</li>
                                                                    <li data-value="1 Garages" class="option">1 Garages
                                                                    </li>
                                                                    <li data-value="2 Garages" class="option selected">2
                                                                        Garages</li>
                                                                    <li data-value="3+ Garages" class="option">3+
                                                                        Garages </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <a class="show-avanced d-flex gap_4 align-items-center text_primary-color text-button"
                                                            data-bs-toggle="modal" href="#modalFilter" role="button"><i
                                                                class="icon-Faders"></i>Show Advanced </a>
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
                        <div class="col-lg-8">
                            <div class="flat-animate-tab">
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="gridLayout" role="tabpanel">
                                        <div class="tf-grid-layout md-col-2">
                                            <div class="card-house style-default hover-image" data-id="2">
                                                <div class="img-style mb_20">
                                                    <img loading="lazy" decoding="async" src="images/home/home-1.jpg"
                                                        srcset="images/home/home-1.jpg 410w"
                                                        sizes="(max-width: 410px) 100vw, 410px" width="410" height="308"
                                                        alt="home">
                                                    <div class="wrap-tag d-flex gap_8 mb_12">
                                                        <div class="tag rent text-button-small fw-6 text_primary-color">
                                                            For Rent
                                                        </div>
                                                        <div
                                                            class="tag categoreis text-button-small fw-6 text_primary-color">
                                                            Apartment
                                                        </div>
                                                    </div>
                                                    <a href="property-details-1.html" class="overlay-link"></a>
                                                    <div class="wishlist">
                                                        <a href="javascript:void(0);"
                                                            class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-Heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h4 class="price mb_12">$250,00<span
                                                            class="text_secondary-color text-body-default">/month</span>
                                                    </h4>
                                                    <a href="property-details-1.html"
                                                        class="title mb_8 h5 link text_primary-color">Villa
                                                        del Mar Retreat,
                                                        Malibu</a>
                                                    <p>72 Sunset Avenue, Los Angeles, California</p>
                                                    <ul class="info d-flex">
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bed"></i>4 Beds
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bathstub"></i>2 Baths
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Ruler"></i>2,400 Sqft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="card-house style-default hover-image" data-id="3">
                                                <div class="img-style mb_20">
                                                    <img loading="lazy" decoding="async" src="images/home/home-2.jpg"
                                                        srcset="images/home/home-2.jpg 410w"
                                                        sizes="(max-width: 410px) 100vw, 410px" width="410" height="308"
                                                        alt="home">
                                                    <div class="wrap-tag d-flex gap_8 mb_12">
                                                        <div class="tag sale text-button-small fw-6 text_primary-color">
                                                            For sale
                                                        </div>
                                                        <div
                                                            class="tag categoreis text-button-small fw-6 text_primary-color">
                                                            Villa
                                                        </div>
                                                    </div>
                                                    <a href="property-details-1.html" class="overlay-link"></a>
                                                    <div class="wishlist">
                                                        <a href="javascript:void(0);"
                                                            class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-Heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h4 class="price mb_12">$6130,00<span
                                                            class="text_secondary-color text-body-default">/SqFT</span>
                                                    </h4>
                                                    <a href="property-details-1.html"
                                                        class="title mb_8 h5 link text_primary-color">Sunset
                                                        Heights Estate</a>
                                                    <p>245 Elm Street, San Francisco, CA 94102</p>
                                                    <ul class="info d-flex">
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bed"></i>3 Beds
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bathstub"></i>2 Baths
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Ruler"></i>1,600 Sqft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="card-house style-default hover-image" data-id="4">
                                                <div class="img-style mb_20">
                                                    <img loading="lazy" decoding="async" src="images/home/home-3.jpg"
                                                        srcset="images/home/home-3.jpg 410w"
                                                        sizes="(max-width: 410px) 100vw, 410px" width="410" height="308"
                                                        alt="home">
                                                    <div class="wrap-tag d-flex gap_8 mb_12">
                                                        <div class="tag rent text-button-small fw-6 text_primary-color">
                                                            For Rent
                                                        </div>
                                                        <div
                                                            class="tag categoreis text-button-small fw-6 text_primary-color">
                                                            Studio
                                                        </div>
                                                    </div>
                                                    <a href="property-details-1.html" class="overlay-link"></a>
                                                    <div class="wishlist">
                                                        <a href="javascript:void(0);"
                                                            class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-Heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h4 class="price mb_12">$5280,00<span
                                                            class="text_secondary-color text-body-default">/month</span>
                                                    </h4>
                                                    <a href="property-details-1.html"
                                                        class="title mb_8 h5 link text_primary-color">Coastal
                                                        Serenity Cottage</a>
                                                    <p>918 Maple Avenue, Brooklyn, NY 11215</p>
                                                    <ul class="info d-flex">
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bed"></i>4 Beds
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bathstub"></i>2 Baths
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Ruler"></i>2,600 Sqft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="card-house style-default hover-image" data-id="5">
                                                <div class="img-style mb_20">
                                                    <img loading="lazy" decoding="async" src="images/home/home-4.jpg"
                                                        srcset="images/home/home-4.jpg 410w"
                                                        sizes="(max-width: 410px) 100vw, 410px" width="410" height="308"
                                                        alt="home">
                                                    <div class="wrap-tag d-flex gap_8 mb_12">
                                                        <div class="tag sale text-button-small fw-6 text_primary-color">
                                                            For Sale
                                                        </div>
                                                        <div
                                                            class="tag categoreis text-button-small fw-6 text_primary-color">
                                                            Villa
                                                        </div>
                                                    </div>
                                                    <a href="property-details-1.html" class="overlay-link"></a>
                                                    <div class="wishlist">
                                                        <a href="javascript:void(0);"
                                                            class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-Heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h4 class="price mb_12">$6640,00<span
                                                            class="text_secondary-color text-body-default">/SqFT</span>
                                                    </h4>
                                                    <a href="property-details-1.html"
                                                        class="title mb_8 h5 link text_primary-color">Rancho
                                                        Vista Verde</a>
                                                    <p>77 Lakeview Court, Orlando, FL 32801</p>
                                                    <ul class="info d-flex">
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bed"></i>4 Beds
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bathstub"></i>2 Baths
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Ruler"></i>2,400 Sqft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="card-house style-default hover-image" data-id="6">
                                                <div class="img-style mb_20">
                                                    <img loading="lazy" decoding="async" src="images/home/home-5.jpg"
                                                        srcset="images/home/home-5.jpg 410w"
                                                        sizes="(max-width: 410px) 100vw, 410px" width="410" height="308"
                                                        alt="home">
                                                    <div class="wrap-tag d-flex gap_8 mb_12">
                                                        <div class="tag rent text-button-small fw-6 text_primary-color">
                                                            For Rent
                                                        </div>
                                                        <div
                                                            class="tag categoreis text-button-small fw-6 text_primary-color">
                                                            Office
                                                        </div>
                                                    </div>
                                                    <a href="property-details-1.html" class="overlay-link"></a>
                                                    <div class="wishlist">
                                                        <a href="javascript:void(0);"
                                                            class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-Heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h4 class="price mb_12">$320,00<span
                                                            class="text_secondary-color text-body-default">/month</span>
                                                    </h4>
                                                    <a href="property-details-1.html"
                                                        class="title mb_8 h5 link text_primary-color">Villa
                                                        del Mar Retreat</a>
                                                    <p>1325 Oakwood Drive, Austin, TX 78703</p>
                                                    <ul class="info d-flex">
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bed"></i>4 Beds
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bathstub"></i>2 Baths
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Ruler"></i>1,800 Sqft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="card-house style-default hover-image" data-id="7">
                                                <div class="img-style mb_20">
                                                    <img loading="lazy" decoding="async" src="images/home/home-6.jpg"
                                                        srcset="images/home/home-6.jpg 410w"
                                                        sizes="(max-width: 410px) 100vw, 410px" width="410" height="308"
                                                        alt="home">
                                                    <div class="wrap-tag d-flex gap_8 mb_12">
                                                        <div class="tag sale text-button-small fw-6 text_primary-color">
                                                            For Sale
                                                        </div>
                                                        <div
                                                            class="tag categoreis text-button-small fw-6 text_primary-color">
                                                            Townhouse
                                                        </div>
                                                    </div>
                                                    <a href="property-details-1.html" class="overlay-link"></a>
                                                    <div class="wishlist">
                                                        <a href="javascript:void(0);"
                                                            class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-Heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h4 class="price mb_12">$5210,00<span
                                                            class="text_secondary-color text-body-default">/SqFT</span>
                                                    </h4>
                                                    <a href="property-details-1.html"
                                                        class="title mb_8 h5 link text_primary-color">Casa
                                                        Lomas de Machali</a>
                                                    <p>4600 Sunset Blvd, Los Angeles, CA 90027</p>
                                                    <ul class="info d-flex">
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bed"></i>4 Beds
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bathstub"></i>2 Baths
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Ruler"></i>2,200 Sqft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="card-house style-default hover-image" data-id="1">
                                                <div class="img-style mb_20">
                                                    <img loading="lazy" decoding="async" src="images/home/home-9.jpg"
                                                        srcset="images/home/home-9.jpg 410w"
                                                        sizes="(max-width: 410px) 100vw, 410px" width="410" height="308"
                                                        alt="home">
                                                    <div class="wrap-tag d-flex gap_8 mb_12">
                                                        <div class="tag rent text-button-small fw-6 text_primary-color">
                                                            For Rent
                                                        </div>
                                                        <div
                                                            class="tag categoreis text-button-small fw-6 text_primary-color">
                                                            Apartment
                                                        </div>
                                                    </div>
                                                    <a href="property-details-1.html" class="overlay-link"></a>
                                                    <div class="wishlist">
                                                        <a href="javascript:void(0);"
                                                            class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-Heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h4 class="price mb_12">$450,00<span
                                                            class="text_secondary-color text-body-default">/month</span>
                                                    </h4>
                                                    <a href="property-details-1.html"
                                                        class="title mb_8 h5 link text_primary-color">Palmcrest
                                                        Residences</a>
                                                    <p>1422 Sunset Avenue, Los Angeles, CA 90026</p>
                                                    <ul class="info d-flex">
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bed"></i>3 Beds
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bathstub"></i>3 Baths
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Ruler"></i>1,200 Sqft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="card-house style-default hover-image" data-id="8">
                                                <div class="img-style mb_20">
                                                    <img loading="lazy" decoding="async" src="images/home/home-10.jpg"
                                                        srcset="images/home/home-10.jpg 410w"
                                                        sizes="(max-width: 410px) 100vw, 410px" width="410" height="308"
                                                        alt="home">
                                                    <div class="wrap-tag d-flex gap_8 mb_12">
                                                        <div class="tag rent text-button-small fw-6 text_primary-color">
                                                            For Rent
                                                        </div>
                                                        <div
                                                            class="tag categoreis text-button-small fw-6 text_primary-color">
                                                            Villa
                                                        </div>
                                                    </div>
                                                    <a href="property-details-1.html" class="overlay-link"></a>
                                                    <div class="wishlist">
                                                        <a href="javascript:void(0);"
                                                            class="hover-tooltip tooltip-left box-icon">
                                                            <span class="icon icon-Heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h4 class="price mb_12">$320,00<span
                                                            class="text_secondary-color text-body-default">/month</span>
                                                    </h4>
                                                    <a href="property-details-1.html"
                                                        class="title mb_8 h5 link text_primary-color">Cedar
                                                        Hill Estates</a>
                                                    <p>3809 Whispering Pines Road, Austin, TX 73301</p>
                                                    <ul class="info d-flex">
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bed"></i>2 Beds
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bathstub"></i>2 Baths
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Ruler"></i>3,800 Sqft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <ul class="wg-pagination ">
                                            <li>
                                                <a href="#">1</a>
                                            </li>
                                            <li class="active">
                                                <a href="#">2</a>
                                            </li>
                                            <li>
                                                <a href="#">3</a>
                                            </li>
                                            <li class="arrow">
                                                <a href="#"><i class="icon-CaretRight"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="listLayout" role="tabpanel">
                                        <div class="wrap-list d-grid gap_30">
                                            <div class="card-house style-list v3" data-id="1">
                                                <div class="wrap-img">
                                                    <a href="property-details-1.html" class="img-style">
                                                        <img loading="lazy" decoding="async"
                                                            src="images/home/home-list-8.jpg"
                                                            srcset="images/home/home-list-8.jpg 364w"
                                                            sizes="(max-width: 364px) 100vw, 364px" width="364"
                                                            height="260" alt="home">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <div
                                                        class="d-flex align-items-center gap_6 top mb_16 flex-wrap justify-content-between">
                                                        <h4 class="price ">$580,00<span
                                                                class="text_secondary-color text-body-default">/month</span>
                                                        </h4>
                                                        <div class="wrap-tag d-flex gap_8 mb_12">
                                                            <div
                                                                class="tag rent text-button-small fw-6 text_primary-color">
                                                                For Rent
                                                            </div>
                                                            <div
                                                                class="tag categoreis text-button-small fw-6 text_primary-color">
                                                                House
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="property-details-1.html"
                                                        class="title mb_8 h5 link text_primary-color">Villa
                                                        Casa Lomas de Machali</a>
                                                    <p>4600 Sunset Blvd, Los Angeles, CA 90027</p>
                                                    <ul class="info d-flex">
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bed"></i>2 Beds
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bathstub"></i>2 Baths
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Ruler"></i>1,800 Sqft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-house style-list v3" data-id="1">
                                                <div class="wrap-img">
                                                    <a href="property-details-1.html" class="img-style">
                                                        <img loading="lazy" decoding="async"
                                                            src="images/home/home-list-9.jpg"
                                                            srcset="images/home/home-list-9.jpg 364w"
                                                            sizes="(max-width: 364px) 100vw, 364px" width="364"
                                                            height="260" alt="home">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <div
                                                        class="d-flex align-items-center gap_6 top mb_16 flex-wrap justify-content-between">
                                                        <h4 class="price ">$5210,00<span
                                                                class="text_secondary-color text-body-default">/SqFT</span>
                                                        </h4>
                                                        <div class="wrap-tag d-flex gap_8 mb_12">
                                                            <div
                                                                class="tag sale text-button-small fw-6 text_primary-color">
                                                                For Sale
                                                            </div>
                                                            <div
                                                                class="tag categoreis text-button-small fw-6 text_primary-color">
                                                                Office
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="property-details-1.html"
                                                        class="title mb_8 h5 link text_primary-color">The Grand Oak
                                                        Retreat</a>
                                                    <p>9301 Forest Hill Dr, Austin, TX 78759</p>
                                                    <ul class="info d-flex">
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bed"></i>3 Beds
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bathstub"></i>2 Baths
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Ruler"></i>3,200 Sqft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-house style-list v3" data-id="1">
                                                <div class="wrap-img">
                                                    <a href="property-details-1.html" class="img-style">
                                                        <img loading="lazy" decoding="async"
                                                            src="images/home/home-list-10.jpg"
                                                            srcset="images/home/home-list-10.jpg 364w"
                                                            sizes="(max-width: 364px) 100vw, 364px" width="364"
                                                            height="260" alt="home">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <div
                                                        class="d-flex align-items-center gap_6 top mb_16 flex-wrap justify-content-between">
                                                        <h4 class="price ">$320,00<span
                                                                class="text_secondary-color text-body-default">/month</span>
                                                        </h4>
                                                        <div class="wrap-tag d-flex gap_8 mb_12">
                                                            <div
                                                                class="tag rent text-button-small fw-6 text_primary-color">
                                                                For Rent
                                                            </div>
                                                            <div
                                                                class="tag categoreis text-button-small fw-6 text_primary-color">
                                                                House
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="property-details-1.html"
                                                        class="title mb_8 h5 link text_primary-color">Sierra Ridge
                                                        Cottage</a>
                                                    <p>1745 Mountain View Rd, Lake Tahoe, CA 96150</p>
                                                    <ul class="info d-flex">
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bed"></i>2 Beds
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bathstub"></i>3 Baths
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Ruler"></i>1,500 Sqft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-house style-list v3" data-id="1">
                                                <div class="wrap-img">
                                                    <a href="property-details-1.html" class="img-style">
                                                        <img loading="lazy" decoding="async"
                                                            src="images/home/home-list-11.jpg"
                                                            srcset="images/home/home-list-11.jpg 364w"
                                                            sizes="(max-width: 364px) 100vw, 364px" width="364"
                                                            height="260" alt="home">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <div
                                                        class="d-flex align-items-center gap_6 top mb_16 flex-wrap justify-content-between">
                                                        <h4 class="price ">$5210,00<span
                                                                class="text_secondary-color text-body-default">/SqFT</span>
                                                        </h4>
                                                        <div class="wrap-tag d-flex gap_8 mb_12">
                                                            <div
                                                                class="tag sale text-button-small fw-6 text_primary-color">
                                                                For Sale
                                                            </div>
                                                            <div
                                                                class="tag categoreis text-button-small fw-6 text_primary-color">
                                                                Villa
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="property-details-1.html"
                                                        class="title mb_8 h5 link text_primary-color">Palmcrest
                                                        Residences</a>
                                                    <p>1422 Sunset Avenue, Los Angeles, CA 90026</p>
                                                    <ul class="info d-flex">
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bed"></i>2 Beds
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bathstub"></i>3 Baths
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Ruler"></i>1,500 Sqft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-house style-list v3" data-id="1">
                                                <div class="wrap-img">
                                                    <a href="property-details-1.html" class="img-style">
                                                        <img loading="lazy" decoding="async"
                                                            src="images/home/home-list-12.jpg"
                                                            srcset="images/home/home-list-12.jpg 364w"
                                                            sizes="(max-width: 364px) 100vw, 364px" width="364"
                                                            height="260" alt="home">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <div
                                                        class="d-flex align-items-center gap_6 top mb_16 flex-wrap justify-content-between">
                                                        <h4 class="price ">$4210,00<span
                                                                class="text_secondary-color text-body-default">/SqFT</span>
                                                        </h4>
                                                        <div class="wrap-tag d-flex gap_8 mb_12">
                                                            <div
                                                                class="tag sale text-button-small fw-6 text_primary-color">
                                                                For Sale
                                                            </div>
                                                            <div
                                                                class="tag categoreis text-button-small fw-6 text_primary-color">
                                                                Villa
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="property-details-1.html"
                                                        class="title mb_8 h5 link text_primary-color">Cedar Hill
                                                        Estates</a>
                                                    <p>1422 Sunset Avenue, Los Angeles, CA 90026</p>
                                                    <ul class="info d-flex">
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bed"></i>2 Beds
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Bathstub"></i>3 Baths
                                                        </li>
                                                        <li
                                                            class="d-flex align-items-center gap_8 text-title text_primary-color fw-6">
                                                            <i class="icon-Ruler"></i>1,500 Sqft
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="wg-pagination">
                                            <li>
                                                <a href="#">1</a>
                                            </li>
                                            <li class="active">
                                                <a href="#">2</a>
                                            </li>
                                            <li>
                                                <a href="#">3</a>
                                            </li>
                                            <li class="arrow">
                                                <a href="#"><i class="icon-CaretRight"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End main-content -->
@endsection
