<?php

namespace thuongmh\validateNameFile;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use thuongmh\validateNameFile\Middleware\ValidateFileNameUpload;
use thuongmh\validateNameFile\Middleware\ValidatorHtmlInjection;
use thuongmh\validateNameFile\Middleware\ValidatorStringInput;

class ValidateNameFileProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/validate.php',
            'permission'
        );
        /** @var Router $router */
        $router = $this->app['router'];
        if(config('validate.handle_validate.name_file')) {
            $router->pushMiddlewareToGroup('web', ValidateFileNameUpload::class);
        }
        if(config('validate.handle_validate.name_file')) {
            $router->pushMiddlewareToGroup('web', ValidatorHtmlInjection::class);
        }
        if(config('validate.handle_validate.name_file')) {
            $router->pushMiddlewareToGroup('web', ValidatorStringInput::class);
        }
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/validate.php' => config_path('validate.php'),
        ], 'config');
    }

}
