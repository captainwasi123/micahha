<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App;

class changeLang
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
        if(session()->has('locate')){
            App::setlocale(session()->get('locate'));
        }
        return $next($request);
    }
}
