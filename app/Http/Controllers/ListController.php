<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Auth;
use App\Models\Document;
use Validator;
use Carbon\Carbon;

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
    public function edit($id)
    {
        $details = User::where('id',$id)->first();
        $documents = Document::where('user_id',$id)->get();

        return view('user.edit',compact('details','documents'));
    }
    /**
     * Save User Details.
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $today = Carbon::now()->format('Y-m-d H:i:s');
        $validator = Validator::make(
            array(
                'first_name'        => $request->first_name,
                'last_name'         => $request->last_name,
                'user_email'        => $request->user_email,
                'password'          => $request->password,
                'confirm_password'  => $request->confirm_password,
            ),
            array(
                'first_name'        => 'required',                    
                'last_name'         => 'required',                    
                'user_email'        => 'required',                    
                'password'          => 'required',                    
                'confirm_password'  => 'required|confirmed'                 
            )
        );

        if ($validator->fails())
        {
            return redirect('/user/new')->withErrors($validator)->withInput();
        }
        
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
        $user->date_of_joining      = $today;
        $user->agent_id             = $request->agent_id;
        $user->ctc                  = $request->ctc;
        $user->travel_allowance     = $request->travel_allowance;
        $user->allowance            = $request->allowance;
        $user->cab_service          = $request->cab_service;
        $user->type                 = $request->type;
        $user->department           = $request->department;
        $user->created_by           = $userid;
        $user->save();
        $lastInsertId = $user->id;

        //save user documents in document table
        if($request->hasfile('attachment')){
            $files = $request->file('attachment');
            $file_count = count($files);
            $uploadcount = 0;
            foreach($files as $file) {
                $destinationPath = public_path('/documents/'.$lastInsertId);
                $filename = $file->getClientOriginalName();
                $upload_success = $file->move($destinationPath, $filename);
                $uploadcount ++;

                $doc = new Document;
                $doc->user_id = $lastInsertId;
                $doc->file_name = $filename;
                $doc->save();
            }
        }

        
        return redirect('user/list')->with('success','User Created Successfully!!');
        
    }
    /**
     * Update User Details.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validator = Validator::make(
            array(
                'first_name'        => $request->first_name,
                'last_name'         => $request->last_name,
                'user_email'        => $request->user_email,
            ),
            array(
                'first_name'        => 'required',           
                'last_name'         => 'required',          
                'user_email'        => 'required', 
            )
        );

        if ($validator->fails())
        {
            return redirect('/user/edit/'.$id)->withErrors($validator)->withInput();
        }

        $user = User::where('id',$id)->first();
        $user->name                 = $request->first_name.' '.$request->last_name;
        $user->email                = $request->user_email;
        if($request->password != ''){
            $user->password         = bcrypt($request->password);
        }
        
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
        $user->save();

        if($request->hasfile('attachment')){
            $files = $request->file('attachment');
            $file_count = count($files);
            $uploadcount = 0;
            foreach($files as $file) {
                $destinationPath = public_path('/documents/'.$id);
                $filename = $file->getClientOriginalName();
                $upload_success = $file->move($destinationPath, $filename);
                $uploadcount ++;

                $doc = new Document;
                $doc->user_id = $id;
                $doc->file_name = $filename;
                $doc->save();
            }
        }

        return redirect('user/list')->with('success','User Updated Successfully!!');
    }
    /**
     * Delete User Details.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('user/list')->with('success','User Deleted Successfully!!');
    }/**
     * Remove User Document.
     *
     * @return \Illuminate\Http\Response
     */
    public function document($id)
    {
        $doc = Document::find($id);
        $doc->delete();

        return Redirect::back()->with('success', 'Document Deleted Successfully!!');
    }
}
