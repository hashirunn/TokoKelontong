<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        return view('owner.dashboard'); 
    }

   
    public function reports()
    {
        return view('owner.reports'); 
    }

    public function branches()
    {
        return view('owner.branches');  
    }
}
