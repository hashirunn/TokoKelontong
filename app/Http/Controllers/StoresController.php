<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoresController extends Controller
{
    //
    public function index()
    {
        $data['stores'] = Store::paginate(10);
        return view('stores.index', $data); 
    }
}
