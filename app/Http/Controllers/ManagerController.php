<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
 
    public function index()
    {
        return view('manager.dashboard');
    }

    public function manageEmployees()
    {
       
        return view('manager.manage-employees');  
    }

    public function performance()
    {
        return view('manager.performance'); 
    }
}
