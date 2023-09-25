<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    //
    public function index()
    {
        if(auth()->guest()) {
            abort(403);
        }

        return view('home', [
            'companies' => Company::orderBy('name')->filter()->paginate(10)
        ]);
    }

    public function showCompanies()
    {
        if(auth()->guest()) {
            abort(403);
        }
        return view('admin/all-companies', [
            'companies' => Company::orderBy('name')->filter()->paginate(10)
        ]);
    }

    public function showEmployees()
    {
        if(auth()->guest()) {
            abort(403);
        }
        return view('admin/all-employees', [
            'employees' => Employee::orderBy('company_id')->filter()->paginate(10),
            'companies' => Company::all()
        ]);
    }

    public function editEmployees(Employee $employee, Company $company)
    {
        if(auth()->guest()) {
            abort(403);
        }
        return view('admin/edit', [
            'employee' => $employee,
            'company' => $company,
            'companies' => Company::all()
       ]);
    }

    public function updateEmployees(Employee $employee) 
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

    public function destroyEmployees(Employee $employee)
    {
        $employee->delete();

        // return back()->with('success', 'File deleted');

        session()->flash('success', 'File Deleted');

        return redirect('/admin/employees/' . $employee->company->name);
    }

    public function showEmployeesCompany(Company $company, Employee $employees) 
    {
        return view('admin/employees', [
            'companies' => Company::all(),
            'currentCompany' => $company,
            'company' => $company,
            'employees' => Employee::all()
       ]);
    }
}
