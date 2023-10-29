<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
class MainController extends Controller
{
    public function index(){
        $allBannerInfo = Banner::latest()->first();
        return view('front.home.index',compact('allBannerInfo'));
    }
}
