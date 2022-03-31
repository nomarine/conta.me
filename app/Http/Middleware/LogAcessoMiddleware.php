<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\LogAcesso;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //return $next($request);
        //dd($request);
        $ip = $request->server->get('SERVER_NAME');
        $route = $request->getRequestUri();

        LogAcesso::create([
            'ip' => $ip,
            'route' => $route
        ]);

        return $next($request);

    }
}
