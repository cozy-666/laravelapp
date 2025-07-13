<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        $content = $response->content();

        $pattarn = '/<middleware>(.*)<\/middleware>/i';
        $replace = '<a href = "http://$1">$1</a>';
        $content = preg_replace($pattarn, $replace, $content);
        $response->setContent($content);
        return $response;
    }
}
