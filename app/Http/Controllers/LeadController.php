<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadController extends Controller
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
        return view('leads.list');
    }
	/**
     * Create new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNew()
    {
        return view('leads.create');
    }
	/**
     * Create new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('leads.edit');
    }
}
