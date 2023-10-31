@extends('front.master.master')

@section('title')
About Us | {{ $systemDataAll->siteName }}
@endsection


@section('body')
	<!-- Start main-content -->
	<section class="page-title" style="background-image: url({{ asset('/') }}public/front/images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">About Us</h1>
				<ul class="page-breadcrumb">
					<li><a href="{{ route('index') }}">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li>About</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!-- About Section -->
	<!-- About Section -->
<section class="about-section ">
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
	<!-- End About Section -->
@endsection
