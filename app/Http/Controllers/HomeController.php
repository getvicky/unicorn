<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uid = Auth::user()->id;
        $user = User::where('id',$uid)->first();
        $user->last_login = Carbon::now()->format('Y-m-d H:i:s');
        $user->save();
        return view('home');
    }
	
	/**
     * Backup.
     *
     * @return \Illuminate\Http\Response
     */
    public function backup(){
	    return view('backup');
	}
}
