@extends('front.master.master')

@section('title')
News | {{ $systemDataAll->siteName }}
@endsection


@section('body')
	<!-- Start main-content -->
	<section class="page-title" style="background-image: url({{ asset('/') }}public/front/images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">News</h1>
				<ul class="page-breadcrumb">
					<li><a href="{{ route('index') }}">Home</a></li>
					<li>News</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	 <!-- News Section Two -->
	<section class="news-section">
		<div class="auto-container">

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
@endsection
