<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\SystemInformation;
use App\Models\Message;
use App\Models\ServiceOrder;
use App\Models\SocialLink;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        $socialList = SocialLink::latest()->get();
        $systemDataAll = SystemInformation::latest()->first();

        $allMessageListCount = Message::where('status',0)->count();

        $orderListCount = ServiceOrder::count();

        view()->share('socialList', $socialList);

       view()->share('systemDataAll', $systemDataAll);

       view()->share('allMessageListCount', $allMessageListCount);

       view()->share('orderListCount', $orderListCount);
    }
}
