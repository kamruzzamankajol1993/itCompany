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
                    <h2><?php
                        $pos = 3;

                        $words = explode(" ",$allServiceTitleInfo->serviceTitleOne);
                        array_splice( $words, $pos, 0, '<br>' );
                        $new_string = join(" ",$words);
                        echo $new_string;
                        ?></h2>
                </div>
                <div class="col-lg-5">
                    <div class="text">{{ $allServiceTitleInfo->serviceTitleTwo }}</div>
                </div>
            </div>
        </div>

        <div class="row">

            @foreach($allServiceInfo as $allServiceInfos)
            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 coll-md-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="{{ asset('/') }}{{ $allServiceInfos->serviceImage }}" alt=""></figure>
                    </div>
                    <div class="content-box">
                        <i class="{{ $allServiceInfos->serviceIcon }}"></i>
                        <h5 class="title"><?php
                            $pos = 1;

                            $words = explode(" ",$allServiceInfos->serviceTitle);
                            array_splice( $words, $pos, 0, '<br>' );
                            $new_string = join(" ",$words);
                            echo $new_string;
                            ?></h5>
                    </div>
                    <div class="hover-content">
                        <i class="{{ $allServiceInfos->serviceIcon }}"></i>
                        <h5 class="title"><a href="{{ route('serviceInformation',$allServiceInfos->id) }}"><?php
                            $pos = 1;

                            $words = explode(" ",$allServiceInfos->serviceTitle);
                            array_splice( $words, $pos, 0, '<br>' );
                            $new_string = join(" ",$words);
                            echo $new_string;
                            ?></a></h5>
                        <div class="text">{{ $allServiceInfos->serviceShortDescription }}</div>
                    </div>
                </div>
            </div>
            @endforeach


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
                        <h2>{{ $allAboutusInfo->mainTitle }}</h2>
                        <div class="text">{{ $allAboutusInfo->shortDescription }}</div>
                    </div>

                    <!-- Info Box -->
                    <div class="info-box">
                        <div class="inner">
                            <i class="{{ $allAboutusInfo->iconOne }}"></i>
                            <h5 class="title">{{ $allAboutusInfo->titleOne }}</h5>
                            <div class="text">{{ $allAboutusInfo->descriptionOne }}</div>
                        </div>
                    </div>

                    <!-- Info Box -->
                    <div class="info-box">
                        <div class="inner">
                            <i class="{{ $allAboutusInfo->iconTwo }}"></i>
                            <h5 class="title">{{ $allAboutusInfo->titleTwo }}</h5>
                            <div class="text">{{ $allAboutusInfo->descriptionTwo }}</div>
                        </div>
                    </div>

                    <div class="other-info">
                        <div class="author-info">
                            <div class="inner">
                                <figure class="thumb"><img src="{{ asset('/') }}{{ $allAboutusInfo->ceoImage }}" alt=""></figure>
                                <h5 class="name">{{ $allAboutusInfo->ceoName }}</h5>
                                <span class="designation">{{ $allAboutusInfo->ceoDesignation }}</span>
                            </div>
                        </div>

                        <a href="{{route('about_us')}}" class="theme-btn btn-style-one"><span class="btn-title">Discover more</span></a>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12 wow fadeInLeft">
                <div class="image-box">
                    <span class="icon-dots bounce-y"></span>
                    <span class="icon-circle zoom-one"></span>
                    <figure class="image-1 wow fadeIn"><img src="{{ asset('/') }}{{ $allAboutusInfo->imageOne }}" alt=""></figure>
                    <figure class="image-2 wow fadeIn" data-wow-delay="600ms"><img src="{{ asset('/') }}{{ $allAboutusInfo->imageTwo }}" alt=""></figure>
                    <div class="exp-box">
                        <div class="inner">
                            <i class="icon flaticon-promotion"></i>
                            <span class="count">{{ $allAboutusInfo->totalExperience }}+</span>
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

<?php
                    $convert_new_ass_cat  = explode(",",$allhomePageContactInfo->sliderList);
//dd($convert_new_ass_cat);
                                       ?>


<div class="marquee-section">
    <div class="marquee">
        <div class="marquee-group">
            @foreach($convert_new_ass_cat as $convert_new_ass_cats)
            <div class="text">{{ $convert_new_ass_cats }}</div>
            @endforeach

        </div>

        <div aria-hidden="true" class="marquee-group">
            @foreach($convert_new_ass_cat as $convert_new_ass_cats)
            <div class="text">{{ $convert_new_ass_cats }}</div>
            @endforeach
        </div>
    </div>
