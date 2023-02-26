<?php

namespace App\Http\Controllers\Auth;
//use Auth;
use App\Models\history;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Session;
//use App\Http\Controllers\Auth;

class LogoutController extends Controller
{
    /**
     * Log out account user.
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function perform()
    {
        history::create(['msg'=>"{{ auth()->user()->email }}.has logged in",'type'=>'logout']);
        Session::flush();
        Auth::logout();
        return view('welcome');}
}
