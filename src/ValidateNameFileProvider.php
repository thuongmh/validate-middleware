<?php

namespace thuongmh\ValidateNameFile;

use App\Http\Middleware\ValidatorStringInput;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use thuongmh\ValidateNameFile\Middleware\ValidateFileNameUpload;
use thuongmh\ValidateNameFile\Middleware\ValidatorHtmlInjection;

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
        $router->pushMiddlewareToGroup('web', ValidateFileNameUpload::class);
        $router->pushMiddlewareToGroup('web', ValidatorHtmlInjection::class);
        $router->pushMiddlewareToGroup('web', ValidatorStringInput::class);
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/validate.php' => config_path('validate.php'),
        ], 'config');
    }

}
