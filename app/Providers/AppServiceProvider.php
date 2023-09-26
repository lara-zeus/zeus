<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Forms\Components\Select;
use Illuminate\Support\ServiceProvider;
use RyanChandler\FilamentNavigation\FilamentNavigation;

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
        Filament::serving(function () {
            FilamentNavigation::get()
                ->itemType(
                    __('App link'),
                    [
                        Select::make('app_code')
                            ->label(__('Select App'))
                            ->options([
                                'blog' => __('Blog homepage'),
                                'contact' => __('Contact us page'),
                                'faq' => __('Faq page'),
                                'libraries' => __('Libraries page'),
                                'forms' => __('Forms page'),
                            ]),
                    ],
                    'app_link'
                );
        });
    }
}
