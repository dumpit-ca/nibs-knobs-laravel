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
        array_walk_recursive($input, function(&$input) {
            $str_utf8 = mb_convert_encoding($input, 'UTF-8', mb_detect_encoding($input));
            $input = filter_var(strip_tags(substr($str_utf8, 0, 500)), FILTER_SANITIZE_STRING);
        });

        $request->merge($input);

        return $next($request);
    }
}
