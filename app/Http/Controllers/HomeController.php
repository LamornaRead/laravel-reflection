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

    public function createCompany() {
        if(auth()->guest()) {
            abort(403);
        }
        return view('create-company');
    }

    public function createEmployee() {
        if(auth()->guest()) {
            abort(403);
        }
        return view('create-employee');
    }
    public function allFiles() {
        if(auth()->guest()) {
            abort(403);
        }
        return view('admin' , ['companies' => Company::all()]);
    }

    public function editFIles() {
        if(auth()->guest()) {
            abort(403);
        }
        return view('edit-files', ['companies' => Company::all()]);
    }
}
