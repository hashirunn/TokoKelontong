<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreStaffController extends Controller
{
    //
    public function index()
    {
        return view('staff.index'); 
    }

    public function create()
    {
        return view('staff.create'); 
    }
}
