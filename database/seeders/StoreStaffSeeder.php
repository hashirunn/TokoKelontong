<?php

namespace Database\Seeders;

use App\Models\StoreStaff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StoreStaff::create([
            'store_id' => '1',
            'user_id' => '3'
        ]);
        StoreStaff::create([
            'store_id' => '1',
            'user_id' => '8'
        ]);
        StoreStaff::create([
            'store_id' => '1',
            'user_id' => '13'
        ]);
        StoreStaff::create([
            'store_id' => '1',
            'user_id' => '18'
        ]);


        StoreStaff::create([
            'store_id' => '2',
            'user_id' => '4'
        ]);
        StoreStaff::create([
            'store_id' => '2',
            'user_id' => '9'
        ]);
        StoreStaff::create([
            'store_id' => '2',
            'user_id' => '14'
        ]);
        StoreStaff::create([
            'store_id' => '2',
            'user_id' => '19'
        ]);


        StoreStaff::create([
            'store_id' => '3',
            'user_id' => '5'
        ]);
        StoreStaff::create([
            'store_id' => '3',
            'user_id' => '10'
        ]);
        StoreStaff::create([
            'store_id' => '3',
            'user_id' => '15'
        ]);
        StoreStaff::create([
            'store_id' => '3',
            'user_id' => '20'
        ]);


        StoreStaff::create([
            'store_id' => '4',
            'user_id' => '6'
        ]);
        StoreStaff::create([
            'store_id' => '4',
            'user_id' => '11'
        ]);
        StoreStaff::create([
            'store_id' => '4',
            'user_id' => '16'
        ]);
        StoreStaff::create([
            'store_id' => '4',
            'user_id' => '21'
        ]);


        StoreStaff::create([
            'store_id' => '5',
            'user_id' => '7'
        ]);
        StoreStaff::create([
            'store_id' => '5',
            'user_id' => '12'
        ]);
        StoreStaff::create([
            'store_id' => '5',
            'user_id' => '17'
        ]);
        StoreStaff::create([
            'store_id' => '5',
            'user_id' => '22'
        ]);
    }
}
