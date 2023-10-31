@extends('front.master.master')

@section('title')
Service | {{ $systemDataAll->siteName }}
@endsection


@section('body')
	<!-- Start main-content -->
	<section class="page-title" style="background-image: url({{ asset('/') }}public/front/images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">Services</h1>
				<ul class="page-breadcrumb">
					<li><a href="{{ route('index') }}">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li>Services</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!-- Services Section -->
	<section class="services-section">

		<div class="auto-container">

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

@endsection
