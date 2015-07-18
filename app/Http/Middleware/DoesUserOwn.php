<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use App\Http\Requests;
use Closure;

use Auth;
class DoesUserOwn
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
       if(Auth::id() == $request->user_id) {
           return $next($request);
       }

    }
}
