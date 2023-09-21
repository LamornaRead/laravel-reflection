<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
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

    public function show()
    {
        if(auth()->guest()) {
            abort(403);
        }
        return view('admin/all', [
            'companies' => Company::orderBy('name')->paginate(10)
        ]);
    }
}
