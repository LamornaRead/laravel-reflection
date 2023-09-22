<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        if(auth()->guest()) {
            abort(403);
        }
        return view('home', [
            'companies' => Company::orderBy('name')->paginate(10)
        ]);
    }

    public function showCompanies()
    {
        if(auth()->guest()) {
            abort(403);
        }
        return view('admin/all-companies', [
            'companies' => Company::orderBy('name')->paginate(10)
        ]);
    }
    public function showEmployees()
    {
        if(auth()->guest()) {
            abort(403);
        }
        return view('admin/all-employees', [
            'employees' => Employee::orderBy('company_id')->paginate(10)
        ]);
    }
}
