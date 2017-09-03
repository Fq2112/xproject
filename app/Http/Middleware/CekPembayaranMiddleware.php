<?php

namespace App\Http\Middleware;

use Closure;

class CekPembayaranMiddleware
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
        if($request->user()->lomba()->first()->pivot->terkonfirmasi)
            return $next($request);

        return redirect()->route('pembayaran');
    }

}
