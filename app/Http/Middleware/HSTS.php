<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HSTS
{

    private $unwantedHeaderList = [
        'X-Powered-By',
        'Server',
        'ETag'
    ];
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $response->header('Strict-Transport-Security', 'max-age=31536000; includeSubdomains');
        $response->header('X-Frame-Options', 'DENY');
        $response->header('X-Content-Type-Options', 'nosniff');
        $response->header('X-XSS-Protection', '1; mode=block');
        $response->header('Referrer-Policy', 'no-referrer-when-downgrade');
        //set cookie to secure
        // $response->header('Set-Cookie', 'HttpOnly;Secure;SameSite=Strict');
        //Permissions policy
        $response->header('Permissions-Policy', "camera=(), display-capture=(), document-domain=(), encrypted-media=()");


        $this->removeUnwantedHeaders($this->unwantedHeaderList);

        return $response;
    }

    private function removeUnwantedHeaders($headerList)
    {
        foreach ($headerList as $header)
            header_remove($header);
    }

}
