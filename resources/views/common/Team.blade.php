<section class="our-team-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="block-contents mb-20">
                    <div class="section-title">
                        <h5 class="textleft">team</h5>
                        <span>Our Team</span>
                        <h2>Meet Our <span>Amazing Team</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @for($i = 8; $i <= 11; $i++)
                @foreach($title as $titles)
                    @if($titles->id == $i)
                        @foreach($photos as $photo)
                            @if($photo->id == $i)
                                @foreach($texts as $text)
                                    @if($text->id == $i)
                                        <div class="col-xl-3 col-md-6 col-12">
                                            <div class="team-member-card bg-cover" style="background-image: url('assets/img/team/{{$photo->photos}}')">
                                                <div class="profile-info-card">
                                                    <span>{{$titles->titles}}</span>
                                                    <h5><a href="team-details.html">{{$text->text}}</a></h5>
                                                    <div class="social-link">
                                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            @auth
                                                <a href="{{url('edit/'. 4 . '/'. 1)}}" data-animation-in="fadeInRight" data-delay-in="0.8" class="theme-btn border-style me-sm-4 mt-4 animated" style="width: 100%; text-align: center">Edit</a>
                                            @endauth
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    @endif
                @endforeach
            @endfor
        </div>
    </div>
</section>
