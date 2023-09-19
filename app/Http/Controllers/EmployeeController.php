<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Company;
use Illuminate\Http\Request;

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
        return request()->all();
        // request()->validate([
        //     'name' => ['required', 'max:255'],
        //     'email' => ['required', 'email', 'max:255'],
        //     'message' => ['required']
        // ]);
    }
}
