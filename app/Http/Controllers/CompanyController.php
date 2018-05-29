<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        return view('company.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            array(
                'company_name'        => $request->company_name
            ),
            array(
                'company_name'        => 'required'                
            )
        );

        if ($validator->fails())
        {
            return redirect('/company/new')->withErrors($validator)->withInput();
        }

        $company = new Company;
        $company->name = $request->company_name;
        $company->save();

        return redirect('company/list')->with('success','Company Created Successfully!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::where('id',$id)->first();
        return view('company.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            array(
                'company_name'        => $request->company_name
            ),
            array(
                'company_name'        => 'required'                
            )
        );

        if ($validator->fails())
        {
            return redirect('/company/edit/'.$id)->withErrors($validator)->withInput();
        }

        $company = Company::find($id);
        $company->name = $request->company_name;
        $company->save();

        return redirect('company/list')->with('success','Company Updated Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();

        return redirect('company/list')->with('success','Company Deleted Successfully!!');
    }
}
