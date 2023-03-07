<?php

namespace App\Http\Middleware;

use Closure;

class VerifyAsciiHeaders
{
    public function handle($request, Closure $next)
    {
        $headers = $request->headers->all();
        foreach ($headers as $headerName => $headerValues) {
            foreach ($headerValues as $headerValue) {
                if (mb_detect_encoding($headerValue, 'ASCII', true) !== 'ASCII') {
                    return response('Invalid headers', 400);
                }
            }
        }

        $response = $next($request);

        $headers = $response->headers->all();
        foreach ($headers as $headerName => $headerValues) {
            foreach ($headerValues as $headerValue) {
                if (mb_detect_encoding($headerValue, 'ASCII', true) !== 'ASCII') {
                    return response('Invalid headers', 500);
                }
            }
        }

        return $response;
    }
}
