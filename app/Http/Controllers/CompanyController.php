<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\CompanyRequest;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies =  Company::paginate(10);

        return view('company.index')
            ->with('companies', $companies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompanyRequest $request)
    {
        $company = new Company;

        $company->name = $request->input('name');
        $company->email = $request->input('email');
        $company->website = $request->input('website');

        $logo = $request->file('logo');
        $company->storeLogo($logo);

        $company->save();

        return redirect('companies')->with('status', "Company $company->name added!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('company.edit')
            ->with('company', $company);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompanyRequest $request, Company $company)
    {
        $company->name = $request->input('name');
        $company->email = $request->input('email');
        $company->website = $request->input('website');

        $logo = $request->file('logo');

        $company->storeLogo($logo);

        $company->save();

        return redirect('companies')->with('status', "Company $company->name updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();

        return redirect('companies')->with('status', "Company $company->name deleted!");
    }
}
