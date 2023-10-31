@extends('front.master.master')

@section('title')
Faq | {{ $systemDataAll->siteName }}
@endsection


@section('body')
<!-- Start main-content -->
<section class="page-title" style="background-image: url({{ asset('/') }}public/front/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">FAQ</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li>FAQ</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->

<!-- FAQ Section -->
<section class="">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="accordion-box wow fadeInRight">

                    @foreach($askQTwoInfo as $key=>$askQTwoInfos)

                    @if($key == 0)
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
                    <!--Block-->
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
</section>
<!--End FAQ Section -->
@endsection
