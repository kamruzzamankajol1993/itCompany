@extends('front.master.master')

@section('title')
{{ $systemDataAll->siteName }}
@endsection


@section('body')

<!-- Banner Section -->
@include('front.include.banner')
<!-- End Banner Section -->


<!-- Services Section -->
<section class="services-section">
    <div class="bg-shape"></div>
    <div class="bg bg-pattern-1"></div>

    <div class="auto-container">
        <div class="sec-title light">
            <div class="row">
                <div class="col-lg-7">
                    <span class="sub-title">our services</span>
                    <h2>Explore what services <br>we’re offering</h2>
                </div>
                <div class="col-lg-5">
                    <div class="text">There are many variations of passages of available but majority alteration in some form, by humou or randomised words.</div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 coll-md-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="images/resource/service-1.jpg" alt=""></figure>
                    </div>
                    <div class="content-box">
                        <i class="icon flaticon-web-development"></i>
                        <h5 class="title">Website <br>development</h5>
                    </div>
                    <div class="hover-content">
                        <i class="icon flaticon-web-development"></i>
                        <h5 class="title"><a href="page-service-details.html">Website <br>Development</a></h5>
                        <div class="text">There are many variations of passages of available but the majority.</div>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 coll-md-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="images/resource/service-2.jpg" alt=""></figure>
                    </div>
                    <div class="content-box">
                        <i class="icon flaticon-design"></i>
                        <h5 class="title">Graphic <br>Designing</h5>
                    </div>
                    <div class="hover-content">
                        <i class="icon flaticon-design"></i>
                        <h5 class="title"><a href="page-service-details.html">Graphic <br>Designing</a></h5>
                        <div class="text">There are many variations of passages of available but the majority.</div>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 coll-md-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="images/resource/service-3.jpg" alt=""></figure>
                    </div>
                    <div class="content-box">
                        <i class="icon flaticon-megaphone"></i>
                        <h5 class="title">Digital <br>marketing</h5>
                    </div>
                    <div class="hover-content">
                        <i class="icon flaticon-megaphone"></i>
                        <h5 class="title"><a href="page-service-details.html">Application <br>Development</a></h5>
                        <div class="text">There are many variations of passages of available but the majority.</div>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 coll-md-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="images/resource/service-4.jpg" alt=""></figure>
                    </div>
                    <div class="content-box">
                        <i class="icon flaticon-visitor"></i>
                        <h5 class="title">Mobile <br>applications</h5>
                    </div>
                    <div class="hover-content">
                        <i class="icon flaticon-visitor"></i>
                        <h5 class="title"><a href="page-service-details.html">SEO & Content <br>Writing</a></h5>
                        <div class="text">There are many variations of passages of available but the majority.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End services-section -->

<!-- About Section -->
<section class="about-section pt-0">
    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2 wow fadeInRight">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="sub-title">get to know us</span>
                        <h2>The best digital marketing solutions</h2>
                        <div class="text">There are many variations of passages of available but the majority have suffered alteration in some form, by injected hum randomised words which don't slightly.</div>
                    </div>

                    <!-- Info Box -->
                    <div class="info-box">
                        <div class="inner">
                            <i class="icon flaticon-targeted-marketing"></i>
                            <h5 class="title">Leading in marketing</h5>
                            <div class="text">Knowledge of technologies rules better than anyone which we apply in our daily work</div>
                        </div>
                    </div>

                    <!-- Info Box -->
                    <div class="info-box">
                        <div class="inner">
                            <i class="icon flaticon-diplomat"></i>
                            <h5 class="title">Expert developers</h5>
                            <div class="text">Knowledge of technologies rules better than anyone which we apply in our daily work</div>
                        </div>
                    </div>

                    <div class="other-info">
                        <div class="author-info">
                            <div class="inner">
                                <figure class="thumb"><img src="images/resource/avatar.jpg" alt=""></figure>
                                <h5 class="name">Aleesha brown</h5>
                                <span class="designation">CEO & CO Founder</span>
                            </div>
                        </div>

                        <a href="page-about.html" class="theme-btn btn-style-one"><span class="btn-title">Discover more</span></a>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12 wow fadeInLeft">
                <div class="image-box">
                    <span class="icon-dots bounce-y"></span>
                    <span class="icon-circle zoom-one"></span>
                    <figure class="image-1 wow fadeIn"><img src="images/resource/about-1.jpg" alt=""></figure>
                    <figure class="image-2 wow fadeIn" data-wow-delay="600ms"><img src="images/resource/about-2.jpg" alt=""></figure>
                    <div class="exp-box">
                        <div class="inner">
                            <i class="icon flaticon-promotion"></i>
                            <span class="count">38+</span>
                            <div class="text">Work Experience</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- Marquee Section -->
