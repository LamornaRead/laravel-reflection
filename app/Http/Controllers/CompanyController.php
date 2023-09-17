<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //

    public function index()
    {
        return view('companies', [
            'companies' => Company::orderBy('name')->paginate(9)
        ]);
    }

    public function show(Company $company) {
        return view('company', [
            'company' => $company
       ]);
    }
}
