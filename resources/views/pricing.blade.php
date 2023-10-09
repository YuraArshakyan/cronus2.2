<!DOCTYPE html>
<html lang="en">

@include('common.head')

<body class="body-wrapper">

    @include('common.preloadAndTopbar')

    @include('common.header-1')

    <div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/page-banner.jpg')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>Pricing</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">price</li>
                </ol>
            </nav>
        </div>
    </div>

    @include('common.Prices')

    <section class="cta-wrapper section-padding style-2 bg-cover" style="background-image: url('assets/img/cta-bg-2.jpg')">
        <div class="container">
            <div class="col-lg-8 offset-lg-2 col-12 text-center">
                <div class="cta-contents">
                    <img src="assets/img/footer-logo.png" alt="transland">
                    <h1 class="text-white mt-4 mt-md-5 mb-4">World’s Leading Contract Logistics Provider</h1>
                    <a href="contact.html" class="theme-btn">make custom request <i class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="our-pricing-plan-wrapper section-padding">
        <div class="container">
            <div class="col-lg-8 offset-lg-2 text-center col-12">
                <div class="section-title-2">
                    <span>pricing</span>
                    <h1>Best Pricing Plans</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-pricing-plan plan-1">
                        <div class="plan-title">
                            <h2>pro</h2>
                        </div>
                        <div class="plan-value">
                            <span>$19.00</span>
                            USD Billed monthly
                        </div>
                        <div class="plan-buy-btn">
                            <p>Basic plan for small companies with
                                one month subscription.</p>
                            <a href="pricing.html" class="theme-btn">Purchase Now <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <ul class="plan-service-list">
                            <li>1 Warehouse</li>
                            <li class="no">Custom Business Rules</li>
                            <li>Real Time Rate Shopping</li>
                            <li>100% Insurance</li>
                            <li>50 Freight Shipments</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-pricing-plan active plan-2">
                        <div class="plan-title">
                            <h2>Business</h2>
                        </div>
                        <div class="plan-value">
                            <span>$49.00</span>
                            USD Billed monthly
                        </div>
                        <div class="plan-buy-btn">
                            <p>Standard plan for small companies with
                                one month subscription.</p>
                            <a href="pricing.html" class="theme-btn">Purchase Now <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <ul class="plan-service-list">
                            <li>2 Warehouse</li>
                            <li>Custom Business Rules</li>
                            <li>Real Time Rate Shopping</li>
                            <li>100% Insurance</li>
                            <li>200 Freight Shipments</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-pricing-plan plan-3">
                        <div class="plan-title">
                            <h2>Advanced</h2>
                        </div>
                        <div class="plan-value">
                            <span>$99.00</span>
                            USD Billed monthly
                        </div>
                        <div class="plan-buy-btn">
                            <p>Advanced plan for big companies with
                                one month subscription.</p>
                            <a href="pricing.html" class="theme-btn">Purchase Now <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                        <ul class="plan-service-list">
                            <li>5 Warehouse</li>
                            <li>Custom Business Rules</li>
                            <li>Real Time Rate Shopping</li>
                            <li>100% Insurance</li>
                            <li>500 Freight Shipments</li>
                        </ul>
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
    <script src="assets/js/active.js"></script>
</body>

</html>
