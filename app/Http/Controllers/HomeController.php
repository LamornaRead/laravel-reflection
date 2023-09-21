<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('landing');
    }


    //send a message to the buisness
    public function store()
    {
        // return request()->all();

        $attributes = request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'comment' => ['required']
        ]);

        Message::create($attributes);

        session()->flash('success', 'Message Success');

        return redirect('/');

        // dd('success validation succeeded');
    }
}
