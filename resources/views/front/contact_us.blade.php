@extends('front.master.master')

@section('title')
Contact Us | {{ $systemDataAll->siteName }}
@endsection


@section('body')
<!-- Start main-content -->
<section class="page-title" style="background-image: url({{ asset('/') }}public/front/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Contact Us</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->

<!--Contact Details Start-->
<section class="contact-details">
    <div class="container ">
        <div class="row">
            <div class="col-xl-7 col-lg-6">
                <div class="sec-title">
                    <span class="sub-title">Send us email</span>
                    <h2>{{ $allMessagePartOneInfo->title }}</h2>
                </div>
                <!-- Contact Form -->
                <form id="contact_form" name="contact_form" class="" action="{{ route('sendMessage') }}"  method="post">
@csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name="name" class="form-control" type="text" placeholder="Enter Name">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name="subject" class="form-control" type="text" placeholder="Enter Subject">
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name="phone" class="form-control" type="text" placeholder="Enter Phone">
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <textarea name="description" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
                    </div>
                    <div class="mb-3">
                        <input name="form_botcheck" class="form-control" type="hidden" value="" />
                        <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
                        <button type="reset" class="theme-btn btn-style-one bg-theme-color5"><span class="btn-title">Reset</span></button>
                    </div>
                </form>
                <!-- Contact Form Validation-->
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="contact-details__right">
                    <div class="sec-title">
                        <span class="sub-title">Need any help?</span>
                        <h2>{{ $allMessagePartOneInfo->titleTwo }}</h2>
                        <div class="text">{{ $allMessagePartOneInfo->description }}</div>
                    </div>
                    <ul class="list-unstyled contact-details__info">
                        <li>
                            <div class="icon bg-theme-color2">
                                <span class="lnr-icon-phone-plus"></span>
                            </div>
                            <div class="text">
                                <h6>Have any question?</h6>
                                <a href="tel:{{ $systemDataAll->sitePhone }}"><span>Free</span>+ {{ $systemDataAll->sitePhone }}</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="lnr-icon-envelope1"></span>
                            </div>
                            <div class="text">
                                <h6>Write email</h6>
                                <a href="mailto:{{ $systemDataAll->siteEmail }}">{{ $systemDataAll->siteEmail }}</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="lnr-icon-location"></span>
                            </div>
                            <div class="text">
                                <h6>Visit anytime</h6>
                                <span>{{ $systemDataAll->siteAddress }}</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Details End-->
@endsection
