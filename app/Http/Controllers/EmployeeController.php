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
}
