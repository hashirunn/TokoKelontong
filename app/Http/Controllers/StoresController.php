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

    public function edit($id)
    {
        $data['store'] = Store::find($id);
        return view('stores.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
        ]);

        $store = Store::find($id);
        $store->name = $request->input('name');
        $store->location = $request->input('location');
        $store->save();

        return redirect()->route('stores.index');
    }

}
