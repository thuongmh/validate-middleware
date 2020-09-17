### Installation

Run
   ```   
   composer require thuongmh/middleware-validate --dev
   php artisan vendor:publish --provider="TH\MiddlewareValidate\ValidateNameFileProvider"
   ```
add file provider to app config:
    \TH\MiddlewareValidate\ValidateNameFileProvider::class,

Custom config in file validate in directory config 
