<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class XssSanitization
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

        $input = $request->all();
        Log::info("input initialized");
        array_walk_recursive($input, function(&$input) {
            $str_utf8 = mb_convert_encoding($input, 'UTF-8', mb_detect_encoding($input));
            $input = filter_var(strip_tags($str_utf8), FILTER_SANITIZE_STRING);
        });
        Log::info("input sanitized");

        $request->merge($input);
        return $next($request);
    }
}
