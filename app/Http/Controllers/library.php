<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class library extends Controller
{
    public function index()
    {
        return view('library');
    }
}
