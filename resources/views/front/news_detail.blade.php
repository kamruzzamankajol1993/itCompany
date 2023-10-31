@extends('front.master.master')

@section('title')
{{ $newsList->title }} | {{ $systemDataAll->siteName }}
@endsection


@section('body')
<!-- Start main-content -->
<section class="page-title" style="background-image: url({{ asset('/') }}public/front/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">News Details</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>News</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->

<!--Blog Details Start-->
<section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details__left">
                    <div class="blog-details__img">
                        <img src="{{ asset('/') }}{{ $newsList->coverImage }}" alt="">
                        <div class="blog-details__date">
                            <span class="day">{{ $newsList->date }}</span>

                        </div>
                    </div>
                    <div class="blog-details__content">
                        <ul class="list-unstyled blog-details__meta">
                            <li><a href="#"><i class="fas fa-user-circle"></i> Admin</a> </li>

                        </ul>
                        <h3 class="blog-details__title">{{ $newsList->title }}</h3>
                        <p class="blog-details__text-2">{!! $newsList->description !!}
                        </p>

                    </div>


                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">

                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Latest Posts</h3>
                        <ul class="sidebar__post-list list-unstyled">

                            @foreach($newsListOne as $newsListOnes)
                            <li>
                                <div class="sidebar__post-image"> <img src="{{ asset('/') }}{{ $newsListOnes->image }}" alt=""> </div>
                                <div class="sidebar__post-content">
                                    <h3> <span class="sidebar__post-content-meta"><i
                                        class="fas fa-user-circle"></i>Admin</span> <a href="{{route('news_detail',$newsListOnes->id)}}">{{ $newsListOnes->title }}</a>
                                    </h3>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog Details End-->
@endsection
