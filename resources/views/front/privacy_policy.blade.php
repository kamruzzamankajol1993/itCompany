@extends('front.master.master')

@section('title')
Privacy Policy | {{ $systemDataAll->siteName }}
@endsection


@section('body')

<!-- Start main-content -->
<section class="page-title" style="background-image: url({{ asset('/') }}public/front/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Privacy Policy</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li>Privacy Policy</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->


 <!-- Team Section -->
 <section class="team-section">
    <div class="auto-container">

        <div class="row">
            <!-- Team block -->


            <div class="team-block-two col-lg-12 col-md-12 col-sm-12 wow fadeInUp">

                {!! $term->privacy_policies !!}
            </div>


        </div>
    </div>
</section>
<!-- End Team Section -->


@endsection
