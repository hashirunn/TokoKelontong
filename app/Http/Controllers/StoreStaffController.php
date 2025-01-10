<?php

namespace App\Http\Controllers;

use App\Models\StoreStaff;
use Illuminate\Http\Request;

class StoreStaffController extends Controller
{
    //
    public function index()
    {
        $data['staffs'] = StoreStaff::paginate(10);
        return view('staff.index', $data); 
    }
}
