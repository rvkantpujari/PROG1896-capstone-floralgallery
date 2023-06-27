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
    }
}
