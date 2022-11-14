<?php

namespace Database\Seeders;

use App\Models\UsersModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminDummyLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // UsersModel::truncate();
        $result =  UsersModel::where('email', 'info@admin.com')->first();

        if (!$result) {
            $dummy_entry =  array(
                // 'id' => '1',
                'name'  => 'Sajid Jalal',
                'email' => 'info@admin.com',
                'email_verified_at' => now(),
                'password' => Hash::make("Admin@1212"),
                'mobile' => 9999999999,
                'remember_token' => NULL,
                'created_at' => now(),
                'updated_at' => NULL,
                'status' => 1
            );
            UsersModel::create($dummy_entry);
        }
    }
}
