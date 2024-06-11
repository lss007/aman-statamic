<?php

namespace App\Providers;

use App\Modifiers\RemovePTags;
use App\Modifiers\StripTags;
use Illuminate\Support\ServiceProvider;
use Statamic\Modifiers\Modifier;

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
    public function boot()
    {
        // Modifier::register('remove_p_tags', RemovePTags::class);
        // Modifier::register('strip_tags', StripTags::class);

    }
}
