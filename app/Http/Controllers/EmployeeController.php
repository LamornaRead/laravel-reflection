<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{
    //
    public function create() {
        return view('employee/create', [
            'employees' => Employee::all(),
            'companies' => Company::all()
        ]);
    }

    public function store()
    {
        //send message
        // return request()->all();
        $attributes = request()->validate([
            'first_name' => ['required', 'min:3', 'max:255'],
            'last_name' => ['required', 'min:3', 'max:255'],
            'company_id' => ['required', Rule::exists('companies', 'id')],
            'email' => ['required', 'email', 'max:255',Rule::unique('employees', 'email')],
            'phone_number' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10', Rule::unique('employees', 'phone_number')],
        ]);
        
        Employee::create($attributes);

        session()->flash('success', 'File Added');

        return redirect('/employee/create');
    }

    public function edit(Employee $employee, Company $company) 
    {
        return view('employee/edit', [
            'employee' => $employee,
            'company' => $company,
            'companies' => Company::all()
       ]);
    }

    public function update(Employee $employee) 
    {
        //  ddd(request()->all());
        //  return request()->all();
        $attributes = request()->validate([
            'first_name' => ['required', 'min:3', 'max:255'],
            'last_name' => ['required', 'min:3', 'max:255'],
            'company_id' => ['required', Rule::exists('companies', 'id')],
            'email' => ['required', 'email', 'max:255', Rule::unique('employees', 'email')->ignore($employee->id)],
            'phone_number' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10', Rule::unique('employees', 'phone_number')->ignore($employee->id)],
        ]);
        


        $employee->update($attributes);

        return back()->with('success', 'File Updated');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        // return back()->with('success', 'File deleted');

        session()->flash('success', 'File Deleted');

        return redirect('/admin/all-employees');
    }
}
