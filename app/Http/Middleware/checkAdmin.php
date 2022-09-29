<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(session('kepala_desa')){
            return $next($request);
        }else if(session('admin')){
            return $next($request);
        }else if(session('user')){
            return $next($request);
        }

        return redirect('login')->with('status', 'Anda harus login terlebih dahulu !');
    }
}
