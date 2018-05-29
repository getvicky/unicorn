<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Company;
use App\Models\PaymentMethod;
use App\User;
use Validator;

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
        $customers = Customer::all();
        return view('client.list',compact('customers'));
    }
	/**
     * Create new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNew()
    {
        $agents = User::where('type','Agent')->get();
        $companies = Company::all();
        $methods = PaymentMethod::all();
        return view('client.create',compact('agents','companies','methods'));
    }
	/**
     * Create new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::where('id',$id)->first();
        return view('client.edit',compact('customer'));
    }/**
     * Delete Customer.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $cust = Customer::find($id);
        $cust->delete();

        return redirect('/client/list')->with('success','Customer Deleted Successfully!!');
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
    /**
     * Save Customer Information.
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $validator = Validator::make(
            array(
                'customer_firstname'        => $request->customer_firstname,
                'customer_lastname'         => $request->customer_lastname,
                'customer_email'            => $request->customer_email,
                'customer_mobile'           => $request->customer_mobile,
            ),
            array(
                'customer_firstname'        => 'required',                    
                'customer_lastname'         => 'required',                    
                'customer_email'            => 'required',                    
                'customer_mobile'           => 'required',                                   
            )
        );

        if ($validator->fails())
        {
            return redirect('/client/new')->withErrors($validator)->withInput();
        }

        $customer = new Customer;
        $customer->first_name   = $request->customer_firstname;
        $customer->last_name    = $request->customer_lastname;
        $customer->email        = $request->customer_email;
        $customer->mobile       = $request->customer_mobile;
        $customer->phone_home   = $request->phone_home;
        $customer->phone_work   = $request->phone_work;
        $customer->address      = $request->address;
        $customer->city         = $request->city;
        $customer->state        = $request->state;
        $customer->zip          = $request->zip;
        $customer->active       = $request->is_active;
        $customer->save();

        return redirect('/client/list')->with('success','Customer Created Successfully!!');
    }
    /**
     * Update Customer Information.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validator = Validator::make(
            array(
                'customer_firstname'        => $request->customer_firstname,
                'customer_lastname'         => $request->customer_lastname,
                'customer_email'            => $request->customer_email,
                'customer_mobile'           => $request->customer_mobile,
            ),
            array(
                'customer_firstname'        => 'required',                    
                'customer_lastname'         => 'required',                    
                'customer_email'            => 'required',                    
                'customer_mobile'           => 'required',                                   
            )
        );

        if ($validator->fails())
        {
            return redirect('/client/edit/'.$id)->withErrors($validator)->withInput();
        }

        $customer = Customer::find($id);
        $customer->first_name    = $request->customer_firstname;
        $customer->last_name    = $request->customer_lastname;
        $customer->email        = $request->customer_email;
        $customer->mobile       = $request->customer_mobile;
        $customer->phone_home   = $request->phone_home;
        $customer->phone_work   = $request->phone_work;
        $customer->address      = $request->address;
        $customer->city         = $request->city;
        $customer->state        = $request->state;
        $customer->zip          = $request->zip;
        $customer->active       = $request->is_active;
        $customer->save();

        return redirect('/client/list')->with('success','Customer Updated Successfully!!');
    }


}
