<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    public function index()
    {
        return view('supervisor.dashboard');
    }

    public function manageTasks()
    {
        return view('supervisor.manage-tasks');  
    }

    public function dailyReport()
    {
        return view('supervisor.daily-report');  
    }
}
