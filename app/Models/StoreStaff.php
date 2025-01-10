<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoreStaff extends Model
{
    //
    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function store()
    {
        return $this->hasOne(Store::class);
    }
}
