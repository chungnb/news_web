<?php

namespace App\Providers;

use App\Models\InfomationPage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\CustomSeoPage;
class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $information = InfomationPage::where('is_active', '1')->get();
            $seoPage = CustomSeoPage::findOrFail(1);
            $view->with([
                'information' => $information,
                'seoPage' => $seoPage
            ]);
        });
    }
}
