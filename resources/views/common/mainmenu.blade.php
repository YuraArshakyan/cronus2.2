<div class="col-lg-3 col-sm-5 col-md-4 col-6 pr-lg-5">
    <div class="logo">
        <a href="/">
            <img src="{{asset('assets/img/logo.png')}}" style="max-width: 60%" alt="Transland">
        </a>
    </div>
</div>
<div class="col-lg-9 text-end p-lg-0 d-none d-lg-flex justify-content-between align-items-center">
    <div class="menu-wrap">
        <div class="main-menu">
            <ul>
                <li><a href="/">Home</a>
                </li>
                <li><a href="{{route('about')}}">About</a> </li>
                <li><a href="{{route('services')}}">Services</a></li>
                <li><a href="#">Pages <i class="fas fa-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="{{route('faq')}}">faq</a></li>
                        <li><a href="{{route('team')}}">team</a></li>
                        <li><a href="{{route('pricing')}}">pricing</a></li>
                    </ul>
                </li>
                <li><a href="{{route('news')}}">News</a></li>
                <li><a href="{{route('contacts')}}">Contact</a></li>
                @auth()
                    <li><a href="#">Admin<i class="fas fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="{{route('admin.logout')}}">Log out</a></li>
                            <li><a href="{{route('edit_config')}}">change config</a></li>
                        </ul>
                @endauth
            </ul>
        </div>
    </div>
    <div class="header-right-element">
        <a href="{{route('contacts')}}" class="theme-btn">get a quote <i class="fal fa-long-arrow-right"></i></a>
        <a href="#" class="search-btn"><i class="fal fa-search"></i></a>
        <div class="search-box">
            <form action="#">
                <input type="text" placeholder="Search">
                <button type="submit"><i class="fal fa-search"></i></button>
            </form>
        </div>
    </div>
</div>
