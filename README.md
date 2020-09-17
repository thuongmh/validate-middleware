### Installation

Run
   ```   
   composer require thuongmh/middleware-validate --dev
   php artisan vendor:publish --provider="TH\MiddlewareValidate\ValidateNameFileProvider"
   ```
add to file config/app.php:
    \TH\MiddlewareValidate\ValidateNameFileProvider::class,

Custom config in file validate in directory config 
