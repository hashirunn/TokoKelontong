<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.dashboard');  
    }

    public function manageUsers()
    {
        $users = User::all();  
        return view('admin.manage-users', compact('users')); 
    }

 
    public function manageRoles()
    {
        $roles = Role::all();  
        return view('admin.manage-roles', compact('roles'));
    }

    public function settings()
    {
        return view('admin.settings');
    }
}
