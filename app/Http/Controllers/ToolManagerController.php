<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class toolManagerController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

// ..............tool manager index..........................
    public function index()
    {
        return view('tools.toolmanager.index');
    }
}