</div>
<!-- End Marquee Section -->

<!-- Call To Action -->
<section class="call-to-action">
    <div class="bg bg-image" style="background-image: url({{ asset('/') }}{{ $allhomePageContactInfo->backImage }})"></div>
    <div class="auto-container">
        <div class="outer-box wow fadeIn">
            <figure class="small-image"><img src="{{ asset('/') }}{{ $allhomePageContactInfo->frontImage}}" alt=""></figure>
            <h2 class="title"><?php
                $pos = 6;

                $words = explode(" ",$allhomePageContactInfo->title);
                array_splice( $words, $pos, 0, '<br>' );
                $new_string = join(" ",$words);
                echo $new_string;
                ?></h2>
            <a href="{{ route('contact_us') }}" class="theme-btn btn-style-one light"><span class="btn-title">Discover more</span></a>
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
                                <figure class="image overlay-anim"><img src="{{ asset('/') }}{{ $askQOneInfo->image }}" alt=""></figure>
                                <div class="exp-box">
                                    <span class="count">{{ $askQOneInfo->totalYear }}</span>
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
                                        <h6 class="title">{{ $askQOneInfo->titleOne }}</h6>
                                    </div>
                                    <div class="text">{{ $askQOneInfo->descriptionOne }}</div>
                                </div>
                            </div>

                            <!-- Faq Block -->
                            <div class="faq-block">
                                <div class="inner-box">
                                    <div class="title-box">
                                        <i class="icon fa fa-long-arrow-alt-right"></i>
                                        <h6 class="title">{{ $askQOneInfo->titleTwo }}</h6>
                                    </div>
                                    <div class="text">{{ $askQOneInfo->descriptionTwo }}</div>
                                </div>
                            </div>

                            <!-- Faq Block -->
                            <div class="faq-block">
                                <div class="inner-box">
                                    <div class="title-box">
                                        <i class="icon fa fa-long-arrow-alt-right"></i>
                                        <h6 class="title">{{ $askQOneInfo->titleThree }}</h6>
                                    </div>
                                    <div class="text">{{ $askQOneInfo->descriptionThree }}</div>
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

                        @foreach($askQTwoInfo as $key=>$askQTwoInfos)

                        @if($key == 1)
  <!--Block-->
  <li class="accordion block active-block">
    <div class="acc-btn active">{{ $askQTwoInfos->question }}
        <div class="icon fa fa-plus"></div>
    </div>
    <div class="acc-content current">
        <div class="content">
            <div class="text">{{ $askQTwoInfos->answer }}</div>
        </div>
    </div>
</li>
                        @else
                        <li class="accordion block">
                            <div class="acc-btn">{{ $askQTwoInfos->question }}
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">{{ $askQTwoInfos->answer }}</div>
                                </div>
                            </div>
                        </li>
                        @endif
                        @endforeach




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
                        <h2>{{ $allTestimonialPartOneInfo->title }}</h2>
                    </div>
                    <div class="info-box">
                        <i class="icon flaticon-recommend"></i>
                        <div class="text"><?php
                            $pos = 4;

                            $words = explode(" ",$allTestimonialPartOneInfo->shortDescription);
                            array_splice( $words, $pos, 0, '<br>' );
                            $new_string = join(" ",$words);
                            echo $new_string;
                            ?></div>
                    </div>
                </div>
            </div>

            <!-- Testimonial Column -->
            <div class="testimonial-column col-lg-6 col-md-12">
                <div class="inner-column">
                    <div class="testimonial-carousel owl-carousel default-navs">
                        <!-- Testimonial Block -->
