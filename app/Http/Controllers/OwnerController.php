<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function warehouse()
    {
        return view('warehouse.index'); 
    }

    public function stores()
    {
        return view('stores.index');  
    }
}
