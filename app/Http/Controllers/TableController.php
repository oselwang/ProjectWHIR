<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Variable;
use Excel;

class TableController extends Controller
{
    protected $variable;
    protected $user;