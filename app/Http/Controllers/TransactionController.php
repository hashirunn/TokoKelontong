<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetail;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //
    public function index($id){
        $data['transactiondetail'] = TransactionDetail::with('user', 'product', 'stores')->paginate(10);
        return view('transaction.index', $data);
    }

    public function print(){
        $data['transactiondetail'] = TransactionDetail::with('user', 'product', 'stores')->get();
        $pdf = Pdf::loadView('transaction.print', $data);
        return $pdf->download('TransactionDetail.pdf');
    }
}
