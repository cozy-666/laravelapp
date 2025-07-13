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
        $data = [
            ['name' => '山田太郎', 'mail' => 'taro@yamada'],
            ['name' => '鈴木花子', 'mail' => 'hanako@suzuki'],
            ['name' => '佐藤次郎', 'mail' => 'jiro@sato'],
        ];
        $request->merge(['data' => $data]);
        return $next($request);
    }
}
