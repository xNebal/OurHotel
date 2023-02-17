<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $userType)
    {
        if(auth()->user()->type == 1){
            return response()->view('adminhome');
        }
        if(auth()->user()->type == 2){
            return response()->view('reservation_emphome');
        }
        if(auth()->user()->type == 3){
            return response()->view('kitchen_emphome');
        }
        if(auth()->user()->type == 0){
            return response()->view('home');
        }
        //return response()->json(['You do not have permission to access for this page.']);
        //return response()->route('/logout');
        else return response()->view('login');
    }
}
