<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Company;
use App\Models\PaymentMethod;
use App\Models\Membership;
use App\Models\Status;
use App\Models\Timezone;
use App\Models\LeadsAmountHistory;
use App\Models\LeadsStatusHistory;
use App\Models\Leads;
use App\User;
use Validator;
use Auth;
use Carbon\Carbon;

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
        $agents         = User::where('type','Agent')->get();
        $supers         = User::where('type','Supervisor')->get();
        $memberships    = Membership::where('is_active',1)->get();
        $status         = Status::all();
        $timezones      = Timezone::all();
        $companies      = Company::all();
        $methods        = PaymentMethod::all();
        return view('client.create',compact('agents','companies','methods','supers','memberships','status','timezones'));
    }
	/**
     * Create new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::where('id',$id)->first();
        $lead = Leads::where('customer_id',$id)->first();
        $supers = User::where('type','Supervisor')->get();
        $companies = Company::all();
        $status         = Status::all();
        $agents = User::where('type','Agent')->get();
        $memberships    = Membership::where('is_active',1)->get();
        $methods        = PaymentMethod::all();
        $timezones      = Timezone::all();

        return view('client.edit',compact('customer','lead','companies','agents','memberships','methods','supers','status','timezones'));
    }/**
     * Delete Customer.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $cust = Customer::find($id);
        $cust->delete();

        $lead = Leads::where('customer_id',$id)->first();
        if(!Empty($lead)){
            $lead->delete();
        }

        $leadamounthistory = LeadsAmountHistory::where('lead_id', $lead->id)->get(['id']);
        if(!Empty($leadamounthistory)){
            LeadsAmountHistory::destroy($leadamounthistory->toArray());
        }

        $leadstatushistory = LeadsStatusHistory::where('lead_id', $lead->id)->get(['id']);
        if(!Empty($leadstatushistory)){
            LeadsStatusHistory::destroy($leadstatushistory->toArray());
        }
        
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
        $userid = Auth::user()->id;
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
        $lastInsertId = $customer->id;

        //save lead data
        if($request->payment_method == 1){

            $data = array(
                'card_name'         => $request->credit_billing_card_name,
                'card_no'           => $request->credit_billing_card_number,
                'card_exp_month'    => $request->credit_billing_card_exp_month,
                'card_exp_year'     => $request->credit_billing_card_exp_year,
                'card_cvv'          => $request->credit_billing_card_cvv
            );

            $payment_method_details = serialize($data);

        }else if($request->payment_method == 2){
            $data = array(
                'routing_number'            => $request->routing_number,
                'echeck_accno'              => $request->echeck_accno,
                'echeck_cheque_no'          => $request->echeck_cheque_no,
                'echeck_transit_id'         => $request->echeck_transit_id,
                'echeck_bank_name'          => $request->echeck_bank_name,
                'echeck_bank_address'       => $request->echeck_bank_address
            );

            $payment_method_details = serialize($data);

        }else if($request->payment_method == 3){
            $data = array(
                'physical_check_bank_name'  => $request->physical_check_bank_name,
                'physical_check_cheque_no'  => $request->physical_check_cheque_no
            );

            $payment_method_details = serialize($data);

        }else if($request->payment_method == 4){
            $data = array(
                'interac_email_id'  => $request->interac_email_id
            );

            $payment_method_details = serialize($data);

        }else if($request->payment_method == 5){
            $data = array(
                'zille_email_id'  => $request->zille_email_id
            );

            $payment_method_details = serialize($data);

        }else if($request->payment_method == 6){
            $data = array(
                'money_order'  => $request->money_order,
                'money_order_address'  => $request->money_order_address
            );

            $payment_method_details = serialize($data);

        }else if($request->payment_method == 7){
            $data = array(
                'cashier_cheque_no'  => $request->cashier_cheque_no,
                'cashier_cheque_address'  => $request->cashier_cheque_address
            );

            $payment_method_details = serialize($data);

        }else if($request->payment_method == 8){
            $data = array(
                'pre_card_name'         => $request->prepaid_billing_card_name,
                'pre_card_no'           => $request->prepaid_billing_card_number,
                'pre_card_exp_month'    => $request->prepaid_billing_card_exp_month,
                'pre_card_exp_year'     => $request->prepaid_billing_card_exp_year,
                'pre_card_cvv'          => $request->prepaid_billing_card_cvv
            );

            $payment_method_details = serialize($data);
        }

        
        $lead  = new Leads;
        $lead->customer_id              = $lastInsertId;
        $lead->is_converted             = $request->is_converted;
        $lead->converted_date           = $request->converted_date;
        $lead->amount                   = $request->amount;
        $lead->sales_agent_id           = $request->agent_id;
        $lead->reason_unconverted       = $request->reason_unconverted;
        $lead->brief_unconverted        = $request->brief_unconverted;
        $lead->status_id                = $request->status_id;
        $lead->timezone                 = $request->timezone_id;
        $lead->company_name_id          = $request->company_name;
        $lead->payment_type             = $request->payment_type;
        $lead->payment_method_id        = $request->payment_method;
        $lead->membership_plan_id       = $request->membership_plan;
        $lead->customer_computer_pass   = $request->computer_pass;
        $lead->no_of_devices            = $request->no_of_devices;
        $lead->type_of_devices          = $request->type_of_devices;
        $lead->amount_received          = $request->received_amount;
        $lead->payment_method_details   = $payment_method_details;
        $lead->is_upgrade               = $request->is_upgrade;
        $lead->supervisor_id            = $request->supervisor_id;
        $lead->upgrade_amount           = $request->upgrade_amount;
        $lead->complete_date            = $request->complete_date;
        $lead->description              = $request->description;
        $lead->save();
        $leadId = $lead->id;

        if($request->is_converted == 1){
            //add data to history table also
            $leadamount = new LeadsAmountHistory;
            $leadamount->lead_id = $leadId;
            $leadamount->amount = $request->amount;
            $leadamount->updated_by = $userid;
            $leadamount->date = Carbon::now()->format('Y-m-d H:i:s');
            $leadamount->save();

            $leadstatus = new LeadsStatusHistory;
            $leadstatus->lead_id = $leadId;
            $leadstatus->status_id = $request->status_id;
            $leadstatus->updated_date = Carbon::now()->format('Y-m-d H:i:s');
            $leadstatus->updated_by = $userid;
            $leadstatus->save();
        }




        return redirect('/client/list')->with('success','Customer Created Successfully!!');
    }
    /**
     * Update Customer Information.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $userid = Auth::user()->id;
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

        //save lead data
        if($request->payment_method == 1){

            $data = array(
                'card_name'         => $request->credit_billing_card_name,
                'card_no'           => $request->credit_billing_card_number,
                'card_exp_month'    => $request->credit_billing_card_exp_month,
                'card_exp_year'     => $request->credit_billing_card_exp_year,
                'card_cvv'          => $request->credit_billing_card_cvv
            );

            $payment_method_details = serialize($data);

        }else if($request->payment_method == 2){
            $data = array(
                'routing_number'            => $request->routing_number,
                'echeck_accno'              => $request->echeck_accno,
                'echeck_cheque_no'          => $request->echeck_cheque_no,
                'echeck_transit_id'         => $request->echeck_transit_id,
                'echeck_bank_name'          => $request->echeck_bank_name,
                'echeck_bank_address'       => $request->echeck_bank_address
            );

            $payment_method_details = serialize($data);

        }else if($request->payment_method == 3){
            $data = array(
                'physical_check_bank_name'  => $request->physical_check_bank_name,
                'physical_check_cheque_no'  => $request->physical_check_cheque_no
            );

            $payment_method_details = serialize($data);

        }else if($request->payment_method == 4){
            $data = array(
                'interac_email_id'  => $request->interac_email_id
            );

            $payment_method_details = serialize($data);

        }else if($request->payment_method == 5){
            $data = array(
                'zille_email_id'  => $request->zille_email_id
            );

            $payment_method_details = serialize($data);

        }else if($request->payment_method == 6){
            $data = array(
                'money_order'  => $request->money_order,
                'money_order_address'  => $request->money_order_address
            );

            $payment_method_details = serialize($data);

        }else if($request->payment_method == 7){
            $data = array(
                'cashier_cheque_no'  => $request->cashier_cheque_no,
                'cashier_cheque_address'  => $request->cashier_cheque_address
            );

            $payment_method_details = serialize($data);

        }else if($request->payment_method == 8){
            $data = array(
                'pre_card_name'         => $request->prepaid_billing_card_name,
                'pre_card_no'           => $request->prepaid_billing_card_number,
                'pre_card_exp_month'    => $request->prepaid_billing_card_exp_month,
                'pre_card_exp_year'     => $request->prepaid_billing_card_exp_year,
                'pre_card_cvv'          => $request->prepaid_billing_card_cvv
            );

            $payment_method_details = serialize($data);
        }

        $lead = Leads::where('customer_id',$id)->first();
        $lead_id = $lead->id;
        $lead_status_id = $lead->status_id;
        //dd($lead);
        if($request->is_edit_converted == 1){
            $request->reason_unconverted    = NULL;
            $request->brief_unconverted     = NULL;
        }else{
            $request->amount = NULL;
            $request->agent_id = NULL;
            $request->company_name = NULL;
            $request->payment_type = NULL;
            $request->membership_plan = NULL;
            $request->payment_method = NULL;
            $payment_method_details = NULL;
            $request->is_upgrade_edit = NULL;
            $request->computer_pass = NULL;
            $request->no_of_devices = NULL;
            $request->converted_date = NULL;
            $request->status_id = NULL;
            $request->timezone_id = NULL;
            $request->type_of_devices = NULL;
            $request->received_amount = NULL;
            $request->supervisor_id = NULL;
            $request->upgrade_amount = NULL;
            $request->complete_date = NULL;
            $request->description = NULL;
        }

        $lead->is_converted             = $request->is_edit_converted;
        $lead->converted_date           = $request->converted_date;
        $lead->amount                   = $request->amount;
        $lead->sales_agent_id           = $request->agent_id;
        $lead->reason_unconverted       = $request->reason_unconverted;
        $lead->brief_unconverted        = $request->brief_unconverted;
        $lead->status_id                = $request->status_id;
        $lead->timezone                 = $request->timezone_id;
        $lead->company_name_id          = $request->company_name;
        $lead->payment_type             = $request->payment_type;
        $lead->payment_method_id        = $request->payment_method;
        $lead->membership_plan_id       = $request->membership_plan;
        $lead->customer_computer_pass   = $request->computer_pass;
        $lead->no_of_devices            = $request->no_of_devices;
        $lead->type_of_devices          = $request->type_of_devices;
        $lead->amount_received          = $request->received_amount;
        $lead->payment_method_details   = $payment_method_details;
        $lead->is_upgrade               = $request->is_upgrade_edit;
        $lead->supervisor_id            = $request->supervisor_id;
        $lead->upgrade_amount           = $request->upgrade_amount;
        $lead->complete_date            = $request->complete_date;
        $lead->description              = $request->description;
        $lead->save();

        //update amount history table
        if($request->is_edit_converted == 1){
            //add data to history table also
            $leadamount = new LeadsAmountHistory;
            $leadamount->lead_id = $lead_id;
            $leadamount->amount = $request->amount;
            $leadamount->updated_by = $userid;
            $leadamount->date = Carbon::now()->format('Y-m-d H:i:s');
            $leadamount->save();
        }

        if($lead_status_id != $request->status_id){
            $leadstatus = new LeadsStatusHistory;
            $leadstatus->lead_id = $lead_id;
            $leadstatus->status_id = $request->status_id;
            $leadstatus->updated_date = Carbon::now()->format('Y-m-d H:i:s');
            $leadstatus->updated_by = $userid;
            $leadstatus->save();
        }

        return redirect('/client/list')->with('success','Customer Updated Successfully!!');
    }


}
