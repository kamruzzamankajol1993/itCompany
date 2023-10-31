<header class="main-header header-style-two">
    <!-- Header Top -->
    <div class="header-top">
        <div class="inner-container">

            <div class="top-left">
                <!-- Info List -->
                <ul class="list-style-one">
                    <li><i class="fa fa-envelope"></i> <a href="mailto:{{ $systemDataAll->siteEmail }}">{{ $systemDataAll->siteEmail }}</a></li>
                    <li><i class="fa fa-map-marker"></i>{{ $systemDataAll->siteAddress }}</li>
                </ul>
            </div>

            <div class="top-right">

                <ul class="social-icon-one">
                    @foreach($socialList as $socialLists)

                    @if($socialLists->socialLinkName == 'Facebook')
                    <li><a href="{{ $socialLists->socialLink }}"><span class="fab fa-facebook-square"></span></a></li>
                    @elseif($socialLists->socialLinkName == 'X')
                    <li><a href="{{ $socialLists->socialLink }}"><span class="fab fa-twitter"></span></a></li>
                    @elseif($socialLists->socialLinkName == 'Instagram')
                    <li><a href="{{ $socialLists->socialLink }}"><span class="fab fa-instagram"></span></a></li>
                    @elseif($socialLists->socialLinkName == 'Youtube')
                    <li><a href="{{ $socialLists->socialLink }}"><span class="fab fa-youtube"></span></a></li>
                    @elseif($socialLists->socialLinkName == 'LinkedIn')
                    <li><a href="{{ $socialLists->socialLink }}"><span class="fab fa-linkedin"></span></a></li>
                    @endif







@endforeach
                </ul>
            </div>
        </div>
    </div>
    <!-- Header Top -->

    <div class="header-lower">
        <!-- Main box -->
        <div class="main-box">
            <div class="logo-box">
                <div class="logo"><a href="{{ route('index') }}"><img src="{{ asset('/') }}{{ $systemDataAll->siteLogo }}" alt="" title="Tronis"></a></div>
            </div>

            <!--Nav Box-->
            <div class="nav-outer">
                <nav class="nav main-menu">
                    <ul class="navigation">
                        <li ><a href="{{ route('index') }}">Home</a>

                        </li>

                        <li><a href="{{ route('about_us') }}">About Us</a></li>

                        <li class="dropdown"><a href="{{ route('serviceList') }}">Services</a>
                            <ul>
                                @foreach($allServiceInfoH as $allServiceInfoHs)
                                <li><a href="{{ route('serviceInformation',$allServiceInfoHs->id) }}">{{ $allServiceInfoHs->serviceTitle }}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="dropdown"><a href="{{ route('projectList') }}">Projects</a>
                            <ul>
                                @foreach($allPortfolioInfoH as $allPortfolioInfoHs)
                                <li><a href="{{ route('projectInformation',$allPortfolioInfoHs->id) }}">{{ $allPortfolioInfoHs->title }}</a></li>
@endforeach
                            </ul>
                        </li>

                        <li><a href="{{ route('teamList') }}">Team</a></li>

                        <li><a href="{{ route('newsList') }}">News</a></li>

                        <li><a href="{{ route('contact_us') }}">Contact Us</a></li>


                    </ul>
                </nav>
                <!-- Main Menu End-->
            </div>

            <div class="outer-box">
                <!-- Header Search -->
                <button class="ui-btn ui-btn search-btn">
                    <span class="icon lnr lnr-icon-search"></span>
                </button>

                <a href="tel:{{ $systemDataAll->sitePhone }}" class="info-btn">
                    <i class="icon lnr-icon-phone-handset"></i>
                    <small>Call Anytime</small>
                    {{ $systemDataAll->sitePhone }}
                </a>
                <!-- Mobile Nav toggler -->
                <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>

        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
            <div class="upper-box">
                <div class="nav-logo"><a href="{{ route('index') }}"><img src="{{ asset('/') }}{{ $systemDataAll->siteLogo }}" alt="" title=""></a></div>
                <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>

            <ul class="navigation clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </ul>
            <ul class="contact-list-one">
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <i class="icon lnr-icon-phone-handset"></i>
                        <span class="title">Call Now</span>
                        <a href="tel:{{ $systemDataAll->sitePhone }}">{{ $systemDataAll->sitePhone }}</a>
                    </div>
                </li>
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-envelope1"></span>
                        <span class="title">Send Email</span>
                        <a href="mailto:{{ $systemDataAll->siteEmail }}">{{ $systemDataAll->siteEmail }}</a>
                    </div>
                </li>
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-clock"></span>
                        <span class="title">Send Email</span>
                        Mon - Sat 8:00 - 6:30, Sunday - CLOSED
                    </div>
                </li>
            </ul>


            <ul class="social-links">
                @foreach($socialList as $socialLists)

                @if($socialLists->socialLinkName == 'Facebook')
                <li><a href="{{ $socialLists->socialLink }}"><i class="fab fa-facebook"></i></a></li>
                @elseif($socialLists->socialLinkName == 'X')
                <li><a href="{{ $socialLists->socialLink }}"><i class="fab fa-twitter"></i></a></li>
                @elseif($socialLists->socialLinkName == 'Instagram')
                <li><a href="{{ $socialLists->socialLink }}"><i class="fab fa-instagram"></i></a></li>
                @elseif($socialLists->socialLinkName == 'Youtube')
                <li><a href="{{ $socialLists->socialLink }}"><i class="fab fa-youtube"></i></a></li>
                @elseif($socialLists->socialLinkName == 'LinkedIn')
                <li><a href="{{ $socialLists->socialLink }}"><i class="fab fa-linkedin"></i></a></li>
                @endif

                @endforeach
            </ul>
        </nav>
    </div><!-- End Mobile Menu -->

    <!-- Header Search -->
    <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search"><span class="fa fa-times"></span></button>

        <div class="search-inner">
            <form method="post" action="https://kodesolution.com/html/2023/desix-html/index.html">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search..." required="">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Header Search -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="inner-container">
                <!--Logo-->
                <div class="logo">
                    <a href="{{ route('index') }}" title=""><img src="{{ asset('/') }}{{ $systemDataAll->adminSiteLogo }}" alt="" title=""></a>
                </div>

                <!--Right Col-->
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->

                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
    </div><!-- End Sticky Menu -->
</header>
