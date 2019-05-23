<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = DB::table('employees')->paginate(5);

        return view('employees.index',['employees' => $employees]);

        //return response()->json($employees);
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        Employee::create(
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'company_id' => 'required',
            ])
        );

        return redirect('/employees');
    }

    public function show($employees)
    {
        $employees = Employee::findOrFail($employees);

        return view('employees.show', ['employees' => $employees]);
    }

    public function edit($employees)
    {
        $employees = Employee::findOrFail($employees);

        return view('employees.edit', ['employees' => $employees]);
    }

    public function update($employees)
    {
        $employees = Employee::find($employees);
        $employees->first_name = Input::get('first_name');
        $employees->last_name  = Input::get('last_name');
        $employees->email      = Input::get('email');
        $employees->phone      = Input::get('phone');
        $employees->company_id = Input::get('company_id');
        $employees->save();


        return redirect('employees');
    }

    public function destroy($employees)
    {
        $employees = Employee::find($employees);
        $employees->delete();

        return redirect('employees');
    }

}
