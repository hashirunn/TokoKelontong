<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Store extends Model
{
    //
    protected $fillable = ['name', 'location'];

    public function staff()
    {
        return $this->hasManyThrough(
            User::class,
            StoreStaff::class,
            'store_id',
            'id',
            'id',
            'user_id'
        );

    }
    public function branchStaff()
    {
        return $this->hasMany(StoreStaff::class)->with('user.role');
    }
}
