<?php

namespace App\Http\Middleware;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

use Closure;
use Illuminate\Http\Request;

class IsAdminAndAge_30
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
        // dd(auth()->user()->D_O_B. " Years"); 
        //  dd(Carbon::now()->toDateString());
        $age = Carbon::parse(auth()->user()->D_O_B)->diff(Carbon::now()->toDateString())->y;
        log::info($age);
        // dd($age. " Years"); 

        if(auth()->user()->is_admin && $age >='30' )
        {
            return $next($request);
        }
        else 
        {
           return redirect()->route('dashboard');
        }
        
    }
}
