<section class="banner-section">
    <div class="banner-carousel owl-carousel owl-theme default-navs">
        <!-- Slide Item -->
        <div class="slide-item">
            <div class="bg-image" style="background-image: url({{ asset('/') }}{{ $allBannerInfo->bannerImage }});"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1 class="title animate-1">


                        <?php
$pos = 2;

$words = explode(" ",$allBannerInfo->bannerTitle);
array_splice( $words, $pos, 0, '<br>' );
$new_string = join(" ",$words);
echo $new_string;
?>

                    </h1>
                    <div class="btn-box animate-2">
                        <a href="{{route('about_us')}}" class="theme-btn btn-style-one hover-light"><span class="btn-title">{{ $allBannerInfo->bannerButtonName }}</span></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="slide-item">
            <div class="bg-image" style="background-image: url({{ asset('/') }}{{ $allBannerInfo->bannerImageTwo }});"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1 class="title animate-1">                     <?php
                        $pos = 3;

                        $words = explode(" ",$allBannerInfo->bannerButtonLink);
                        array_splice( $words, $pos, 0, '<br>' );
                        $new_string = join(" ",$words);
                        echo $new_string;
                        ?></h1>
                    <div class="btn-box animate-2">
                        <a href="{{route('about_us')}}" class="theme-btn btn-style-one hover-light"><span class="btn-title">{{ $allBannerInfo->bannerButtonName }}</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