<div class="marquee-section">
    <div class="marquee">
        <div class="marquee-group">
            <div class="text">*Transofrm ideas into reality</div>
            <div class="text">*INSPIRED WITH CREATIVITY</div>
            <div class="text">*Design & development craft</div>
            <div class="text">*unlock the potential</div>
            <div class="text">*Transofrm ideas into reality</div>
        </div>

        <div aria-hidden="true" class="marquee-group">
            <div class="text">*Transofrm ideas into reality</div>
            <div class="text">*INSPIRED WITH CREATIVITY</div>
            <div class="text">*Design & development craft</div>
            <div class="text">*unlock the potential</div>
            <div class="text">*Transofrm ideas into reality</div>
        </div>
    </div>
</div>
<!-- End Marquee Section -->

<!-- Call To Action -->
<section class="call-to-action">
    <div class="bg bg-image" style="background-image: url(images/background/1.jpg)"></div>
    <div class="auto-container">
        <div class="outer-box wow fadeIn">
            <figure class="small-image"><img src="images/resource/img.jpg" alt=""></figure>
            <h2 class="title">Better digital marketing <span class="selected">solution</span> <br>and services at your <br>fingertips</h2>
            <a href="page-contact.html" class="theme-btn btn-style-one light"><span class="btn-title">Discover more</span></a>
        </div>
    </div>
</section>
<!--End Call To Action -->

 <!-- FAQ Section -->
<section class="faqs-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">frequently asked questions</span>
            <h2>Agency is building a top<br> business sectors</h2>
        </div>

        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="image-box">
                                <figure class="image overlay-anim"><img src="images/resource/faq.jpg" alt=""></figure>
                                <div class="exp-box">
                                    <span class="count">26</span>
                                    <h4 class="title">Years <br>Experience</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <!-- Faq Block -->
                            <div class="faq-block">
                                <div class="inner-box">
                                    <div class="title-box">
                                        <i class="icon fa fa-long-arrow-alt-right"></i>
                                        <h6 class="title">High Quality Services</h6>
                                    </div>
                                    <div class="text">Lorem ipsum is simply free text dol sit amet, passage of.</div>
                                </div>
                            </div>

                            <!-- Faq Block -->
                            <div class="faq-block">
                                <div class="inner-box">
                                    <div class="title-box">
                                        <i class="icon fa fa-long-arrow-alt-right"></i>
                                        <h6 class="title">Perfect Business Solution</h6>
                                    </div>
                                    <div class="text">Lorem ipsum is simply free text dol sit amet, passage of.</div>
                                </div>
                            </div>

                            <!-- Faq Block -->
                            <div class="faq-block">
                                <div class="inner-box">
                                    <div class="title-box">
                                        <i class="icon fa fa-long-arrow-alt-right"></i>
                                        <h6 class="title">Commited to Deliver</h6>
                                    </div>
                                    <div class="text">Lorem ipsum is simply free text dol sit amet, passage of.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Column -->
            <div class="faq-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">

                    <ul class="accordion-box wow fadeInRight">
                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">What does your process look like?
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</div>
                                </div>
                            </div>
                        </li>
                        <!--Block-->
                        <li class="accordion block active-block">
                            <div class="acc-btn active">Learn how we create unmatched solutions
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</div>
                                </div>
                            </div>
                        </li>
                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">How long do services take to complete?
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</div>
                                </div>
                            </div>
                        </li>
                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">How can i find my financial record?
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End FAQ Section -->

<!-- Testimonial Section -->
<section class="testimonial-section">
    <div class="bg bg-pattern-7"></div>
    <div class="auto-container">
        <div class="row">
            <!-- Title Column -->
            <div class="title-column col-lg-6 col-md-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="sub-title">our testimonials</span>
                        <h2>What they’re talking about agency?</h2>
                    </div>
                    <div class="info-box">
                        <i class="icon flaticon-recommend"></i>
                        <div class="text">We’re trusted by more then<br> 3800 satisfied & happy customers</div>
                    </div>
                </div>
            </div>

            <!-- Testimonial Column -->
            <div class="testimonial-column col-lg-6 col-md-12">
                <div class="inner-column">
                    <div class="testimonial-carousel owl-carousel default-navs">
                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="content-box">
                                    <div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy data foster to collaborative thinking.</div>
                                </div>
                                <div class="info-box">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <figure class="thumb"><img src="images/resource/testi-thumb-1.jpg" alt=""></figure>
                                    <h5 class="name">Donald hardson</h5>
                                    <span class="designation">Co Founder</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="content-box">
                                    <div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy data foster to collaborative thinking.</div>
                                </div>
                                <div class="info-box">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <figure class="thumb"><img src="images/resource/testi-thumb-1.jpg" alt=""></figure>
                                    <h5 class="name">Donald hardson</h5>
                                    <span class="designation">Co Founder</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="content-box">
                                    <div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy data foster to collaborative thinking.</div>
                                </div>
                                <div class="info-box">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <figure class="thumb"><img src="images/resource/testi-thumb-1.jpg" alt=""></figure>
                                    <h5 class="name">Donald hardson</h5>
                                    <span class="designation">Co Founder</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Section -->

