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
            ['id' => 1, 'category' => 'Flowers', 'Discover the epitome of natural beauty with our exquisite selection of fresh flowers. From the timeless elegance of roses to the vibrant allure of lilies, our diverse range of blooms will enchant and delight for every occasion.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 2, 'category' => 'Bouquets', 'Elevate your gifting experience with our thoughtfully crafted bouquets. Handpicked and artfully arranged, each bouquet is a symphony of colors and scents, designed to convey heartfelt emotions and add a touch of joy to any recipient\'s day.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 3, 'category' => 'Pots and Containers', 'Bring style and functionality together with our exquisite pots and containers. Elevate the presentation of your plants and flowers with our versatile selection, from elegant ceramic pots to practical hanging baskets, adding a touch of elegance to your indoor and outdoor spaces.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 4, 'category' => 'Gardening Tools', 'Embark on a journey of nurturing and creativity with our premium gardening tools. From sturdy shovels to precise pruners, our range of high-quality tools is designed to make gardening a joyous and rewarding experience for enthusiasts of all levels.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]
        ]);
    }
}
