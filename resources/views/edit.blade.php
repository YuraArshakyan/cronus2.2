<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="modinatheme">
    <!-- ======== Page title ============ -->
    <title>Transland - Transport & Logistics HTML Template</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{asset('/assets/img/favicon.ico')}}">
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="{{asset('assets/css/icons.css')}}">
    <!--  animate css plugins -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!--  slick css plugins -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- metis menu css file -->
    <link rel="stylesheet" href="{{asset('assets/css/metismenu.css')}}">
    <!-- select2 css file -->
    <link rel="stylesheet" href="{{asset('assets/css/nice-select2.css')}}">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!--  main style css file -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- template main style css file -->
    <link rel="stylesheet" href="{{asset('../../public/style.css')}}">
</head>

<body class="body-wrapper">

@include('common.preloadAndTopbar')

@include('common.header-1')

<div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/page-banner.jpg')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Edit</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">edit</li>
                <li class="breadcrumb-item active" aria-current="page">@for($i = 0; $i < 5; $i++) @if($i == $id){{$array[$i]}}@endif @endfor</li>
            </ol>
        </nav>
    </div>
</div>

@auth()
<section class="error-404-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="error-content">

                    @if($id == 1)
                        <form action="{{url('update' . '/' . 1 . '/' . 1)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div calss = "carousel_edit" style="width: 300px; line-height: 90px;">
                                @foreach($slides as $slide)
                                    <img src="{{asset('assets/img/home1/'. $slide->img) }}">
                                    <label class="file_upload" style="width: 100%; text-align: center">
                                        <input type="file" name="slide{{$slide->id}}" style="display: none"/>
                                        <a type="file" data-animation-in="fadeInRight" data-delay-in="0.8" class="theme-btn border-style me-sm-4 mt-4 animated" style="width: 100%; text-align: center">Change</a>
                                    </label>
                                @endforeach
                            </div>
                            <button type="submit" data-animation-in="fadeInRight" data-delay-in="0.8" class="theme-btn border-style me-sm-4 mt-4 animated" style="width: 100%; margin-bottom: 30px; text-align: center">Submit</button>
                        </form>
                    @endif

                    @if($id == 2)
                        @foreach($texts as $text)
                            @if($text->id == 1)
                                <div class="container">
                                    <div class="row pt-5">
                                        <div class="col-12 col-lg-12">
                                            <div class="contact-form">
                                                <form action="{{url('update' . '/' . 2 . '/' . 1)}}" method="post" enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
                                                    <div class="photo_overview">
                                                        @foreach($photos as $photo)
                                                            @if($photo->id == 1)
                                                                <img src="{{asset('assets/img/'. $photo->photos) }}" style="width: 300px; display: flex">
                                                                <label class="file_upload" style="width: 100%; display: flex">
                                                                    <input type="file" name="overview_img" style="display: none"/>
                                                                    <a type="file" data-animation-in="fadeInRight" data-delay-in="0.8" class="theme-btn border-style me-sm-4 mt-4 animated">Change</a>
                                                                </label>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="single-personal-info">
                                                            <textarea name="overview_text" id="message">{{$text->text}}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12 text-center">
                                                        <button type="submit"><input class="submit-btn" type="submit" value="Submit"></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <br>
                            @endif
                        @endforeach
                    @endif

                        @if($id == 3)
                            @foreach($texts as $text)
                                @if($text->id == $count)
                                    <div class="container">
                                        <div class="row pt-5">
                                            <div class="col-12 col-lg-12">
                                                <div class="contact-form">

                                                    <form action="{{url('update' . '/' . 3 . '/' . $count)}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="photo_overview">
                                                            @foreach($photos as $photo)
                                                                @if($photo->id == $count)
                                                                    <img src="{{asset('assets/img/services/'.$photo->photos) }}" style="width: 300px; display: flex">
                                                                    <label class="file_upload" style="width: 100%; display: flex">
                                                                        <input type="file" name="what_photo" style="display: none"/>
                                                                        <a type="file" data-animation-in="fadeInRight" data-delay-in="0.8" class="theme-btn border-style me-sm-4 mt-4 animated">Change</a>
                                                                    </label>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        @foreach($title as $titles)
                                                            @if($titles->id == $count)
                                                                <div class="col-md-12 col-12">
                                                                    <div class="single-personal-info">
                                                                        <input type="text" id="fname" placeholder="Title" name="what_we_do_title" value="{{$titles->titles}}">
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                        <div class="col-md-12 col-12">
                                                            <div class="single-personal-info">
                                                                <textarea id="message" name="what_we_do_text">{{$text->text}}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-12 text-center">
                                                            <input class="submit-btn" type="submit" value="Submit">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                                <br>
                        @endif

                        @if($id == 4)
                            @foreach($title as $titles)
                                @if($titles->id == $count)
                                    <div class="container">
                                    <div class="row pt-5">
                                        <div class="col-12 col-lg-12">
                                            <div class="contact-form">
                                                <form action="{{url('update' . '/' . 4 . '/' . $count)}}" method="post" enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
                                                    <div class="photo_overview">
                                                        @foreach($photos as $photo)
                                                            @if($photo->id == $count)
                                                                <img src="{{asset('assets/img/team/'.$photo->photos) }}" style="width: 300px; display: flex">
                                                                <label class="file_upload" style="width: 100%; display: flex">
                                                                    <input type="file" name="workers" style="display: none"/>
                                                                    <a type="file" data-animation-in="fadeInRight" data-delay-in="0.8" class="theme-btn border-style me-sm-4 mt-4 animated">Change</a>
                                                                </label>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    @foreach($texts as $text)
                                                        @if($text->id == $count)
                                                            <div class="col-md-12 col-12">
                                                                <div class="single-personal-info">
                                                                    <input type="text" id="text" name="text" placeholder="Title" value="{{$text->text}}">
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                    <div class="col-md-12 col-12">
                                                        <div class="single-personal-info">
                                                            <input type="text" id="fname" name="title" placeholder="Title" value="{{$titles->titles}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12 text-center">
                                                        <button type="submit"><input class="submit-btn" type="submit" value="Submit"></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                                <br>
                        @endif

                        @if($id == 5)
                            @foreach($texts as $item2)
                                @if($item2->id == $count)
                                    <div class="container">
                                        <div class="row pt-5">
                                            <div class="col-12 col-lg-12">
                                                <div class="contact-form">
                                                    <form action="{{url('update' . '/' . 5 . '/' . $count)}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        @foreach($texts as $item)
                                                            @if($item->id == $count)
                                                                <div class="col-md-12 col-12">
                                                                    <div class="single-personal-info">
                                                                        <textarea type="text" name="Text1_of_contact" id="fname" placeholder="Title">{{$item->text}}</textarea>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                        <div class="col-md-12 col-12 text-center">
                                                            <input class="submit-btn" type="submit" value="Submit">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                                <br>
                        @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endauth

@include('common.footer')

<!--  ALl JS Plugins
    ====================================== -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/modernizr.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/imageload.min.js')}}"></script>
<script src="{{asset('assets/js/scrollUp.min.js')}}"></script>
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/slick-animation.min.js')}}"></script>
<script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/metismenu.js')}}"></script>
<script src="{{asset('assets/js/active.js')}}"></script>
</body>

</html>
