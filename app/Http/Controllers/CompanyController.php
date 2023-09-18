<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //

    public function public()
    {
        return view('companies');
    }

    public function index()
    {
        if(auth()->guest()) {
            abort(403);
        }
        return view('home', [
            'companies' => Company::orderBy('name')->paginate(9)
        ]);
    }

    public function show(Company $company) {
        return view('company', [
            'company' => $company
       ]);
    }

    public function create() {
        return view('create-company', [
            'companies' => Company::all()
        ]);
    }

}
