@extends('front.master.master')

@section('title')
Success | {{ $systemDataAll->siteName }}
@endsection


@section('body')

<!-- Start main-content -->
<section class="page-title" style="background-image: url({{ asset('/') }}public/front/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Payment SuccessFully Completed</h1>

        </div>
    </div>
</section>
<!-- end main-content -->


@endsection