<!-- Why Choose Us -->
<section class="why-choose-us">
    <div class="anim-icons">
        <span class="icon icon-arrow1"></span>
    </div>
    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12">
                <div class="inner-column wow fadeInRight">
                    <div class="sec-title">
                        <i class="sub-title">company benefits</i>
                        <h2>Why should choose our agency?</h2>
                        <h4 class="other-title">Proin est lacus, sagittis lobortis iaculise get.</h4>
                        <div class="text">There are many variations of passages of available but the majority have suffered. Alteration in some form, lipsum is simply free text by injected humou or randomised words even believable.</div>
                        <span class="icon icon-arrow3"></span>
                    </div>

                    <div class="info-outer">
                        <div class="row">
                            <div class="info-box col-lg-4 col-md-4">
                                <div class="inner">
                                    <i class="icon flaticon-success"></i>
                                    <h5 class="title">Leader in digital marketing</h5>
                                </div>
                            </div>
                            <div class="info-box col-lg-4 col-md-4">
                                <div class="inner">
                                    <i class="icon flaticon-job-promotion"></i>
                                    <h5 class="title">Highest success rates</h5>
                                </div>
                            </div>
                            <div class="info-box col-lg-4 col-md-4">
                                <div class="inner">
                                    <i class="icon flaticon-marketing"></i>
                                    <h5 class="title">Quality marketing solutions</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image-box">
                        <figure class="image anim-overlay"><img src="images/resource/why-us.jpg" alt=""></figure>
                        <div class="rounded-text">
                            <img src="images/resource/round-text.png" alt="">
                            <span class="letter">D</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Why Choose Us -->

<!-- Projects Section -->
<section class="projects-section p-0">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">our portfolio</span>
            <h2>Explore our new recently <br>completed projects.</h2>
        </div>

        <div class="outer-box">
            <div class="row">
                <!-- Project Block -->
                <div class=" project-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="page-project-details.html"><img src="images/resource/project-1.jpg" alt=""></a></figure>
                        </div>
                        <div class="content-box">
                            <a href="page-project-details.html" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
                            <span class="cat">Development</span>
                            <h4 class="title"><a href="page-project-details.html" title="">Marketing webdesign</a></h4>
                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class=" project-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="page-project-details.html"><img src="images/resource/project-2.jpg" alt=""></a></figure>
                        </div>
                        <div class="content-box">
                            <a href="page-project-details.html" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
                            <span class="cat">Development</span>
                            <h4 class="title"><a href="page-project-details.html" title="">Marketing webdesign</a></h4>
                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class=" project-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="page-project-details.html"><img src="images/resource/project-3.jpg" alt=""></a></figure>
                        </div>
                        <div class="content-box">
                            <a href="page-project-details.html" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
                            <span class="cat">Development</span>
                            <h4 class="title"><a href="page-project-details.html" title="">Marketing webdesign</a></h4>
                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class=" project-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="page-project-details.html"><img src="images/resource/project-4.jpg" alt=""></a></figure>
                        </div>
                        <div class="content-box">
                            <a href="page-project-details.html" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
                            <span class="cat">Development</span>
                            <h4 class="title"><a href="page-project-details.html" title="">Marketing webdesign</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End projects-section-->

