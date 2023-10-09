<!DOCTYPE html>
<html lang="en">

@include('common.head')

<body class="body-wrapper">

    @include('common.preloadAndTopbar')

    @include('common.header-1')

    <div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/page-banner.jpg')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>Edit config</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit configs</li>
                </ol>
            </nav>
        </div>
    </div>
    @auth()
    <section class="contact-page-wrap">
        <div class="container">
            <div class="row pt-5">
                <div class="col-12 col-lg-12">
                    <div class="contact-form">
                            <form action="{{url('update' . '/' . 6 . '/' . 1)}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="col-md-12 col-12">
                                    @foreach($config as $item)
                                        @if($item->id == 1)
                                            <div class="single-personal-info">
                                                <label for="fname">@if($item->id == 1){{$item->key}}@endif</label>
                                                <input type="text" id="fname" placeholder="Feedback email" name="value1" value="@if($item->id == 1){{$item->value}}@endif">
                                            </div>
                                        @endif
                                    @endforeach
                                    @foreach($config as $item)
                                        @if($item->id == 2)
                                            <div class="single-personal-info">
                                                <label for="fname">@if($item->id == 2){{$item->key}}@endif</label>
                                                <input type="text" id="fname" placeholder="Feedback email" name="value2" value="@if($item->id == 2){{$item->value}}@endif">
                                            </div>
                                        @endif
                                    @endforeach
                                    @foreach($config as $item)
                                            @if($item->id == 3)
                                                <div class="single-personal-info">
                                                    <label for="fname">@if($item->id == 3){{$item->key}}@endif</label>
                                                    <input type="text" id="fname" placeholder="Feedback email" name="value3" value="@if($item->id == 3){{$item->value}}@endif">
                                                </div>
                                            @endif
                                    @endforeach
                                    @foreach($config as $item)
                                         @if($item->id == 4)
                                            <div class="single-personal-info">
                                                <label for="fname">@if($item->id == 4){{$item->key}}@endif</label>
                                                <input type="text" id="fname" placeholder="Feedback email" name="value4" value="@if($item->id == 4){{$item->value}}@endif">
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12 text-center mb-20">
                                    <button type="submit"><input class="submit-btn" type="submit" value="submit"></button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endauth
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
