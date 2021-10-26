<?php

namespace App\Http\Middleware;

use Closure;

class LoginCheckMiddleware
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

        $login = $request->session()->has('token');

        if($login == true){
            return $next($request);
        }else{
            return redirect('/');
        }
        
    }
}
