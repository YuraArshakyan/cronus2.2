<!DOCTYPE html>
<html lang="en">

@include('common.head')

<body class="body-wrapper">

    @include('common.preloadAndTopbar')

    @include('common.header-1')

    <div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/page-banner.jpg')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>about us</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>

    @foreach($title as $titles)
    @foreach($texts as $text)
    @foreach($photos as $photo)
    @endforeach
    @endforeach
    @endforeach
    @include('common.overview')

    <section class="why-chose-us section-padding section-bg">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 mb-40">
                    <div class="block-contents text-center">
                        <div class="section-title">
                            <h5>features</h5>
                            <span>why choose use</span>
                            <h2>6 Reasons <span>Why choose</span></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mtm-30">
                <div class="col-md-6 col-12 col-lg-4 mt-30">
                    <div class="single-features-box">
                        <div class="icon">
                            <i class="far fa-sack-dollar"></i>
                        </div>
                        <div class="contents">
                            <h4>Transparent Pricing</h4>
                            <p>We commit ourselves to complete all projects within the timeline set with our honorable clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 mt-30">
                    <div class="single-features-box">
                        <div class="icon">
                            <i class="fal fa-shipping-timed"></i>
                        </div>
                        <div class="contents">
                            <h4>On - Time Delivery</h4>
                            <p>We commit ourselves to complete all projects within the timeline set with our honorable clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 mt-30">
                    <div class="single-features-box">
                        <div class="icon">
                            <i class="fal fa-clock"></i>
                        </div>
                        <div class="contents">
                            <h4>Real Time Tracking</h4>
                            <p>We commit ourselves to complete all projects within the timeline set with our honorable clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 mt-30">
                    <div class="single-features-box">
                        <div class="icon">
                            <i class="fal fa-plane-departure"></i>
                        </div>
                        <div class="contents">
                            <h4>Global Logistics Partner</h4>
                            <p>We commit ourselves to complete all projects within the timeline set with our honorable clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 mt-30">
                    <div class="single-features-box">
                        <div class="icon">
                            <i class="fal fa-user-headset"></i>
                        </div>
                        <div class="contents">
                            <h4>24/7 Online Support</h4>
                            <p>We commit ourselves to complete all projects within the timeline set with our honorable clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 mt-30">
                    <div class="single-features-box">
                        <div class="icon">
                            <i class="fal fa-shield-check"></i>
                        </div>
                        <div class="contents">
                            <h4>Insurance & guarantee</h4>
                            <p>We commit ourselves to complete all projects within the timeline set with our honorable clients.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @foreach($title as $titles)
    @endforeach
    @include('common.Team')

    @include('common.Feedback')

    <section class="brand-showcase-funfact-wrapper section-padding bg-contain bg-center" style="background-image: url('assets/img/dot_map.png')">
        <div class="container">
            <div class="col-12 text-center mb-20 mtm-20">
                <div class="mask-outline bg-center" style="background-image: url('assets/img/mask-bg.jpg')">
                    <h1>20,8700</h1>
                </div>
                <h6 class="mt-4">All-over delivery done by our team</h6>
            </div>

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-4 col-lg-3 col-12">
                    <div class="single-brand-logo">
                        <img src="assets/img/brand/1.png" alt="transland">
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-12">
                    <div class="single-brand-logo">
                        <img src="assets/img/brand/2.png" alt="transland">
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-12">
                    <div class="single-brand-logo">
                        <img src="assets/img/brand/3.png" alt="transland">
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-12">
                    <div class="single-brand-logo">
                        <img src="assets/img/brand/4.png" alt="transland">
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-12">
                    <div class="single-brand-logo">
                        <img src="assets/img/brand/5.png" alt="transland">
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-12">
                    <div class="single-brand-logo">
                        <img src="assets/img/brand/6.png" alt="transland">
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-12">
                    <div class="single-brand-logo">
                        <img src="assets/img/brand/7.png" alt="transland">
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
                    <a href="contact.html" class="theme-btn">contact with us</a>
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
    <script src="assets/js/active.js"></script>
</body>

</html>
