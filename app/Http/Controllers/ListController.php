<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ListController extends Controller
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
        $lists = User::all();
        return view('user.list',compact('lists'));
    }
	/**
     * Create new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNew()
    {
        return view('user.create');
    }
	/**
     * Create new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('user.edit');
    }
    /**
     * Save User Details.
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $userid = Auth::user()->id;

        $user = new User;
        $user->name                 = $request->first_name.' '.$request->last_name;
        $user->email                = $request->user_email;
        $user->password             = bcrypt($request->password);
        $user->phone_number         = $request->user_phone;
        $user->emergency_contact    = $request->emergency_contact;
        $user->emp_id               = $request->employee_id;
        $user->extn_number          = $request->extn_number;
        $user->alias_name           = $request->alias_name;
        $user->current_address      = $request->current_address;
        $user->permanent_address    = $request->permanent_address;
        $user->date_of_joining      = $request->joining_date;
        $user->agent_id             = $request->agent_id;
        $user->ctc                  = $request->ctc;
        $user->travel_allowance     = $request->travel_allowance;
        $user->allowance            = $request->allowance;
        $user->cab_service          = $request->cab_service;
        $user->type                 = $request->type;
        $user->department           = $request->department;
        $user->created_by           = $userid;
        $user->save();

        return redirect('user/list')->with('success','User Created Successfully!!');
        
    }
    /**
     * Update User Details.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        dd($request);
    }
}
