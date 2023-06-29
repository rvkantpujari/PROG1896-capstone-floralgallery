<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('admins')->insert([
            'id' => 1, 'first_name' => 'Ravi Kant', 'last_name' => 'Pujari', 
            'email' => 'rvkantpujari@gmail.com', 'password' => Hash::make('admin'),
            'status' => 'approved',
            'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('sellers')->insert([
            [
                'id' => 1, 'first_name' => 'John', 'last_name' => 'Smith', 'store_name' => 'Blossom Florals',
                'email' => 'johnsmith@blossomflorals.com', 'password' => Hash::make('Seller@1234'), 'status' => 'pending',
                'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2, 'first_name' => 'Emily', 'last_name' => 'Davis', 'store_name' => 'Petal Paradise',
                'email' => 'emilydavis@petalparadise.com', 'password' => Hash::make('Seller@1234'), 'status' => 'verified',
                'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 3, 'first_name' => 'Michael', 'last_name' => 'Johnson', 'store_name' => 'Fragrant Blooms',
                'email' => 'michaeljohnson@fragrantblooms.com', 'password' => Hash::make('Seller@1234'), 'status' => 'pending',
                'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4, 'first_name' => 'Sarah', 'last_name' => 'Thompson', 'store_name' => 'Garden of Roses',
                'email' => 'sarahthompson@gardenofroses.com', 'password' => Hash::make('Seller@1234'), 'status' => 'verified',
                'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
