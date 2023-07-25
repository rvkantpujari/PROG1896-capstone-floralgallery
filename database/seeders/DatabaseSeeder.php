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
                'email_verified_at' => null, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2, 'first_name' => 'Emily', 'last_name' => 'Davis', 'store_name' => 'Petal Paradise',
                'email' => 'emilydavis@petalparadise.com', 'password' => Hash::make('Seller@1234'), 'status' => 'verified',
                'email_verified_at' => date('Y-m-d H:i:s'), 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 3, 'first_name' => 'Michael', 'last_name' => 'Johnson', 'store_name' => 'Fragrant Blooms',
                'email' => 'michaeljohnson@fragrantblooms.com', 'password' => Hash::make('Seller@1234'), 'status' => 'pending',
                'email_verified_at' => null, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4, 'first_name' => 'Sarah', 'last_name' => 'Thompson', 'store_name' => 'Garden of Roses',
                'email' => 'sarahthompson@gardenofroses.com', 'password' => Hash::make('Seller@1234'), 'status' => 'verified',
                'email_verified_at' => date('Y-m-d H:i:s'), 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);

        DB::table('provinces')->insert([
            ['id' => 1, 'province' => 'Alberta', 'province_alpha_code' => 'AB', 'pst' => null, 'gst' => 5, 'hst' => null, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 2, 'province' => 'British Columbia', 'province_alpha_code' => 'BC', 'pst' => 7, 'gst' => 5, 'hst' => null, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 3, 'province' => 'Manitoba', 'province_alpha_code' => 'MB', 'pst' => 7, 'gst' => 5, 'hst' => null, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 4, 'province' => 'New Brunswick', 'province_alpha_code' => 'NB', 'pst' => null, 'gst' => null, 'hst' => 15, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 5, 'province' => 'Newfoundland and Labrador', 'province_alpha_code' => 'NL', 'pst' => null, 'gst' => null, 'hst' => 15, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 6, 'province' => 'Northwest Territories', 'province_alpha_code' => 'NT', 'pst' => null, 'gst' => 5, 'hst' => null, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 7, 'province' => 'Nova Scotia', 'province_alpha_code' => 'NS', 'pst' => null, 'gst' => null, 'hst' => 15, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 8, 'province' => 'Nunavut', 'province_alpha_code' => 'NU', 'pst' => null, 'gst' => 5, 'hst' => null, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 9, 'province' => 'Ontario', 'province_alpha_code' => 'ON', 'pst' => null, 'gst' => null, 'hst' => 13, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 10, 'province' => 'Prince Edward Island', 'province_alpha_code' => 'PE', 'pst' => null, 'gst' => null, 'hst' => 15, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 11, 'province' => 'Quebec', 'province_alpha_code' => 'QC', 'pst' => 9.975, 'gst' => 5, 'hst' => null, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 12, 'province' => 'Saskatchewan', 'province_alpha_code' => 'SK', 'pst' => 6, 'gst' => 5, 'hst' => null, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 13, 'province' => 'Yukon', 'province_alpha_code' => 'YT', 'pst' => null, 'gst' => 5, 'hst' => null, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ]);

        DB::table('product_categories')->insert([
            ['id' => 1, 'category' => 'Flowers', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 2, 'category' => 'Bouquets', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 3, 'category' => 'Pots and Containers', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 4, 'category' => 'Gardening Tools', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]
        ]);
    }
}
