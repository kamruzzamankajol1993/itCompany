<footer class="main-footer">
    <div class="bg bg-pattern-6"></div>
    <!-- Footer Uppper -->
    <div class="footer-upper">
        <div class="auto-container">
            <div class="row">
                <!-- Contact info Block -->
                <div class="contact-info-block col-lg-4 col-md-6">
                    <div class="inner">
                        <i class="icon fa fa-phone-square"></i>
                        <span class="sub-title">Call Anytime</span>
                        <div class="text"><a href="tel:{{ $systemDataAll->sitePhone }}">  {{ $systemDataAll->sitePhone }}</a></div>
                    </div>
                </div>
                <!-- Contact info Block -->
                <div class="contact-info-block col-lg-4 col-md-6">
                    <div class="inner">
                        <i class="icon fa fa-envelope"></i>
                        <span class="sub-title">Send Email</span>
                        <div class="text"><a href="mailto:{{ $systemDataAll->siteEmail }}">  {{ $systemDataAll->siteEmail }}</a></div>
                    </div>
                </div>
                <!-- Contact info Block -->
                <div class="contact-info-block col-lg-4 col-md-6">
                    <div class="inner">
                        <i class="icon fa fa-map-marker"></i>
                        <span class="sub-title">Addres</span>
                        <div class="text">  {{ $systemDataAll->siteAddress }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Widgets Section -->
    <div class="widgets-section">
        <div class="auto-container">
            <div class="row">
                <!-- Footer COlumn -->
                <div class="footer-column col-xl-6 col-lg-6 col-md-12">
                    <div class="footer-widget about-widget">
                        <div class="widget-content">
                            <div class="logo"><a href="{{ route('index') }}"> <img src="{{ asset('/') }}{{ $systemDataAll->siteLogo }}" alt=""></a></div>
                            <div class="text">  {{ $systemDataAll->siteAbout }}</div>
                            <ul class="social-icon-two">

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
                        </div>
                    </div>
                </div>

                <!-- Footer COlumn -->
                <div class="footer-column col-xl-6 col-lg-6 col-md-12">
                    <div class="widget links-widget">
                        <h5 class="widget-title">Explore</h5>
                        <div class="widget-content">
                            <ul class="user-links two-column">
                                <li><a href="#">Meet Our Team</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">What We Do</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Latest News</a></li>
                                <li><a href="#">New Projects</a></li>
                                <li><a href="#">Contact</a></li>

                                <li><a href="#">Faqs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer COlumn -->
                {{-- <div class="footer-column col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="widget newsletter-widget">
                        <h5 class="widget-title">Newsletter</h5>
                        <div class="widget-content">
                            <div class="text">Subsrcibe for our latest resources</div>
                            <div class="subscribe-form">
                                <form method="post" action="#">
                                    <div class="form-group">
                                        <input type="email" name="email" class="email" value="" placeholder="Email Address" required="">
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="theme-btn btn-style-one hover-light"><span class="btn-title">Subscribe</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <!--  Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright-text">© Copyright 2023 by <a href="{{ route('index') }}">  {{ $systemDataAll->siteName }}</a></div>
        </div>
    </div>
</footer>
