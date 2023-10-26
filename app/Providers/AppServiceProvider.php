<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\SystemInformation;
use App\Models\Message;
use App\Models\ServiceOrder;
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
        $systemDataAll = SystemInformation::latest()->first();

        $allMessageListCount = Message::count();

        $orderListCount = ServiceOrder::count();

       view()->share('systemDataAll', $systemDataAll);

       view()->share('allMessageListCount', $allMessageListCount);

       view()->share('orderListCount', $orderListCount);
    }
}
