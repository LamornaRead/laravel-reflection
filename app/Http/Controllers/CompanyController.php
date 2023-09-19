<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //

    public function index()
    {
        if(auth()->guest()) {
            abort(403);
        }
        return view('home', [
            'companies' => Company::orderBy('name')->paginate(9)
        ]);
    }

    public function show(Company $company, Employee $employees) 
    {
        return view('company', [
            'company' => $company,
            'employees' => Employee::all()
       ]);
    }

    public function create() 
    {
        return view('create-company', [
            'companies' => Company::all()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'website' => ['required', 'url'],
            'image' => ['required', 'mimes:jpeg,png,jpg,gif']

        ]);

        Company::create($attributes);

        session()->flash('success', 'File Added');

        return redirect('/create-company');
    }

}
