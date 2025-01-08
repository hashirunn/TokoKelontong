<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CashierController extends Controller
{
    public function index()
    {
        return view('cashier.dashboard'); 
    }

    public function transaction()
    {
        return view('cashier.transaction'); 
    }

  
    public function history()
    {
        return view('cashier.history');  
    }
}
