<?php

namespace YourVendor\LaravelSeo;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\App;

class SeoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('seo', fn () => new SeoManager());
    }

    public function boot()
    {
        if (!function_exists('config_path')) {
            /**
             * Get the configuration path.
             *
             * @param  string  $path
             * @return string
             */
            function config_path($path = '')
            {
                return App::basePath('config') . ($path ? DIRECTORY_SEPARATOR . $path : $path);
            }
        }

        $this->publishes([
            __DIR__.'/../config/seo.php' => config_path('seo.php'),
        ], 'seo-config');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'seo');
    }
}
