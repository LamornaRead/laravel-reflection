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
        return view('companies');
    }


    //send a message to the buisness
    public function store()
    {
        //send message
        // return request()->all();

        $attributes = request()->validate([
            'name' => ['required', 'max:10'],
            'email' => ['required', 'email', 'max:255'],
            'comment' => ['required']
        ]);

        Message::create($attributes);

        return redirect('/');

        // dd('success validation succeeded');
    }
}
