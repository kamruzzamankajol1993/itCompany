<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\ServiceTitle;
use App\Models\Service;
use App\Models\Aboutus;
use App\Models\HomePageContact;
use App\Models\FrequentlyAskPartOne;
use App\Models\FrequentlyAskPartTwo;
use App\Models\TestimonialPartOne;
use App\Models\TestimonialPartTwo;
use App\Models\ChooseUs;
use App\Models\clientLogo;
use App\Models\Portfolio;
use App\Models\PortfolioDetail;
use App\Models\ProjectCount;
use App\Models\News;
use App\Models\Message;
use App\Models\Team;
use App\Models\ServicePrice;
use App\Models\ServiceDetail;
use App\Models\TeamDetail;
use App\Models\MessagePartOne;
use App\Models\TermAndCondition;
use App\Models\PrivacyPolicy;
class MainController extends Controller
{

    public function term_and_condition(){

        $term = TermAndCondition::first();
        return view('front.term_and_condition',compact('term'));
    }

    public function privacy_policy(){

        $term = PrivacyPolicy::first();
        return view('front.privacy_policy',compact('term'));

    }


    public function index(){
        $allBannerInfo = Banner::latest()->first();
        $allServiceTitleInfo = ServiceTitle::latest()->first();
        $allAboutusInfo = Aboutus::latest()->first();
        $allhomePageContactInfo = HomePageContact::latest()->first();
        $allServiceInfo = Service::latest()->limit(4)->get();

        $askQOneInfo = FrequentlyAskPartOne::latest()->first();
        $askQTwoInfo = FrequentlyAskPartTwo::latest()->limit(4)->get();

        $allTestimonialPartOneInfo = TestimonialPartOne::latest()->first();
        $allTestimonialPartTwoInfo = TestimonialPartTwo::latest()->get();

        $allChooseUsInfo = ChooseUs::latest()->first();
        $allPortfolioInfo = Portfolio::latest()->limit(4)->get();
        $allProjectCountInfo = ProjectCount::latest()->get();

        $newsList = News::latest()->get();

        $allClientLogoInfo = clientLogo::latest()->get();

        return view('front.home.index',compact('allClientLogoInfo','newsList','allProjectCountInfo','allPortfolioInfo','allChooseUsInfo','allTestimonialPartTwoInfo','allTestimonialPartOneInfo','askQTwoInfo','askQOneInfo','allhomePageContactInfo','allAboutusInfo','allBannerInfo','allServiceTitleInfo','allServiceInfo'));
    }


    public function serviceList(){

        $allServiceInfo = Service::latest()->get();
        return view('front.serviceList',compact('allServiceInfo'));


    }

    public function serviceInformation($id){

        $serviceListR = Service::inRandomOrder()->get();
        $serviceList = Service::where('id',$id)->latest()->first();
        $serviceListOne = ServiceDetail::where('serviceId',$serviceList->id)->latest()->first();


        $servicePrice = ServicePrice::where('serviceDetailId',$serviceListOne->id)->latest()->get();
        return view('front.serviceInformation',compact('servicePrice','serviceListOne','serviceList','serviceListR'));
    }


    public function projectList(){

        $allPortfolioInfo = Portfolio::latest()->get();
        return view('front.projectList',compact('allPortfolioInfo'));
    }


    public function projectInformation($id){
        $portfolioListR = Portfolio::inRandomOrder()->get();
        $portfolioList = Portfolio::where('id',$id)->latest()->first();
        $portfolioListOne = PortfolioDetail::where('portfolioId',$portfolioList->id)->latest()->first();
        return view('front.projectInformation',compact('portfolioListOne','portfolioListR','portfolioList'));


    }

    public function faq(){
        $askQTwoInfo = FrequentlyAskPartTwo::latest()->get();
        return view('front.faq',compact('askQTwoInfo'));

    }



    public function about_us(){
        $allAboutusInfo = Aboutus::latest()->first();
        return view('front.aboutUs',compact('allAboutusInfo'));

    }


    public function teamList(){
        $allTeamInfo = Team::latest()->get();

        return view('front.teamList',compact('allTeamInfo'));

    }

    public function team_detail($id){
        $teamList = Team::where('id',$id)->latest()->first();
        $teamSocialListOne = TeamDetail::where('teamId',$teamList->id)->latest()->get();
        return view('front.team_detail',compact('teamList','teamSocialListOne'));

    }

    public function newsList(){
        $newsList = News::latest()->get();
        return view('front.newsList',compact('newsList'));
    }

    public function news_detail($id){

        $newsList = News::where('id',$id)->latest()->first();
        $newsListOne = News::latest()->limit(3)->get();
        return view('front.news_detail',compact('newsList','newsListOne'));

    }

    public function contact_us(){

        $allMessagePartOneInfo = MessagePartOne::latest()->first();
        return view('front.contact_us',compact('allMessagePartOneInfo'));
    }


    public function sendMessage(Request $request){

        $user = new Message();
       $user->name  = $request->name;
       $user->email = $request->email;
       $user->subject = $request->subject;
       $user->phone = $request->phone;
       $user->description = $request->description;
       $user->save();


       return redirect()->back();
    }
}
