<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\View\Composers\PostComposer;
use App\Http\View\Composers\CategoryComposer;
use App\Http\View\Composers\TagComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('admin.layouts.main', PostComposer::class);
        View::composer('admin.layouts.main', CategoryComposer::class);
        View::composer('admin.layouts.main', TagComposer::class);
        Carbon::setLocale('Uk');
        Paginator::useBootstrap();
    }
}
