<!DOCTYPE html>
<html lang="en">

@include('common.head')

<body class="body-wrapper">

    @include('common.preloadAndTopbar')

    @include('common.header-1')

    <div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/page-banner.jpg')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>contact us</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">contact Us</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="contact-page-wrap section-padding">
        <div class="container">
            <div class="row">
                @for($i = 16; $i <= 18; $i++)
                    @foreach($texts as $text)
                        @if($text->id == $i)
                            @foreach($title as $titles)
                                @if($titles->id == $i)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-contact-card card1">
                                            <div class="top-part">
                                                <div class="icon">
                                                    <i class="{{$icone[$i]}}"></i>
                                                </div>
                                                <div class="title">
                                                    <h4>{{$titles->titles}}</h4>
                                                </div>
                                            </div>
                                            <div class="bottom-part">
                                                <div class="info">
                                                    <p>{!!nl2br(str_replace(" ", "&nbsp;", $text->text))!!}</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fal fa-arrow-right"></i>
                                                </div>
                                            </div>
                                            @auth
                                                <a href="{{url('edit/'. 5 . '/'. $i)}}" data-animation-in="fadeInRight" data-delay-in="0.8" class="theme-btn border-style me-sm-4 mt-4 animated" style="width: 100%; text-align: center">Edit</a>
                                            @endauth
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                @endfor
            </div>

            <div class="row pt-5">
                <div class="block-contents mb-30 pt-60">
                    <div class="section-title text-center">
                        <h5 class="text-center">contact</h5>
                        <span>fil the form</span>
                        <h2>get <span>in touch</span></h2>
                    </div>
                </div>

                <div class="col-12 col-lg-12">
                    <div class="contact-form">
                        <form action="mail.php" class="row" id="contact-form">
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="fname">Full Name</label>
                                    <input type="text" id="fname" placeholder="Enter Name" >
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" placeholder="Enter Email Address" >
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" id="phone" placeholder="Enter Number">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="subject">Subject</label>
                                    <input type="text" id="subject" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="single-personal-info">
                                    <label for="message">Enter Message</label>
                                    <textarea id="message" placeholder="Enter message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-12 text-center">
                                <input class="submit-btn" type="submit" value="Get A Quote">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-branch-wrapper section-padding pt-0">
        <div class="office-google-map-wrapper wow fadeInUp">
                <iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
