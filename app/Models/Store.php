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

    public function manager()
    {
        return $this->hasOneThrough(
            User::class,
            storestaff::class,
            'branch_id',
            'id',
            'id',
            'user_id'
        )->whereHas('roles', function ($query) {
            $query->where('name', 'Manager');
        });
    }

    public function stores()
    {
        return $this->belongsToMany(Store::class, 'store_user', 'user_id', 'store_id');
    }

    public function storestaff()
    {
        return $this->hasMany(StoreStaff::class, 'store_id', 'id')->with('user.roles');
    }

    public function getManagerAttribute()
    {
        return $this->manager()->first();
    }
}
