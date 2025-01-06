<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Store::create([
            'name' => 'Jayusman Store 1',
            'location' => 'Cilaku, Cianjur',
        ]);

        Store::create([
            'name' => 'Jayusman Store 2',
            'location' => 'Warung Kondang, Cianjur',
        ]);

        Store::create([
            'name' => 'Jayusman Store 3',
            'location' => 'Cipanas, Cianjur',
        ]);

        Store::create([
            'name' => 'Jayusman Store 4',
            'location' => 'Ciranjang, Cianjur',
        ]);

        Store::create([
            'name' => 'Jayusman Store 5',
            'location' => 'Cibeber, Cianjur',
        ]);
    }
}
