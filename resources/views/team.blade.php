<!DOCTYPE html>
<html lang="en">

@include('common.head')

<body class="body-wrapper">

    @include('common.preloadAndTopbar')

    @include('common.header-1')

    <div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/page-banner.jpg')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>Our Team</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">team</li>
                </ol>
            </nav>
        </div>
    </div>

    @foreach($photos as $photo)
    @endforeach
    @foreach($title as $title)
    @endforeach
    @foreach($texts as $text)
    @endforeach
    @include('common.Team')

    <section class="team-section section-padding section-bg">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 text-center">
                    <div class="section-title-2">
                        <span>team</span>
                        <h1>Our Professional Team</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="single-team-member bg-cover" style="background-image: url('assets/img/team/{{$photo->team_5_photos}}')">
                        <div class="member-details">
                            <span>{{$title->team_5_position}}</span>
                            <h3>{{$text->team_5}}</h3>
                        </div>
                        <div class="social-icons">
                            <div class="plus-icon"><i class="fal fa-plus"></i></div>
                            <div class="top">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                            <div class="right">
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    @auth
                        <a href="{{url('edit/'. 4 . '/'. 5)}}" data-animation-in="fadeInRight" data-delay-in="0.8" class="theme-btn border-style me-sm-4 mt-4 animated" style="width: 100%; text-align: center">Edit</a>
                    @endauth
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="single-team-member bg-cover" style="background-image: url('assets/img/team/{{$photo->team_6_photos}}')">
                        <div class="member-details">
                            <span>{{$title->team_6_position}}</span>
                            <h3>{{$text->team_6}}</h3>
                        </div>
                        <div class="social-icons">
                            <div class="plus-icon"><i class="fal fa-plus"></i></div>
                            <div class="top">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                            <div class="right">
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    @auth
                        <a href="{{url('edit/'. 4 . '/'. 6)}}" data-animation-in="fadeInRight" data-delay-in="0.8" class="theme-btn border-style me-sm-4 mt-4 animated" style="width: 100%; text-align: center">Edit</a>
                    @endauth
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="single-team-member bg-cover" style="background-image: url('assets/img/team/{{$photo->team_7_photos}}')">
                        <div class="member-details">
                            <span>{{$title->team_7_position}}</span>
                            <h3>{{$text->team_7}}</h3>
                        </div>
                        <div class="social-icons">
                            <div class="plus-icon"><i class="fal fa-plus"></i></div>
                            <div class="top">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                            <div class="right">
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    @auth
                        <a href="{{url('edit/'. 4 . '/'. 7)}}" data-animation-in="fadeInRight" data-delay-in="0.8" class="theme-btn border-style me-sm-4 mt-4 animated" style="width: 100%; text-align: center">Edit</a>
                    @endauth
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="single-team-member bg-cover" style="background-image: url('assets/img/team/{{$photo->team_8_photos}}')">
                        <div class="member-details">
                            <span>{{$title->team_8_position}}</span>
                            <h3>{{$text->team_8}}</h3>
                        </div>
                        <div class="social-icons">
                            <div class="plus-icon"><i class="fal fa-plus"></i></div>
                            <div class="top">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                            <div class="right">
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    @auth
                        <a href="{{url('edit/'. 4 . '/'. 8)}}" data-animation-in="fadeInRight" data-delay-in="0.8" class="theme-btn border-style me-sm-4 mt-4 animated" style="width: 100%; text-align: center">Edit</a>
                    @endauth
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
