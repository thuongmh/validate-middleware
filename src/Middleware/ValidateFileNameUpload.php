<?php

namespace Thuongmh\ValidateNameFile\Middleware;

use Closure;

class ValidateFileNameUpload
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->isMethod('get')) {
            return $next($request);
        }
        foreach ($request->only(config('validate.list_file_name')) as $value) {
            if(is_array($value)) {
                foreach ($value as $item) {
                    $checkNameFile = $this->validateNameFile($item->getClientOriginalName());
                    if(!$checkNameFile) {
                        break 2;
                    }
                }
            } else {
                $checkNameFile = $this->validateNameFile($value->getClientOriginalName());
                if(!$checkNameFile) {
                    break;
                }
            }
        }
        if($checkNameFile) {
            return $next($request);
        }
        return redirect()->back()->withErrors(['token' => 'File upload có định dạng không phù hợp']);
    }

    private function validateNameFile ($nameFile)
    {
        foreach (config('validate.white_list_extension_file') as $name) {
            if (strlen(strstr(substr(mb_strtolower($nameFile), -5) , $name)) > 0) {
                return true;
            }
        }
        return false;
    }
}
