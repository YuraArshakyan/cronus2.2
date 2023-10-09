<!DOCTYPE html>
<html lang="en">

@include('common.head')

<body class="body-wrapper">

    @include('common.preloadAndTopbar')

    @include('common.header-1')

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <section class="contact-page-wrap section-padding">
        <div class="container">
            <div class="row pt-5">
                <div class="block-contents mb-30 pt-60">
                    <div class="section-title text-center">
                        <h2>Admin <span>dash</span></h2>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="contact-form">
                        <form action="{{route('admin.login')}}" method="GET" class="row" id="contact-form">
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="name">Username</label>
                                    <input type="text" id="fname" name="name" placeholder="Enter username" >
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="password">Password</label>
                                    <input id="email" name="password" type="password" placeholder="Enter password" >
                                </div>
                            </div>
                            <div class="col-md-12 col-12 text-center">
                                <input class="submit-btn" type="submit" value="Login">
                            </div>
                        </form>
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
