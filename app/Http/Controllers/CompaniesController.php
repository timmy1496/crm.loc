<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Http\Interfaces\Pagination;

class CompaniesController extends Controller implements Pagination
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $companies = DB::table('companies')->paginate(self::PAGES_PAGINATION);

        return view('companies.index', ['companies' => $companies]);
    }

    public function create()
    {
        return view('companies.create');
    }


    public function store(Request $request)
    {
        /*
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('companies', 'public');

            $company = new Company();
            $company->logo = $path;
            $company->save();
        }

        Company::create(
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'website' => 'required',
                'logo' => 'required',
            ])
        );
         */

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'website' => 'required',
            'logo' => 'required',
        ]);

        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->website = $request->website;
        $company->logo = $request->file('logo')->store('companies', 'public');
        $company->save();

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

    public function update(Request $request, $company)
    {

        $company = Company::find($company);
        $company->name = Input::get('name');
        $company->email = Input::get('email');
        $company->phone = Input::get('phone');
        $company->website = Input::get('website');
        $company->logo = $request->file('logo') ? $request->file('logo')->store('companies', 'public') : $company->logo;
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
