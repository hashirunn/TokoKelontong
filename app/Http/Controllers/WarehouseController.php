<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    //
    public function index($id){
        $data['warehouses'] = Stock::where('store_id', '=',$id)->paginate(10);
        return view('warehouse.index', $data);
    }
}
