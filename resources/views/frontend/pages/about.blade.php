@extends('frontend.layouts.app')

@section('title', $pageTitle ?? 'Gioi thieu')
@section('meta_description', $pageDescription ?? 'Thong tin gioi thieu')

@section('content')
        <!-- main-content -->
        <div class="main-content">

            <div class="section-about tf-spacing-1">
                <div class="tf-container">
                    <div class="heading-section justify-content-center text-center mb_48">
                        <span class="sub text-uppercase fw-6">About Us</span>
                        <h3>Your Reliable Partner In Real <br> Estate Success</h3>
                    </div>
                    <div class="parallaxie" style='background: url("images/section/section-about.jpg")'>
                        <div class="content">
                            <div class="wrap d-flex flex-column">
                                <div class="tf-box-icon style-1">
                                    <div class="heading d-flex justify-content-between mb_19">
                                        <div class="counter-item style-default">
                                            <div class="counter-number">
                                                <h2 class="odometer" data-number="112">10</h2>
                                            </div>
                                        </div>
                                        <div class="icon">
                                            <i class="icon-Certificate"></i>
                                        </div>
                                    </div>
                                    <h6 class="text_secondary-color sub">Awards Received</h6>
                                </div>
                                <div class="d-flex gap_12 bot">
                                    <div class="tf-box-icon style-1">
                                        <div class="heading d-flex justify-content-between mb_19">
                                            <div class="counter-item style-default">
                                                <div class="counter-number">
                                                    <h2 class="odometer" data-number="85">10</h2>
                                                </div>
                                            </div>
                                            <div class="icon">
                                                <i class="icon-BuildingOffice"></i>
                                            </div>
                                        </div>
                                        <h6 class="text_secondary-color sub">Satisfied Clients</h6>
                                    </div>
                                    <div class="tf-box-icon style-1">
                                        <div class="heading d-flex justify-content-between mb_19">
                                            <div class="counter-item style-default">
                                                <div class="counter-number">
                                                    <h2 class="odometer" data-number="66">10</h2>
                                                </div>
                                            </div>
                                            <div class="icon">
                                                <i class="icon-ChartDonut"></i>
                                            </div>
                                        </div>
                                        <h6 class="text_secondary-color sub">Monthly Traffic</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tf-grid-layout md-col-2">
                        <div class="box">
                            <h4 class="title d-flex gap_12 align-items-center mb_20"><i class="icon-Crown"></i>Our
                                Mission
                            </h4>
                            <p class="mb_8">To simplify the real estate journey by connecting people with the right
                                properties through
                                trust, transparency, and technology.</p>
                            <p>We are committed to delivering personalized experiences, whether you're buying, selling,
                                or
                                renting. We embrace new technologies and market trends to deliver smarter, faster, and
                                more
                                efficient property solutions.</p>
                        </div>
                        <div class="box">
                            <h4 class="title d-flex gap_12 align-items-center mb_20"><i class="icon-Target"></i>Our
                                Vision</h4>
                            <p class="mb_8">To become the most trusted real estate partner by redefining how people
                                discover, evaluate, and engage with properties.</p>
                            <p>We envision a future where every individual can find their ideal home or investment with
                                confidence, supported by innovation, integrity, and a deep understanding of market
                                needs.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="section-history tf-spacing-1">
                <div class="t-container">
                    <div class="heading-section justify-content-center text-center mb_48">
                        <span class="sub text-uppercase fw-6 text_secondary-color-2">Our History</span>
                        <h3>Milestones That Define Us</h3>
                    </div>
                </div>
                <div class="content">
                    <div class="tf-container w-xl">
                        <div class="wrap-time-line">
                            <div class="time-item">
                                <div class="heading">
                                    <h3 class="mb_8">2009</h3>
                                    <span class="sub text-label text-uppercase fw-6 ">Humble Beginnings</span>
                                </div>
                                <div class="dot"></div>
                                <p>We started as a small, local agency with a clear mission: helping people find homes
                                    with
                                    honesty and care.</p>
                            </div>
                            <div class="time-item">
                                <div class="heading">
                                    <h3 class="mb_8">2015</h3>
                                    <span class="sub text-label text-uppercase fw-6 ">A Trusted Name</span>
                                </div>
                                <div class="dot"></div>
                                <p>Gained recognition for reliable service and built long-term relationships with
                                    clients and partners.</p>
                            </div>
                            <div class="time-item">
                                <div class="heading">
                                    <h3 class="mb_8">2018</h3>
                                    <span class="sub text-label text-uppercase fw-6 ">Embracing Innovation</span>
                                </div>
                                <div class="dot"></div>
                                <p>Adopted new technologies to streamline the property search and improve customer
                                    experience.</p>
                            </div>
                            <div class="time-item">
                                <div class="heading">
                                    <h3 class="mb_8">2021</h3>
                                    <span class="sub text-label text-uppercase fw-6 ">Over 1,000 Homes Sold</span>
                                </div>
                                <div class="dot"></div>
                                <p>Reached a major milestone with over a thousand successful property transactions
                                    completed.</p>
                            </div>
                            <div class="time-item">
                                <div class="heading">
                                    <h3 class="mb_8">2024</h3>
                                    <span class="sub text-label text-uppercase fw-6 ">Moving Forward Together</span>
                                </div>
                                <div class="dot"></div>
                                <p>Continuing to grow with a dedicated team, modern tools, and a renewed vision for the
                                    future.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-process tf-spacing-1">
                <div class="tf-container">
                    <div class="row tabs-hover-wrap align-items-center">
                        <div class="col-lg-5">
                            <div class="heading-section mb_48">
                                <span class="sub text-uppercase fw-6 text_secondary-color-2">Our Process</span>
                                <h3>Homebuying Steps</h3>
                            </div>
                            <div class="process-item item active" data-tab="tab1">
                                <span class="line"></span>
                                <div class="content">
                                    <h5 class="title mb_8">Step 1: Discover Your Dream Home</h5>
                                    <p>Browse through a curated selection of properties tailored to your lifestyle and
                                        budget.
                                    </p>
                                </div>
                            </div>
                            <div class="process-item item" data-tab="tab2">
                                <span class="line"></span>
                                <div class="content">
                                    <h5 class="title mb_8">Step 2: Schedule A Viewing</h5>
                                    <p>Book a tour at your convenience and explore the space in person or virtually.
                                    </p>
                                </div>
                            </div>
                            <div class="process-item item" data-tab="tab3">
                                <span class="line"></span>
                                <div class="content">
                                    <h5 class="title mb_8">Step 3: Seal The Deal</h5>
                                    <p>Get expert guidance to finalize paperwork and move into your new home with
                                        confidence.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="tab-content-wrap">
                                <div id="tab1" class="tab-content">
                                    <div class="img-style">
                                        <img loading="lazy" decoding="async" src="images/section/process-1.jpg"
                                            width="690" height="518" alt="process">
                                    </div>
                                </div>
                                <div id="tab2" class="tab-content">
                                    <div class="img-style">
                                        <img loading="lazy" decoding="async" src="images/section/process-2.jpg"
                                            width="690" height="518" alt="process">
                                    </div>
                                </div>
                                <div id="tab3" class="tab-content">
                                    <div class="img-style">
                                        <img loading="lazy" decoding="async" src="images/section/process-3.jpg"
                                            width="690" height="518" alt="process">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3>Trusted By Thousands </h3>
                        <div class="wrap-counter">
                            <div class="counter-item style-default">
                                <div class="counter-number">
                                    <h1 class="odometer" data-number="112">10</h1>
                                </div>
                                <h6 class="text_secondary-color">Awards Received</h6>
                            </div>
                            <div class="counter-item style-default">
                                <div class="counter-number">
                                    <h1 class="odometer" data-number="85">10</h1>
                                </div>
                                <h6 class="text_secondary-color">Satisfied Clients</h6>
                            </div>
                            <div class="counter-item style-default">
                                <div class="counter-number">
                                    <h1 class="odometer" data-number="66">10</h1>
                                </div>
                                <h6 class="text_secondary-color">Monthly Traffic</h6>
                            </div>
                            <div class="counter-item style-default">
                                <div class="counter-number">
                                    <h1 class="odometer" data-number="143">10</h1>
                                </div>
                                <h6 class="text_secondary-color">Properties Sold</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-why tf-spacing-1">
                <div class="tf-container">
                    <div class="wrap-heading-section d-flex justify-content-between align-items-center mb_48">
                        <div class="heading-section ">
                            <span class="sub text-uppercase fw-6 text_secondary-color-2">Why CHoose Us</span>
                            <h3 class="text_white">Experience The Difference <br> With Our Solutions</h3>
                        </div>
                        <a href="#" class="tf-btn btn-bg-white btn-px-32">
                            <span>Contact Us</span>
                            <span class="bg-effect"></span>
                        </a>
                    </div>
                    <div class="tf-grid-layout md-col-3">
                        <div class="tf-box-icon style-2 ">
                            <div class="icon mb_24"><i class="icon-Lifebuoy"></i></div>
                            <div class="content">
                                <h5 class="text_white mb_8">Personalized Support</h5>
                                <p class="text_secondary-color-2">Receive tailored assistance from our experienced team
                                    to ensure every step fits your specific needs and goals.</p>
                            </div>
                        </div>
                        <div class="tf-box-icon style-2 ">
                            <div class="icon mb_24"><i class="icon-ClockCountdown"></i></div>
                            <div class="content">
                                <h5 class="text_white mb_8">Time-Saving Process</h5>
                                <p class="text_secondary-color-2">From quick callbacks to streamlined procedures, we
                                    value your time and help you move forward without delays.</p>
                            </div>
                        </div>
                        <div class="tf-box-icon style-2 ">
                            <div class="icon mb_24"><i class="icon-SketchLogo"></i></div>
                            <div class="content">
                                <h5 class="text_white mb_8">Trusted Expertise</h5>
                                <p class="text_secondary-color-2">Work with professionals who bring deep industry
                                    knowledge and proven strategies to guide your decisions confidently.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- seciton-testimonial -->
            <div class="section-testimonials tf-spacing-1">
                <div class="heading-section justify-content-center text-center mb_40    ">
                    <span class="sub text-uppercase fw-6 text_secondary-color-2">Our Testimonials</span>
                    <h3>Whatâ€™s People Sayâ€™s</h3>
                </div>
                <div class="tf-container sw-layout">
                    <div class="swiper" data-preview="2" data-tablet="2" data-mobile="1" data-mobile-sm="2"
                        data-space-lg="30" data-space-md="24" data-space="15">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div>
                                        <ul class="ratings d-flex mb_12">
                                            <li><i class="icon-favorite_major"></i></li>
                                            <li><i class="icon-favorite_major"></i></li>
                                            <li><i class="icon-favorite_major"></i></li>
                                            <li><i class="icon-favorite_major"></i></li>
                                            <li><i class="icon-favorite_major"></i></li>
                                        </ul>
                                        <p class="text_primary-color text-body-1 mb_23">â€œThis platform made property
                                            investing
                                            so much
                                            easier. I found two great rentals in just a few months, and both are already
                                            performing better than expected.â€</p>
                                    </div>
                                    <div class="author d-flex gap_12 align-items-center">
                                        <div class="avatar">
                                            <img src="images/avatar/avatar-4.jpg" width="60" height="60" alt="avatar">
                                        </div>
                                        <div class="info">
                                            <a href="#" class="h6 text_primary-color name link mb_4">Liam Anderson</a>
                                            <p>CEO Digital Avitex</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div>
                                        <ul class="ratings d-flex mb_12">
                                            <li><i class="icon-favorite_major"></i></li>
                                            <li><i class="icon-favorite_major"></i></li>
                                            <li><i class="icon-favorite_major"></i></li>
                                            <li><i class="icon-favorite_major"></i></li>
                                            <li><i class="icon-favorite_major"></i></li>
                                        </ul>
                                        <p class="text_primary-color text-body-1 mb_23">â€œAs a first-time buyer, I felt
                                            guided every step of the way. Found my dream home fast and the support team
                                            was
                                            always there to answer my questions.â€ </p>
                                    </div>
                                    <div class="author d-flex gap_12 align-items-center">
                                        <div class="avatar">
                                            <img src="images/avatar/avatar-5.jpg" width="60" height="60" alt="avatar">
                                        </div>
                                        <div class="info">
                                            <a href="#" class="h6 text_primary-color name link mb_4">Adam Will</a>
                                            <p>CEO Agency Avitex</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div>
                                        <ul class="ratings d-flex mb_12">
                                            <li><i class="icon-favorite_major"></i></li>
                                            <li><i class="icon-favorite_major"></i></li>
                                            <li><i class="icon-favorite_major"></i></li>
                                            <li><i class="icon-favorite_major"></i></li>
                                            <li><i class="icon-favorite_major"></i></li>
                                        </ul>
                                        <p class="text_primary-color text-body-1 mb_23">â€œThis platform made property
                                            investing
                                            so much
                                            easier. I found two great rentals in just a few months, and both are already
                                            performing better than expected.â€</p>
                                    </div>
                                    <div class="author d-flex gap_12 align-items-center">
                                        <div class="avatar">
                                            <img src="images/avatar/avatar-4.jpg" width="60" height="60" alt="avatar">
                                        </div>
                                        <div class="info">
                                            <a href="#" class="h6 text_primary-color name link mb_4">Liam Anderson</a>
                                            <p>CEO Digital Avitex</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div>
                                        <ul class="ratings d-flex mb_12">
                                            <li><i class="icon-favorite_major"></i></li>
                                            <li><i class="icon-favorite_major"></i></li>
                                            <li><i class="icon-favorite_major"></i></li>
                                            <li><i class="icon-favorite_major"></i></li>
                                            <li><i class="icon-favorite_major"></i></li>
                                        </ul>
                                        <p class="text_primary-color text-body-1 mb_23">â€œThis platform made property
                                            investing
                                            so much
                                            easier. I found two great rentals in just a few months, and both are already
                                            performing better than expected.â€</p>
                                    </div>
                                    <div class="author d-flex gap_12 align-items-center">
                                        <div class="avatar">
                                            <img src="images/avatar/avatar-4.jpg" width="60" height="60" alt="avatar">
                                        </div>
                                        <div class="info">
                                            <a href="#" class="h6 text_primary-color name link mb_4">Liam Anderson</a>
                                            <p>CEO Digital Avitex</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sw-dots style-1 sw-pagination-layout justify-content-center d-flex mt_24">
                        </div>
                    </div>
                    <div class="wrap-infiniteslide">
                        <div class="infiniteslide " data-clone="2" data-style="left">
                            <div class="marquee-item ">
                                <div class="brand">
                                    <img src="images/logo/brand-1.png" alt="brand">
                                </div>
                            </div>
                            <div class="marquee-item ">
                                <div class="brand">
                                    <img src="images/logo/brand-2.png" alt="brand">
                                </div>
                            </div>
                            <div class="marquee-item ">
                                <div class="brand">
                                    <img src="images/logo/brand-3.png" alt="brand">
                                </div>
                            </div>
                            <div class="marquee-item ">
                                <div class="brand">
                                    <img src="images/logo/brand-4.png" alt="brand">
                                </div>
                            </div>
                            <div class="marquee-item ">
                                <div class="brand">
                                    <img src="images/logo/brand-5.png" alt="brand">
                                </div>
                            </div>
                            <div class="marquee-item ">
                                <div class="brand">
                                    <img src="images/logo/brand-6.png" alt="brand">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End seciton-testimonial -->

            <div class="banner">
                <div class="parallaxie" style='background: url("images/section/banner.jpg")'>
                    <div class="tf-container z-5">
                        <h2 class="text_white mb_20">Find Your Property, <br>
                            Start Your Homeownership Journey Today</h2>
                        <p class="text_white text-body-1">Connect with your Desginer in minutes</p>
                    </div>
                </div>
            </div>

            <div class="section-agents tf-spacing-1">
                <div class="tf-container ">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="box">
                                <div class="heading-section mb_32">
                                    <span class="sub text-uppercase fw-6 text_secondary-color-2">Top Agents</span>
                                    <h3>Jessica Lane</h3>
                                </div>
                                <div class="content mb_32">
                                    <h6 class="mb_12">Total Sales Volume: $48M+ in Closed Sales</h6>
                                    <p class="text-body-2">With over a decade of real estate experience in luxury
                                        coastal
                                        properties, Jessica is known for her integrity, deep market knowledge.</p>
                                </div>
                                <a href="#" class="tf-btn btn-bg-1 btn-px-24">
                                    <span>View Agent</span>
                                    <span class="bg-effect"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 offset-xl-1 sw-layout">
                            <div class="swiper" data-preview="2" data-tablet="2" data-mobile="1" data-mobile-sm="2"
                                data-space-lg="20" data-space-md="15" data-space="15">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="agent-item">
                                            <a href="#" class="img-style">
                                                <img loading="lazy" decoding="async" src="images/section/agent-1.jpg"
                                                    width="360" height="360" alt="agent">
                                            </a>
                                            <ul class="social">
                                                <li><a href="#" class="icon-FacebookLogo"></a></li>
                                                <li><a href="#" class="icon-XLogo"></a></li>
                                                <li><a href="#" class="icon-InstagramLogo"></a></li>
                                                <li><a href="#" class="icon-YoutubeLogo"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="agent-item">
                                            <a href="#" class="img-style">
                                                <img loading="lazy" decoding="async" src="images/section/agent-2.jpg"
                                                    width="360" height="360" alt="agent">
                                            </a>
                                            <ul class="social">
                                                <li><a href="#" class="icon-FacebookLogo"></a></li>
                                                <li><a href="#" class="icon-XLogo"></a></li>
                                                <li><a href="#" class="icon-InstagramLogo"></a></li>
                                                <li><a href="#" class="icon-YoutubeLogo"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="agent-item">
                                            <a href="#" class="img-style">
                                                <img loading="lazy" decoding="async" src="images/section/agent-1.jpg"
                                                    width="360" height="360" alt="agent">
                                            </a>
                                            <ul class="social">
                                                <li><a href="#" class="icon-FacebookLogo"></a></li>
                                                <li><a href="#" class="icon-XLogo"></a></li>
                                                <li><a href="#" class="icon-InstagramLogo"></a></li>
                                                <li><a href="#" class="icon-YoutubeLogo"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="agent-item">
                                            <a href="#" class="img-style">
                                                <img loading="lazy" decoding="async" src="images/section/agent-2.jpg"
                                                    width="360" height="360" alt="agent">
                                            </a>
                                            <ul class="social">
                                                <li><a href="#" class="icon-FacebookLogo"></a></li>
                                                <li><a href="#" class="icon-XLogo"></a></li>
                                                <li><a href="#" class="icon-InstagramLogo"></a></li>
                                                <li><a href="#" class="icon-YoutubeLogo"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="sw-button nav-prev-layout">
                                    <i class="icon-CaretLeft"></i>
                                </div>
                                <div class="sw-button nav-next-layout">
                                    <i class="icon-CaretRight"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End main-content -->
@endsection
