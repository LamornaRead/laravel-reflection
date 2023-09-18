<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Company;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->guest()) {
            abort(403);
        }
        return view('home');
    }


    
    public function allFiles() {
        if(auth()->guest()) {
            abort(403);
        }
        return view('admin' , ['companies' => Company::orderBy('name')->paginate(10)]);
    }

    public function edit(Company $company) {
        if(auth()->guest()) {
            abort(403);
        }
        return view('edit-files', ['company' => $company]);
    }
}
