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
                        <li class="dropdown"><a href="page-about.html">Pages</a>
                            <ul>
                                <li><a href="page-about.html">About</a></li>
                                <li class="dropdown"><a href="page-team.html">Team</a>
                                    <ul>
                                        <li><a href="page-team.html">Team Grid</a></li>
                                        <li><a href="page-team-details.html">Team Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="shop-products.html">Shop</a>
                                    <ul>
                                        <li><a href="shop-products.html">Products</a></li>
                                        <li><a href="shop-products-sidebar.html">Products with Sidebar</a></li>
                                        <li><a href="shop-product-details.html">Product Details</a></li>
                                        <li><a href="shop-cart.html">Cart</a></li>
                                        <li><a href="shop-checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                                <li><a href="page-testimonial.html">Testimonial</a></li>
                                <li><a href="page-pricing.html">Pricing</a></li>
                                <li><a href="page-faq.html">FAQ</a></li>
                                <li><a href="page-404.html">Page 404</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="page-services.html">Services</a>
                            <ul>
                                <li><a href="page-services.html">Services Grid</a></li>
                                <li><a href="page-service-details.html">Service Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="page-projects.html">Projects</a>
                            <ul>
                                <li><a href="page-projects.html">Projects Grid</a></li>
                                <li><a href="page-project-details.html">Project Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="news-grid.html">News</a>
                            <ul>
                                <li><a href="news-grid.html">News Grid</a></li>
                                <li><a href="news-details.html">News Details</a></li>
                            </ul>
                        </li>
                        <li><a href="page-contact.html">Contact</a></li>
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
