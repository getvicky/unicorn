<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
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
        return view('client.list');
    }
	/**
     * Create new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNew()
    {
        return view('client.create');
    }
	/**
     * Create new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('client.edit');
    }
	/**
     * Edit User.
     *
     * @return \Illuminate\Http\Response
     */
    public function history()
    {
        return view('client.history');
    }
}