@foreach($allTestimonialPartTwoInfo as $allTestimonialPartTwoInfos)

                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="content-box">
                                    <div class="text">{{ $allTestimonialPartTwoInfos->shortDescription }}</div>
                                </div>
                                <div class="info-box">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <figure class="thumb"><img src="{{ asset('/') }}{{ $allTestimonialPartTwoInfos->image }}" alt=""></figure>
                                    <h5 class="name">{{ $allTestimonialPartTwoInfos->name }}</h5>
                                    <span class="designation">{{ $allTestimonialPartTwoInfos->designation }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach



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
                        <h2>{{ $allChooseUsInfo->titleOne }}</h2>
                        <h4 class="other-title">{{ $allChooseUsInfo->titleTwo }}</h4>
                        <div class="text">{{ $allChooseUsInfo->titleThree }}.</div>
                        <span class="icon icon-arrow3"></span>
                    </div>

                    <div class="info-outer">
                        <div class="row">
                            <div class="info-box col-lg-4 col-md-4">
                                <div class="inner">
                                    <i class="{{ $allChooseUsInfo->iconNameOne }}"></i>
                                    <h5 class="title">{{ $allChooseUsInfo->iconTitleOne }}</h5>
                                </div>
                            </div>
                            <div class="info-box col-lg-4 col-md-4">
                                <div class="inner">
                                    <i class="{{ $allChooseUsInfo->iconNameTwo }}"></i>
                                    <h5 class="title">{{ $allChooseUsInfo->iconTitleTwo }}</h5>
                                </div>
                            </div>
                            <div class="info-box col-lg-4 col-md-4">
                                <div class="inner">
                                    <i class="{{ $allChooseUsInfo->iconNameThree }}"></i>
                                    <h5 class="title">{{ $allChooseUsInfo->iconTitleThree }}</h5>
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
                        <figure class="image anim-overlay"><img src="{{ asset('/') }}{{ $allChooseUsInfo->imageOne }}" alt=""></figure>
                        <div class="rounded-text">
                            <img src="{{ asset('/') }}{{ $allChooseUsInfo->imageTwo }}" alt="">
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

                @foreach($allPortfolioInfo as $allPortfolioInfos)
                <div class=" project-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{ route('projectInformation',$allPortfolioInfos->id) }}"><img src="{{ asset('/') }}{{ $allPortfolioInfos->image }}" alt=""></a></figure>
                        </div>
                        <div class="content-box">
                            <a href="{{ route('projectInformation',$allPortfolioInfos->id) }}" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
                            <span class="cat">Development</span>
                            <h4 class="title"><a href="{{ route('projectInformation',$allPortfolioInfos->id) }}" title="">{{ $allPortfolioInfos->title }}</a></h4>
                        </div>
                    </div>
                </div>
                @endforeach


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

                @foreach($allProjectCountInfo as $allProjectCountInfos)
                <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner">
                        <div class="icon-box"><i class="{{ $allProjectCountInfos->icon }}"></i></div>
                        <div class="count-box"><span class="count-text" data-speed="3000" data-stop="{{ $allProjectCountInfos->count }}">0</span></div>
                        <h4 class="counter-title">{{ $allProjectCountInfos->name }}</h4>
                    </div>
                </div>
                @endforeach


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

            @foreach($newsList as $newsLists)
            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="{{route('news_detail',$newsLists->id)}}"><img src="{{ asset('/') }}{{ $newsLists->image }}" alt=""></a></figure>
                    </div>
                    <div class="content-box">
                        <span class="date">{{ $newsLists->date }}</span>
                        <ul class="post-info">
                            <li><i class="fa fa-user-circle"></i> by Admin</li>

                        </ul>
                        <h4 class="title"><a href="{{route('news_detail',$newsLists->id)}}">{{ $newsLists->title }}</a></h4>
                        <a href="{{route('news_detail',$newsLists->id)}}" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach


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
                <form method="post" action="{{ route('sendMessage') }}" id="contact-form">

                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="name" placeholder="Your name" required>
                        </div>

                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="subject" placeholder="Subject" required>
                        </div>


                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="email" name="email" placeholder="Email Address" required>
                        </div>



                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="phone" placeholder="Phone" required>
                        </div>


                        <div class="form-group col-lg-12">
                            <textarea name="description" placeholder="Write a message" required></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Send a message</span></button>
                        </div>
                    </div>
                </form>
            </div>
            <!--End Contact Form -->
            <figure class="image"><img src="{{ asset('/') }}public/front/images/resource/girl.png" alt=""></figure>
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
                @foreach($allClientLogoInfo as $allClientLogoInfos)
                <li class="client-block"> <a href="#"><img src="{{ $allClientLogoInfos->image }}" alt=""></a> </li>
@endforeach
            </ul>
        </div>
    </div>
</section>
<!--End Clients Section -->
@endsection
@section('script')

@endsection
