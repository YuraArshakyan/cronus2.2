<!DOCTYPE html>
<html lang="en">

@include('common.head')

<body class="body-wrapper">

    @include('common.preloadAndTopbar')

    @include('common.header-1')

    <div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/page-banner.jpg')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>our Services</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">services</li>
                </ol>
            </nav>
        </div>
    </div>
    <section class="our-service-provide section-padding theme-bg">
        <div class="container">
            <div class="col-12 col-lg-12 mb-40">
                <div class="block-contents text-center">
                    <div class="section-title">
                        <h5>freight</h5>
                        <span>Our Services</span>
                        <h2>Cronus <span>Services</span></h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                @for($i = 2; $i <= 7; $i++)
                    @foreach($photos as $photo)
                        @if($photo->id == $i)
                            @foreach($texts as $text)
                                @if($text->id == $i)
                                    @foreach($title as $titles)
                                        @if($titles->id == $i)
                                            <div class="col-xl-4 col-md-6 col-12">
                                                <div class="single-our-service">
                                                    <div class="thumb bg-cover" style="background-image: url('assets/img/services/{{$photo->photos}}')"></div>
                                                    <div class="content">
                                                        <div class="icon">
                                                            <i class="{{$icone[$i]}}"></i>
                                                        </div>
                                                        <h3><a href="services-details.html">{{$titles->titles}}</a></h3>
                                                        <p>{{$text->text}}</p>
                                                    </div>
                                                </div>
                                                @auth()
                                                    <a href="{{url('edit/'. 3 . '/'. 5)}}" data-animation-in="fadeInRight" data-delay-in="0.8" class="theme-btn border-style me-sm-4 mt-4 animated" style="width: 100%; text-align: center">Edit</a>
                                                @endauth
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                @endfor
            </div>
        </div>
    </section>

    <section class="work-process-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 mb-40">
                    <div class="block-contents text-center">
                        <div class="section-title">
                            <h5>steps</h5>
                            <span>Steps of Cooperation</span>
                            <h2>How we works</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="work-steps-list">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-work-steps">
                            <div class="icon">
                                <img src="assets/img/icons/step1.png" alt="">
                            </div>
                            <div class="content">
                                <h4>Listening you</h4>
                                <p>Greenling sleeper; Owens pupfish large-eye bream kokanee sprat shrimpfish pleasure</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-work-steps">
                            <div class="icon">
                                <img src="assets/img/icons/step2.png" alt="">
                            </div>
                            <div class="content">
                                <h4>Lane pairing analysis</h4>
                                <p>Greenling sleeper; Owens pupfish large-eye bream kokanee sprat shrimpfish pleasure</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-work-steps">
                            <div class="icon">
                                <img src="assets/img/icons/step3.png" alt="">
                            </div>
                            <div class="content">
                                <h4>Check all details</h4>
                                <p>Greenling sleeper; Owens pupfish large-eye bream kokanee sprat shrimpfish pleasure</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-work-steps">
                            <div class="icon">
                                <img src="assets/img/icons/step4.png" alt="">
                            </div>
                            <div class="content">
                                <h4>Fast & efficient delivery</h4>
                                <p>Greenling sleeper; Owens pupfish large-eye bream kokanee sprat shrimpfish pleasure</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-wrapper section-padding bg-overlay bg-cover" style="background-image: url('assets/img/cta-bg.jpg')">
        <div class="container">
            <div class="col-lg-8 offset-lg-2 col-12 text-center">
                <div class="cta-contents">
                    <img src="assets/img/footer-logo.png" alt="transland">
                    <h1 class="text-white mt-5 mb-4">World’s Leading Contract Logistics Provider</h1>
                    <a href="contact.html" class="theme-btn">make custom request</a>
                </div>
            </div>
        </div>
    </section>

    <section class="our-service-solution section-bg section-padding">
        <div class="container">
            <div class="col-lg-8 offset-lg-2 text-center col-12">
                <div class="section-title-2">
                    <span>services</span>
                    <h1>We Provide Solution</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-freight-service wow fadeInUp">
                        <h3><a href="services-details.html">Land Transport</a></h3>
                        <p>Road transport and industry driving coordinations experience</p>
                        <div class="checked-list right">
                            <li>Replenishment & Picking</li>
                            <li>Packaging & Distribution</li>
                            <li>Warehousing Operation</li>
                        </div>
                        <div class="icon"><i class="flaticon-delivery-truck-1"></i></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-freight-service active wow fadeInUp" data-wow-delay=".3s">
                        <h3><a href="services-details.html">Air Freight</a></h3>
                        <p>Air transport organization and industry driving coordinations experience</p>
                        <div class="checked-list right">
                            <li>General Air Freight Products</li>
                            <li>Charter Services</li>
                            <li>Real Time Monitoring</li>
                        </div>
                        <div class="icon"><i class="flaticon-airplane-5"></i></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-freight-service wow fadeInUp" data-wow-delay=".6s">
                        <h3><a href="services-details.html">Ocean Freight</a></h3>
                        <p>Ocean freight gives organization and industry excellent experience</p>
                        <div class="checked-list right">
                            <li>Less-than-container Load</li>
                            <li>Full Container Load</li>
                            <li>Intermodal Solutions</li>
                        </div>
                        <div class="icon"><i class="flaticon-cargo-ship-3"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-price-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-contents mb-60">
                        <div class="section-title text-center">
                            <h5 class="text-center">price</h5>
                            <span>Best Pricing</span>
                            <h2>The Right <span>Price for you</span></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single-price-bar">
                <div class="row align-items-center">
                    <div class="col-xl-2">
                        <div class="package-name">
                            <h3>One Pack</h3>
                        </div>
                    </div>
                    <div class="col-xl-5 pe-xl-0">
                        <div class="package-features">
                            <span>Custom business rules</span>
                            <span>1 warehouse</span>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="package-price">
                            <h2><span>49</span>USD</h2>
                        </div>
                    </div>
                    <div class="col-xl-3 text-xl-end">
                        <a href="#" class="theme-btn minimal-btn">get started <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="single-price-bar">
                <div class="row align-items-center">
                    <div class="col-xl-2">
                        <div class="package-name">
                            <h3>Starter Pack</h3>
                        </div>
                    </div>
                    <div class="col-xl-5 pe-xl-0">
                        <div class="package-features">
                            <span>Custom business rules</span>
                            <span>2 warehouse</span>
                            <span>Real-time rate</span>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="package-price">
                            <h2><span>100</span>USD</h2>
                        </div>
                    </div>
                    <div class="col-xl-3 text-xl-end">
                        <a href="#" class="theme-btn minimal-btn">get started <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="single-price-bar active">
                <div class="row align-items-center">
                    <div class="col-xl-2">
                        <div class="package-name">
                            <h3>Business Pack</h3>
                        </div>
                    </div>
                    <div class="col-xl-5 pe-xl-0">
                        <div class="package-features">
                            <span>Pro business rules</span>
                            <span>10 warehouse</span>
                            <span>Real-time rate</span>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="package-price">
                            <h2><span>149</span>USD</h2>
                        </div>
                    </div>
                    <div class="col-xl-3 text-xl-end">
                        <a href="#" class="theme-btn minimal-btn">get started <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('common.Feedback')

    @include('common.Partners')

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
    <script src="assets/js/active.js"></script>
</body>

</html>
