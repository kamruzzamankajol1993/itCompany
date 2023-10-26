<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\AboutusController;
use App\Http\Controllers\Admin\ClientLogoController;
use App\Http\Controllers\Admin\FrequentlyAskPartOneController;
use App\Http\Controllers\Admin\FrequentlyAskPartTwoController;
use App\Http\Controllers\Admin\HomePageContactController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\MessagePartOneController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\PortfolioDetailController;
use App\Http\Controllers\Admin\ProjectCountController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServiceDetailController;
use App\Http\Controllers\Admin\ServiceOrderController;
use App\Http\Controllers\Admin\ServicePriceController;
use App\Http\Controllers\Admin\ServiceTitleController;
use App\Http\Controllers\Admin\SocialLinkController;


use App\Http\Controllers\Admin\SystemInformationController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TeamDetailController;

use App\Http\Controllers\Admin\TestimonialPartOneController;
use App\Http\Controllers\Admin\TestimonialPartTwoController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ChooseUsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function () {

    Route::get('/','loginAdmin')->name('loginAdmin');
    Route::get('/registrationAdmin','registrationAdmin')->name('registrationAdmin');
});

Route::group(['prefix' => 'admin'], function () {

    Route::resource('ChooseUs', ChooseUsController::class);


    Route::resource('bannerList', BannerController::class);
    Route::resource('aboutus', AboutusController::class);
    Route::resource('clientLogo', ClientLogoController::class);
    Route::resource('frequentlyAskPartOne', FrequentlyAskPartOneController::class);
    Route::resource('frequentlyAskPartTwo', FrequentlyAskPartTwoController::class);
    Route::resource('homePageContact', HomePageContactController::class);
    Route::resource('message', MessageController::class);
    Route::resource('messagePartOne', MessagePartOneController::class);
    Route::resource('newsList', NewsController::class);
    Route::resource('portfolioDetail', PortfolioDetailController::class);
    Route::resource('portfolio', PortfolioController::class);

    Route::resource('projectCout', ProjectCountController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('serviceDetail', ServiceDetailController::class);
    Route::resource('serviceOrder', ServiceOrderController::class);
    Route::resource('servicePrice', ServicePriceController::class);
    Route::resource('serviceTitle', ServiceTitleController::class);
    Route::resource('socialLink', SocialLinkController::class);
    Route::resource('team', TeamController::class);
    Route::resource('systemInformation', SystemInformationController::class);
    Route::resource('team', TeamDetailController::class);
    Route::resource('testimonialPartOne', TestimonialPartOneController::class);
    Route::resource('testimonialPartTwo', TestimonialPartTwoController::class);


    });


Route::get('/clear', function() {
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    return redirect()->back();
});
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
