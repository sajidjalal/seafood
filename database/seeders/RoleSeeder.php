<?php

namespace Database\Seeders;

use App\Models\RoleModel;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoleModel::truncate();
        RoleModel::insert([
            array(
                'id'    => '1',
                'name'  => 'Admin',
                'created_at' => now(),
                'updated_at' => NULL,
                'status' => 1
            ),
            array(
                'id'    => '2',
                'name'  => 'Customer',
                'created_at' => now(),
                'updated_at' => NULL,
                'status' => 1
            ),
        ]);
    }
}
