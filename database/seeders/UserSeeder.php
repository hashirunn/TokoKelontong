<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([// 1
            'name' => 'Admin',
            'email' => 'admin@jayusStore.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jayusman'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('admin');


        User::create([// 2
            'name' => 'Jayusaman',
            'email' => 'owner@jayusStore.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jayusman'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('owner');


        User::create([// 3
            'name' => 'Manager 1',
            'email' => 'manager1@jayusStore.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jayusman'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('manager');
        User::create([// 4
            'name' => 'Manager 2',
            'email' => 'manager2@jayusStore.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jayusman'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('manager');
        User::create([// 5
            'name' => 'Manager 3',
            'email' => 'manager3@jayusStore.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jayusman'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('manager');
        User::create([// 6
            'name' => 'Manager 4',
            'email' => 'manager4@jayusStore.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jayusman'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('manager');
        User::create([// 7
            'name' => 'Manager 5',
            'email' => 'manager5@jayusStore.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jayusman'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('manager');


        User::create([// 8
            'name' => 'Supervisor 1',
            'email' => 'supervisor1@jayusStore.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jayusman'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('supervisor');
        User::create([// 9
            'name' => 'Supervisor 2',
            'email' => 'supervisor2@jayusStore.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jayusman'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('supervisor');
        User::create([// 10
            'name' => 'Supervisor 3',
            'email' => 'supervisor3@jayusStore.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jayusman'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('supervisor');
        User::create([// 11
            'name' => 'Supervisor 4',
            'email' => 'supervisor4@jayusStore.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jayusman'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('supervisor');
        User::create([// 12
            'name' => 'Supervisor 5',
            'email' => 'supervisor5@jayusStore.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jayusman'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('supervisor');


        User::create([// 13
            'name' => 'Cashier 1',
            'email' => 'cashier1@jayusStore.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jayusman'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('cashier');
        User::create([// 14
            'name' => 'Cashier 2',
            'email' => 'cashier2@jayusStore.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jayusman'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('cashier');
        User::create([// 15
            'name' => 'Cashier 3',
            'email' => 'cashier3@jayusStore.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jayusman'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('cashier');
        User::create([// 16
            'name' => 'Cashier 4',
            'email' => 'cashier4@jayusStore.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jayusman'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('cashier');
        User::create([// 17
            'name' => 'Cashier 5',
            'email' => 'cashier5@jayusStore.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jayusman'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('cashier');


        User::create([// 18
            'name' => 'Warehouse 1',
            'email' => 'warehouse1@jayusStore.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jayusman'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('warehouse_staff');
        User::create([// 19
            'name' => 'Warehouse 2',
            'email' => 'warehouse2@jayusStore.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jayusman'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('warehouse_staff');
        User::create([// 20
            'name' => 'Warehouse 3',
            'email' => 'warehouse3@jayusStore.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jayusman'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('warehouse_staff');
        User::create([// 21
            'name' => 'Warehouse 4',
            'email' => 'warehouse4@jayusStore.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jayusman'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('warehouse_staff');
        User::create([// 22
            'name' => 'Warehouse 5',
            'email' => 'warehouse5@jayusStore.com',
            'email_verified_at' => now(),
            'password' => Hash::make('jayusman'),
            'created_at' => now(),
            'updated_at' => now(),
        ])->assignRole('warehouse_staff');
    }
}
