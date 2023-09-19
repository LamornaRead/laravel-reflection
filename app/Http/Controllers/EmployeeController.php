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
        return view('create-employee', [
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
            'email' => ['required', 'email', 'max:255'],
            'phone_number' => ['required', 'numeric'],
        ]);
        
        Employee::create($attributes);

        session()->flash('success', 'File Added');

        return redirect('/create-employee');
    }
}