<!-- Fun Fact Section -->
<section class="fun-fact-section pull-up">
    <div class="bg bg-pattern-3"></div>
    <div class="auto-container">
        <div class="fact-counter">
            <div class="row">
                <!-- Counter block-->
                <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner">
                        <div class="icon-box"><i class="flaticon-completed-task"></i></div>
                        <div class="count-box"><span class="count-text" data-speed="3000" data-stop="990">0</span></div>
                        <h4 class="counter-title">Projects Completed</h4>
                    </div>
                </div>

                <!--Counter block-->
                <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                    <div class="inner">
                        <div class="icon-box"><i class="flaticon-settings"></i></div>
                        <div class="count-box"><span class="count-text" data-speed="3000" data-stop="370">0</span></div>
                        <h4 class="counter-title">Repeat Customers</h4>
                    </div>
                </div>

                <!--Counter block-->
                <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner">
                        <div class="icon-box"><i class="flaticon-rating"></i></div>
                        <div class="count-box"><span class="count-text" data-speed="3000" data-stop="860">0</span></div>
                        <h4 class="counter-title">Satisfied Customers</h4>
                    </div>
                </div>

                <!--Counter block-->
                <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
                    <div class="inner">
                        <div class="icon-box"><i class="flaticon-group"></i></div>
                        <div class="count-box"><span class="count-text" data-speed="3000" data-stop="88">0</span></div>
                        <h4 class="counter-title">Team Members</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Fun Fact Section -->

 <!-- News Section Two -->
<section class="news-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">From the Blog</span>
            <h2>Checkout latest news <br> updates & articles</h2>
        </div>

        <div class="row">
            <!-- News Block -->
            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="news-details.html"><img src="images/resource/news-1.jpg" alt=""></a></figure>
                    </div>
                    <div class="content-box">
                        <span class="date">20 April</span>
                        <ul class="post-info">
                            <li><i class="fa fa-user-circle"></i> by Admin</li>
                            <li><i class="fa fa-comments"></i> 2 Comments</li>
                        </ul>
                        <h4 class="title"><a href="news-details.html">Five ways that can develop your business website</a></h4>
                        <a href="news-details.html" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- News Block -->
            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="news-details.html"><img src="images/resource/news-2.jpg" alt=""></a></figure>
                    </div>
                    <div class="content-box">
                        <span class="date">20 April</span>
                        <ul class="post-info">
                            <li><i class="fa fa-user-circle"></i> by Admin</li>
                            <li><i class="fa fa-comments"></i> 2 Comments</li>
                        </ul>
                        <h4 class="title"><a href="news-details.html">Five ways that can develop your business website</a></h4>
                        <a href="news-details.html" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- News Block -->
            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="news-details.html"><img src="images/resource/news-3.jpg" alt=""></a></figure>
                    </div>
                    <div class="content-box">
                        <span class="date">20 April</span>
                        <ul class="post-info">
                            <li><i class="fa fa-user-circle"></i> by Admin</li>
                            <li><i class="fa fa-comments"></i> 2 Comments</li>
                        </ul>
                        <h4 class="title"><a href="news-details.html">Five ways that can develop your business website</a></h4>
                        <a href="news-details.html" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End News Section -->

<!-- Contact Section -->
<section class="contact-section">
    <div class="anim-icons">
        <span class="icon icon-line3"></span>
        <span class="icon icon-arrow1"></span>
        <span class="icon icon-arrow2"></span>
    </div>
    <div class="auto-container">
        <div class="outer-box">
            <div class="bg bg-pattern-5"></div>

            <div class="sec-title">
                <span class="sub-title">Get in touch</span>
                <h2>Let’s work together</h2>
            </div>

            <!-- Contact Form -->
            <div class="contact-form wow fadeInLeft">
                <!--Contact Form-->
                <form method="post" action="https://kodesolution.com/html/2023/desix-html/get" id="contact-form">
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="full_name" placeholder="Your name" required>
                        </div>
                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="email" name="Email" placeholder="Email Address" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea name="message" placeholder="Write a message" required></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Send a message</span></button>
                        </div>
                    </div>
                </form>
            </div>
            <!--End Contact Form -->
            <figure class="image"><img src="images/resource/girl.png" alt=""></figure>
        </div>
    </div>
</section>
<!-- End Contact Section -->

<!-- Clients Section -->
<section class="clients-section pull-up">
    <div class="auto-container">
        <!-- Sponsors Outer -->
        <div class="sponsors-outer">
            <!--clients carousel-->
            <ul class="clients-carousel owl-carousel owl-theme">
                <li class="client-block"> <a href="#"><img src="images/clients/1.png" alt=""></a> </li>
                <li class="client-block"> <a href="#"><img src="images/clients/1.png" alt=""></a> </li>
                <li class="client-block"> <a href="#"><img src="images/clients/1.png" alt=""></a> </li>
                <li class="client-block"> <a href="#"><img src="images/clients/1.png" alt=""></a> </li>
                <li class="client-block"> <a href="#"><img src="images/clients/1.png" alt=""></a> </li>
            </ul>
        </div>
    </div>
</section>
<!--End Clients Section -->
@endsection
@section('script')

@endsection
