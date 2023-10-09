<!DOCTYPE html>
<html lang="en">

@include('common.head')

<body class="body-wrapper">

    @include('common.preloadAndTopbar')

    @include('common.header-1')

    <section class="hero-wrapper hero-1">
        @auth()
            <div class="container">
                <div class="edit_carousel_flex">
                    <div class="edit_carousel">
                        <form action="" href="">
                            <a href="{{url('edit/'. 1 . '/'. 2)}}"><i class="far fa-pen edit_emblem"></i></a>
                        </form>
                    </div>
                </div>
            </div>
        @endauth
        <div class="hero-slider-active transland-dots">
            <div class="single-slide">
                <div class="slide-bg bg-cover wow zoomIn" style="background-image: url('assets/img/home1/@foreach($slides['slide1'] as $img){{$img->img}}@endforeach');">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-xxl-6 col-lg-8 col-sm-10">
                            <div class="hero-contents pe-lg-3 text-white">
                                <h1 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.2">Innovative
                                    thing <span>Provide</span></h1>
                                <p class="pe-lg-5 mb-4 animated" data-animation-in="fadeInRight" data-delay-in="0.5">We are committed to providing our customers with exceptional service while offering our employees </p>
                                <a href="{{route('contacts')}}" data-animation-in="fadeInRight" data-delay-in="0.8" class="theme-btn border-style me-sm-4 mt-4 animated">Track your order</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-pop-video-box-wrapper d-flex text-white align-items-center" data-animation-in="fadeInRight" data-delay-in="1s">
                    <div class="text col-6">
                        <h6>We're thriving and building better</h6>
                    </div>
                    <div class="video-wrapper bg-overlay bg-cover bg-center col-6 justify-content-center align-items-center" style="background-image: url('assets/img/faq-video-pup.jpg')">
                        <a href="https://www.youtube.com/watch?v=E1xkXZs0cAQ" class="popup-video play-video"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="single-slide">
                <div class="slide-bg bg-cover" style="background-image: url('assets/img/home1/@foreach($slides['slide2'] as $img){{$img->img}}@endforeach');">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-xxl-6 col-lg-8 col-sm-10">
                            <div class="hero-contents pe-lg-3 text-white">
                                <h1 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.2">best Logistics in the <span>World</span></h1>
                                <p class="pe-lg-5 mb-4" data-animation-in="fadeInRight" data-delay-in="0.5">We are committed to providing our customers with exceptional service while offering our employees </p>
                                <a href="{{route('contacts')}}" data-animation-in="fadeInRight" data-delay-in="0.8" class="theme-btn border-style me-sm-4 mt-4">Track your order</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-pop-video-box-wrapper d-flex text-white align-items-center" data-animation-in="fadeInRight" data-delay-in="1s">
                    <div class="text col-6">
                        <h6>We're thriving and building better</h6>
                    </div>
                    <div class="video-wrapper bg-overlay bg-cover bg-center col-6 justify-content-center align-items-center" style="background-image: url('assets/img/faq-video-pup.jpg')">
                        <a href="https://www.youtube.com/watch?v=E1xkXZs0cAQ" class="popup-video play-video"><<i class="fas fa-play">></i></a>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle" fill="none" stroke="currentColor">
                <circle r="20" cy="22" cx="22" id="translandcircle" />
            </symbol>
        </svg>
    </section>

    @foreach($photos as $photo)
    @endforeach
    @include('common.overview')
    @foreach($title as $title)
    @endforeach

    <section class="our-service-wrapper fix theme-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-9">
                    <div class="block-contents">
                        <div class="section-title">
                            <h5 class="textleft">Service</h5>
                            <span>Featured Service</span>
                            <h2>What <span>We Do</span></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 ps-0 col-3 text-end">
                    <div class="services-carousel-nav-prev"><i class="fal fa-long-arrow-left"></i></div>
                    <div class="services-carousel-nav-next"><i class="fal fa-long-arrow-right"></i></div>
                </div>
            </div>
            <div class="col-md-12 col-12">
                <div class="services-carousel-active">
                    <div class="single-service-card">
                        <div class="service-banner-img bg-cover" style="background-image: url('assets/img/services/{{$photo->what_we_do_1_photos}}')"></div>
                        <div class="content">
                            <h3><a href="services-details.html">{{$title->what_we_do_1_title}}</a></h3>
                            @foreach($texts as $text)
                                <p>{{$text->what_we_do_1}}</p>
                            @endforeach
                        </div>
                        @auth()
                            <a href="{{url('edit/'. 3 . '/'. 1)}}" data-animation-in="fadeInRight" data-delay-in="0.8" class="theme-btn border-style me-sm-4 mt-4 animated" style="width: 100%; text-align: center">Edit</a>
                        @endauth
                    </div>
                    <div class="single-service-card">
                        <div class="service-banner-img bg-cover" style="background-image: url('assets/img/services/{{$photo->what_we_do_2_photos}}')"></div>
                        <div class="content">
                            <h3><a href="services-details.html">{{$title->what_we_do_2_title}}</a></h3>
                            @foreach($texts as $text)
                                <p>{{$text->what_we_do_2}}</p>
                            @endforeach
                        </div>
                        @auth()
                            <a href="{{url('edit/'. 3 . '/'. 2)}}" data-animation-in="fadeInRight" data-delay-in="0.8" class="theme-btn border-style me-sm-4 mt-4 animated" style="width: 100%; text-align: center">Edit</a>
                        @endauth
                    </div>
                    <div class="single-service-card">
                        <div class="service-banner-img bg-cover" style="background-image: url('assets/img/services/{{$photo->what_we_do_3_photos}}')"></div>
                        <div class="content">
                            <h3><a href="services-details.html">{{$title->what_we_do_3_title}}</a></h3>
                            @foreach($texts as $text)
                                <p>{{$text->what_we_do_3}}</p>
                            @endforeach
                        </div>
                        @auth()
                            <a href="{{url('edit/'. 3 . '/'. 3)}}" data-animation-in="fadeInRight" data-delay-in="0.8" class="theme-btn border-style me-sm-4 mt-4 animated" style="width: 100%; text-align: center">Edit</a>
                        @endauth
                    </div>
                    <div class="single-service-card">
                        <div class="service-banner-img bg-cover" style="background-image: url('assets/img/services/{{$photo->what_we_do_4_photos}}')"></div>
                        <div class="content">
                            <h3><a href="services-details.html">{{$title->what_we_do_4_title}}</a></h3>
                            @foreach($texts as $text)
                                <p>{{$text->what_we_do_4}}</p>
                            @endforeach
                        </div>
                        @auth()
                            <a href="{{url('edit/'. 3 . '/'. 4)}}" data-animation-in="fadeInRight" data-delay-in="0.8" class="theme-btn border-style me-sm-4 mt-4 animated" style="width: 100%; text-align: center">Edit</a>
                        @endauth
                    </div>
                    <div class="single-service-card">
                        <div class="service-banner-img bg-cover" style="background-image: url('assets/img/services/{{$photo->what_we_do_5_photos}}')"></div>
                        <div class="content">
                            <h3><a href="services-details.html">{{$title->what_we_do_5_title}}</a></h3>
                            @foreach($texts as $text)
                                <p>{{$text->what_we_do_5}}</p>
                            @endforeach
                        </div>
                        @auth()
                            <a href="{{url('edit/'. 3 . '/'. 5)}}" data-animation-in="fadeInRight" data-delay-in="0.8" class="theme-btn border-style me-sm-4 mt-4 animated" style="width: 100%; text-align: center">Edit</a>
                        @endauth
                    </div>
                    <div class="single-service-card">
                        <div class="service-banner-img bg-cover" style="background-image: url('assets/img/services/{{$photo->what_we_do_6_photos}}')"></div>
                        <div class="content">
                            <h3><a href="services-details.html">{{$title->what_we_do_6_title}}</a></h3>
                            @foreach($texts as $text)
                                <p>{{$text->what_we_do_6}}</p>
                            @endforeach
                        </div>
                        @auth()
                            <a href="{{url('edit/'. 3 . '/'. 6)}}" data-animation-in="fadeInRight" data-delay-in="0.8" class="theme-btn border-style me-sm-4 mt-4 animated" style="width: 100%; text-align: center">Edit</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="funfact-countdown-wrapper fix">
        <div class="container-fluid p-0">
            <div class="row no-padding">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-funfact-item">
                        <div class="icon">
                            <img src="assets/img/icons/map-classic.png" alt="">
                        </div>
                        <div class="countdown">
                            <h2>8700</h2>
                            <span>All Over The World</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-funfact-item">
                        <div class="icon">
                            <img src="assets/img/icons/plan.png" alt="">
                        </div>
                        <div class="countdown">
                            <h2>5644</h2>
                            <span>All Over The World</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-funfact-item">
                        <div class="icon">
                            <img src="assets/img/icons/box.png" alt="">
                        </div>
                        <div class="countdown">
                            <h2>2390</h2>
                            <span>All Over The World</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-funfact-item">
                        <div class="icon">
                            <img src="assets/img/icons/cup.png" alt="">
                        </div>
                        <div class="countdown">
                            <h2>1150</h2>
                            <span>All Over The World</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('common.Team')

    <section class="request-a-quote-section theme-bg bg-cover calculate-wrapper section-padding" style="background-image: url('assets/img/cost-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-12">
                    <div class="block-contents mb-20 pr-30">
                        <div class="section-title">
                            <h5 class="textleft">quote</h5>
                            <span>Request a quote</span>
                            <h2>Cost <span>Calculator</span></h2>
                            <p class="text-white">You can know the Price for your Transportation in Advance. We Offers intellgent concepts for road and tail and well as complex special transport services</p>
                        </div>
                    </div>
                    <div class="row me-xl-5 text-white">
                        <div class="col-sm-6">
                            <div class="single-request-element">
                                <div class="icon">
                                    <i class="fal fa-warehouse"></i>
                                </div>
                                <h6>Warehouse</h6>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-request-element">
                                <div class="icon">
                                    <i class="fal fa-location"></i>
                                </div>
                                <h6>Online Tracking</h6>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-request-element">
                                <div class="icon">
                                    <i class="fal fa-headset"></i>
                                </div>
                                <h6>Support 24/7</h6>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-request-element">
                                <div class="icon">
                                    <i class="fal fa-shield-check"></i>
                                </div>
                                <h6>Cargo Insurance</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7 col-12">
                    <div class="request-quote-form-wrapper mt-5 mt-xl-0 ms-xl-3">
                        <h4>Personal & Shipment data</h4>
                        <div class="request-quote-form">
                            <form action="#">
                                <div class="row d-flex align-item-center">
                                    <div class="col-sm-6 col-12">
                                        <input type="text" name="name" placeholder="Full name">
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <input type="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <input type="text" name="phone" placeholder="Phone">
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <input type="text" name="deliverycity" placeholder="Delivery city">
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <input type="text" name="departurecity" placeholder="City of departure">
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <select name="ftype" class="wide" id="transfreight" >
                                            <option value="type">Freight type</option>
                                            <option value="air">Air Freight</option>
                                            <option value="ship">Ship Freight</option>
                                            <option value="cargo">Cargo Freight</option>
                                            <option value="road">Road Freight</option>
                                            <option value="rail">rail Freight</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <select name="incoterms" class="wide" id="incoterms" >
                                            <option value="incotermstype">Incoterms</option>
                                            <option value="value1">Value 1</option>
                                            <option value="value2">Value 2</option>
                                            <option value="value3">Value 3</option>
                                            <option value="value4">Value 4</option>
                                        </select>
                                    </div>
                                    <div class="col-6 col-sm-3">
                                        <input type="text" name="weight" placeholder="Weight">
                                    </div>
                                    <div class="col-6 col-sm-3">
                                        <input type="text" name="height" placeholder="Height">
                                    </div>
                                    <div class="col-6 col-sm-3">
                                        <input type="text" name="width" placeholder="Width">
                                    </div>
                                    <div class="col-6 col-sm-3">
                                        <input type="text" name="length" placeholder="Lenght">
                                    </div>
                                    <div class="col-sm-3 col-6 d-flex align-items-center">
                                        <input type="checkbox" name="deliverytype" id="fragile">
                                        <label for="fragile">fragile</label>
                                    </div>
                                    <div class="col-sm-3 col-6 d-flex align-items-center">
                                        <input type="checkbox" name="deliveryexpress" id="express">
                                        <label for="express">Express delivery</label>
                                    </div>
                                    <div class="col-sm-3 col-6 d-flex align-items-center">
                                        <input type="radio" name="optname" id="insurance">
                                        <label for="insurance">Insurance</label>
                                    </div>
                                    <div class="col-sm-3 col-6 d-flex align-items-center">
                                        <input type="radio" name="optname" id="packaging">
                                        <label for="packaging">Packaging</label>
                                    </div>

                                    <div class="col-sm-12">
                                        <input type="submit" class="theme-btn" value="Request a quote">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('common.Prices')

    @include('common.Feedback')

    <div class="video-pop-up-wrapper section-padding bg-cover" style="background-image: url('assets/img/full-video-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center d-flex justify-content-center align-items-center">
                    <div class="video-play-btn">
                        <a href="https://www.youtube.com/watch?v=E1xkXZs0cAQ" class="popup-video play-video"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('common.Partners')

    <section class="cta-wrapper section-padding bg-overlay bg-cover" style="background-image: url('assets/img/cta-bg.jpg')">
        <div class="container">
            <div class="col-lg-8 offset-lg-2 col-12 text-center">
                <div class="cta-contents">
                    <img src="assets/img/footer-logo.png" alt="transland">
                    <h1 class="text-white mt-5 mb-4">World’s Leading Contract Logistics Provider</h1>
                    <a href="{{route('contacts')}}" class="theme-btn">make custom request</a>
                </div>
            </div>
        </div>
    </section>

    <section class="latest-blog-wrapper section-bg section-padding">
        <div class="container">
            <div class="block-contents mb-30">
                <div class="section-title">
                    <h5 class="textleft">news</h5>
                    <span>News Feeds</span>
                    <h2>Blog & <span>Insights</span></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-news-card bg-cover" style="background-image: url('assets/img/blog/b1.jpg')">
                        <div class="contents">
                            <div class="post-cat-date d-flex align-items-center">
                                <div class="post-cat">
                                    <a href="news.html">Transport</a>
                                    <a href="news.html">Delivery</a>
                                </div>
                                <div class="post-date">
                                    June 21, 2021
                                </div>
                            </div>
                            <h5><a href="news-details.html">Means of transportation is
                                of the different kinds transport
                                facilities used.</a></h5>
                            <div class="post-author">
                                <div class="author-img bg-cover bg-center" style="background-image: url('assets/img/blog/author2.jpg')"></div>
                                <div class="author-info">
                                    <h6>Alaxis D. Dowson</h6>
                                    <span>Author</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-news-card active bg-cover" style="background-image: url('assets/img/blog/b1.jpg')">
                        <div class="contents">
                            <div class="post-cat-date d-flex align-items-center">
                                <div class="post-cat">
                                    <a href="news.html">logistics</a>
                                    <a href="news.html">package</a>
                                </div>
                                <div class="post-date">
                                    December 31, 2021
                                </div>
                            </div>
                            <h5><a href="news-details.html">Road, air and sea transport are available. Air transport is the best way</a></h5>
                            <div class="post-author">
                                <div class="author-img bg-cover bg-center" style="background-image: url('assets/img/blog/author3.jpg')"></div>
                                <div class="author-info">
                                    <h6>Salman Ahmed</h6>
                                    <span>Author</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-news-card bg-cover" style="background-image: url('assets/img/blog/b1.jpg')">
                        <div class="contents">
                            <div class="post-cat-date d-flex align-items-center">
                                <div class="post-cat">
                                    <a href="news.html">Transport</a>
                                    <a href="news.html">Delivery</a>
                                </div>
                                <div class="post-date">
                                    May 05, 2022
                                </div>
                            </div>
                            <h5><a href="news-details.html">Key Logistics Trends in Life  Sciences 2021. 5 Benefits of Working with a Broker</a></h5>
                            <div class="post-author">
                                <div class="author-img bg-cover bg-center" style="background-image: url('assets/img/blog/author2.jpg')"></div>
                                <div class="author-info">
                                    <h6>Alaxis D. Dowson</h6>
                                    <span>Author</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('common.footer')

    <!--  ALl JS Plugins
    ====================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imageload.min.js"></script>
    <script src="assets/js/scrollUp.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/slick-animation.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/metismenu.js"></script>
    <script src="assets/js/nice-select2.js"></script>
    <script src="assets/js/active.js"></script>
</body>

</html>
