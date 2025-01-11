<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\StoreStaff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreStaffController extends Controller
{
    //
    public function index()
    {
            
            $data['storestaffs'] = StoreStaff::where('store_id', 'user_id')->paginate(10);
            return view('storestaff.index', $data);
    }

    public function create()
    {
        return view('staff.create'); 
    }
}
