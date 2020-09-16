<?php

namespace App\Http\Middleware;

use Closure;

class ValidatorStringInput
{
    private $expect = [
        'token'
    ];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->isMethod('GET')) {
            return $next($request);
        }
        foreach ($request->except(config('validate.expect_name_html')) as $key => $value) {
            try {
                if(is_string($value)) {
                    if(in_array(substr($value, 0, 1),  config('validate.ARRAY_REPLACE'))) {
                        return redirect()->back()->withErrors(['token' => __(('validation.spacial_characters'))]);
                    }
                }
            } catch (\Exception $e) {
                continue;
            }
        }
        return $next($request);
    }
}
