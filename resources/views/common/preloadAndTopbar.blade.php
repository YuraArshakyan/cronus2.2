<!-- preloader -->
<div id="preloader" class="preloader">
    <div class="animation-preloader">
        <div class="spinner">
        </div>
        <div class="txt-loading">
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
            <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>
            <span data-text-preloader="A" class="letters-loading">
                       A
                    </span>
            <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
            <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
            <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
            <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
            <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
            <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
        </div>
        <p class="text-center">Loading</p>
    </div>
    <div class="loader">
        <div class="row">
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
        </div>
    </div>
</div>
<div class="top-bar-wrapper d-none d-sm-block">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="top-left">
            <a href="tel:987-098-098-09"><i class="fal fa-phone-volume">@foreach ($topbar[1] as $topbars[1]){{$topbars[1]->value}}@endforeach</i></a>
            <a href="mailto:info@example.com"><i class="fal fa-envelope">@foreach ($topbar[2] as $topbars[2]){{$topbars[2]->value}}@endforeach</i></a>
            <a href="#"><i class="fal fa-map-marker-alt">@foreach ($topbar[3] as $topbars[3]){{$topbars[3]->value}}@endforeach</i></a>
        </div>
        <div class="top-right d-none d-md-block">
            <div class="social-pages">
                <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                <a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                <a href="#"><i class="fab fa-skype" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
