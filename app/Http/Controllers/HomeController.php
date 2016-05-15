<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Variable;
use Auth;

class HomeController extends Controller
{
    protected $user;
    protected $variable;

    public function __construct(User $user, Variable $variable)
    {
        $this->user = $user;
        $this->variable = $variable;
        $this->middleware('auth');
    }

    public function index()
    {
        

        return view('home');
    }
}
