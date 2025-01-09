<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    //
    protected $fillable = ['transaction_id','item_id','quantity','price_at'];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}

