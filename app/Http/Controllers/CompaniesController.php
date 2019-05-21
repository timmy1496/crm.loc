<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Illuminate\Support\Facades\Input;

class CompaniesController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        return view('companies.index', ['companies' => $companies]);
    }

    public function create()
    {
        return view('companies.create');
    }


    public function store(Request $request)
    {
        Company::create(
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'website' => 'required',
                'logo' => 'required',
            ])
        );

        return redirect('/companies');
    }

    public function show($company)
    {
        $company = Company::findOrFail($company);

        return view('companies.show', ['company' => $company]);
    }

    public function edit($company)
    {
        $company = Company::findOrFail($company);

        return view('companies.edit', ['company' => $company]);
    }

    public function update($company)
    {
        $company = Company::find($company);
        $company->name    = Input::get('name');
        $company->email   = Input::get('email');
        $company->phone   = Input::get('phone');
        $company->website = Input::get('website');
        $company->logo    = Input::get('logo');
        $company->save();


        return redirect('companies');
    }


    public function destroy($company)
    {
        $company = Company::find($company);
        $company->delete();

        return redirect('companies');

    }
}
