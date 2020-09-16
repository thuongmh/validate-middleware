<?php

namespace thuongmh\ValidateNameFile\Middleware;

use Closure;

class ValidatorHtmlInjection
{

    private $expect = [
        '_token',
        'content',
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
        if ($request->isMethod('GET')) {
            return $next($request);
        }
        foreach ($request->except(config('validate.expect_name_html')) as $key => $value) {
            try {
                preg_match_all(config('validate.regex_html'), $value, $matches, PREG_SET_ORDER, 0);
                if(count($matches) > 0) {
                    return redirect()->back()->withErrors(['token' => __(('validation.html_injection'))]);
                }
            } catch (\Exception $e) {
                continue;
            }

        }
        return $next($request);
    }
}
