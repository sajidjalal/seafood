<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    // php artisan db:seed --class=DatabaseSeeder
    // php artisan db:seed --class=PincodeMasterDataSeeder
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductMasterSeeder::class);
        $this->call(ProductCategoriesSeeder::class);
        $this->call(AdminDummyLoginSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(MasterStateSeeder::class);
        $this->call(MasterCitySeeder::class);
        // $this->call(PincodeMasterDataSeeder::class);
    }
}
