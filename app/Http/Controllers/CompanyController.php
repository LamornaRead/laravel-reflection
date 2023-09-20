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
            'companies' => Company::orderBy('name')->paginate(8)
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

        // $path = request()->file('image')->store('thumbnails');
        // return 'done' . $path;
        // ddd(request()->file('image'));
        // return request()->all();

        $attributes = request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'website' => ['required', 'url'],
            'image' => ['required', 'image', 'dimensions:max_width=100,max_height=100']

        ]);

        $attributes['image'] = request()->file('image')->store('thumbnails');

        Company::create($attributes);

        session()->flash('success', 'File Added');

        return redirect('/create-company');
    }

    public function edit(Company $company) {
        return view('edit-company', [
            'company' => $company,
       ]);
    }
}
