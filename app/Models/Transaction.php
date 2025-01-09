<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function transactionDetails(){
        return $this->hasMany(TransactionDetail::class)->with('product');
    }
    
    public function totalPrice()
    {
        $totalPrice = 0;

        foreach ($this->transactionDetails as $detail) {
            $totalPrice += $detail->quantity * $detail->price_at;
        }

        return $totalPrice;
    }
}
