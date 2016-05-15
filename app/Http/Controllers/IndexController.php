<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function login(){
        return view('index');
    }
}
