<footer class="footer-1 footer-wrap">
    <div class="footer-widgets-wrapper theme-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3">
                    <div class="about-transland pe-md-5 pe-xl-0">
                        <a href="index.html">
                            <img src="{{asset('assets/img/footer-logo.png')}}" style="max-width: 60%" alt="transland">
                        </a>
                        <p>Cronus Logistics Services is a global supplier of transport and logistics solutions. We have offices in more than 20 countries and agents.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-2">
                    <div class="single-footer-wid ps-xl-4">
                        <div class="wid-title">
                            <h6>Our Divisions</h6>
                        </div>
                        <ul>
                            <li><a href="{{route('about')}}">What We Do</a></li>
                            <li><a href="{{route('contacts')}}">Request a Freight</a></li>
                            <li><a href="{{route('contacts')}}">Track & Trace</a></li>
                            <li><a href="{{route('contacts')}}">Rail Freight</a></li>
                            <li><a href="{{route('contacts')}}">Maritime Transport</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-2">
                    <div class="single-footer-wid ps-xl-2">
                        <div class="wid-title">
                            <h6>Our Services</h6>
                        </div>
                        <ul>
                            <li><a href="{{route('about')}}">What We Do</a></li>
                            <li><a href="{{route('contacts')}}">Request a Freight</a></li>
                            <li><a href="{{route('contacts')}}">Track & Trace</a></li>
                            <li><a href="{{route('contacts')}}">Rail Freight</a></li>
                            <li><a href="{{route('contacts')}}">Maritime Transport</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-2">
                    <div class="single-footer-wid">
                        <div class="wid-title">
                            <h6>Industry Sectors</h6>
                        </div>
                        <ul>
                            <li><a href="{{route('about')}}">What We Do</a></li>
                            <li><a href="{{route('contacts')}}">Request a Freight</a></li>
                            <li><a href="{{route('contacts')}}">Track & Trace</a></li>
                            <li><a href="{{route('contacts')}}">Rail Freight</a></li>
                            <li><a href="{{route('contacts')}}">Maritime Transport</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="single-footer-wid site-info-widget">
                        <div class="wid-title">
                            <h6>Get In Touch</h6>
                        </div>
                        <div class="get-in-touch">
                            <div class="single-contact-info">
                                <div class="icon id1">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-info">
                                    <span>{{$config[6]->value}}</span>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="icon id2">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="contact-info">
                                    <span>{{$config[4]->value}}</span>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="icon id3">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="contact-info">
                                    <span>{{$config[5]->value}}</span>
                                </div>
                            </div>
                        </div>

                        <div class="newsletter_widget">
                            <div class="newsletter_box">
                                <form action="#">
                                    <input type="email" placeholder="Enter email address" required>
                                    <button class="submit-btn" type="submit"><i class="fas fa-envelope-open"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container align-items-center">
            <div class="bottom-content-wrapper">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="copy-rights">
                            <p>&copy;2022-{{date('Y')}} <strong>Cronus</strong>, All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-2 mt-md-0 col-12 text-md-end">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
