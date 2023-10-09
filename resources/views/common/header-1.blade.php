<header class="header-1">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            @include('common.mainmenu')
            <div class="d-block d-lg-none col-sm-1 col-md-8 col-6">
                <div class="mobile-nav-wrap">
                    <div id="hamburger"><i class="fal fa-bars"></i></div>
                    <!-- mobile menu - responsive menu  -->
                    <div class="mobile-nav">
                        <button type="button" class="close-nav">
                            <i class="fal fa-times-circle"></i>
                        </button>
                        <nav class="sidebar-nav">
                            <ul class="metismenu" id="mobile-menu">
                                <li><a class="has-arrow" href="#">Homes</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Homepage 1</a></li>
                                        <li><a href="index-2.html">Homepage 2</a></li>
                                        <li><a href="index-3.html">Homepage 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">about</a></li>
                                <li><a href="services.html">services</a></li>
                                <li>
                                    <a class="has-arrow" href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="faq.html">faq</a></li>
                                        <li><a href="services-details.html">services details</a></li>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li><a href="news.html">News</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>

                        <div class="action-bar text-white">
                            <div class="single-info-element">
                                <div class="icon">
                                    <i class="fal fa-map-marked-alt"></i>
                                </div>
                                <div class="text">
                                    <h5>visit our location:</h5>
                                    <span>West Jakarta City, UK</span>
                                </div>
                            </div>
                            <div class="single-info-element">
                                <div class="icon">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="text">
                                    <h5>Opening Hours:</h5>
                                    <span>Mon-Fri 8am-5pm</span>
                                </div>
                            </div>
                            <div class="single-info-element">
                                <div class="icon">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="text">
                                    <h5>Send us mail</h5>
                                    <span>info@example.com</span>
                                </div>
                            </div>
                            <div class="call-us">
                                <div class="icon text-white">
                                    <i class="fal fa-phone-volume"></i>
                                </div>
                                <div class="text">
                                    <h5>Troll fre number</h5>
                                    <span>+09 949 858327</span>
                                </div>
                            </div>
                            <a href="{{route('contacts')}}" class="theme-btn mt-4">Track Your Shipment</a>
                        </div>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
        </div>
    </div>
</header>
