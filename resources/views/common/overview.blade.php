<section class="about-us-wrapper section-padding">
    @auth()
        <div class="container">
            <div class="edit_carousel_flex">
                <div class="edit_carousel">
                    <a href="{{url('edit/'. 2 . '/'. 1)}}"><i class="far fa-pen edit_emblem"></i></a>
                </div>
            </div>
        </div>
    @endauth
    <div class="container">
        <div class="row">
            <div class="col-lg-5 text-center text-lg-start">
                <div class="about-img">
                    @foreach($photos as $photo)
                        <img src="assets/img/{{$photo->overview_photos}}" alt="">
                    @endforeach
                </div>
            </div>
            <div class="col-lg-7 mt-5 mt-lg-0 ps-lg-5">
                <div class="block-contents">
                    <div class="section-title">
                        <h5 class="textleft relative">about</h5>
                        <span>Since from 2000</span>
                        @foreach($title as $title)
                            <h2>{!!nl2br(str_replace(" ", "&nbsp;", $title->overview_title))!!}</h2>
                        @endforeach
                    </div>
                </div>
                <div class="about-info-contents">
                    @foreach($texts as $overview)
                        <p>{!!nl2br(str_replace(" ", " &nbsp;", $overview->overview))!!}</p>
                    @endforeach
                </div>
                <div class="company-ceo d-flex align-items-center">
                    <div class="ceo-img bg-cover" style="background-image: url('assets/img/man-img.jpg')"></div>
                    <div class="ceo-info">
                        <h5>Alexis D. Denzol</h5>
                        <span>Head Of Idea</span>
                    </div>
                    <div class="autograph-signature"><img src="assets/img/signature.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</section>
