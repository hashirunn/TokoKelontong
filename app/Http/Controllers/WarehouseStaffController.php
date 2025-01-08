<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WarehouseStaffController extends Controller
{
    public function index()
    {
        return view('warehouse.dashboard'); 
    }

  
    public function receiveItems()
    {
        return view('warehouse.receive-items');  
    }

    public function shipItems()
    {
        return view('warehouse.ship-items');  
    }
}
