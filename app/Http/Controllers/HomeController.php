<?php

use app\Http\Controllers;
use Illuminate\Http\Request;
use app\Models;

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user/home');
    }
}
