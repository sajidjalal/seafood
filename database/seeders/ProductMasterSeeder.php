<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_master')->truncate();
        DB::table('product_master')->insert([

            array(
                "id" => 1,
                "name" => "FROZEN FINFISH",
                "status" => 0,
                "created_by" => 0,
                "updated_by" => 0,
                "created_at" => now(),
                "updated_at" => now(),
                "deleted_at" => now(),
            ),
            array(
                "id" => 2,
                "name" => "FROZEN SHRIMPS",
                "status" => 0,
                "created_by" => 0,
                "updated_by" => 0,
                "created_at" => now(),
                "updated_at" => now(),
                "deleted_at" => now(),
            ),
            array(
                "id" => 3,
                "name" => "FROZEN SHELLFISH & CEPHALOPOD",
                "status" => 0,
                "created_by" => 0,
                "updated_by" => 0,
                "created_at" => now(),
                "updated_at" => now(),
                "deleted_at" => now(),
            ),
            array(
                "id" => 4,
                "name" => "Crustaceans",
                "status" => 1,
                "created_by" => 0,
                "updated_by" => 0,
                "created_at" => now(),
                "updated_at" => now(),
                "deleted_at" => NULL,
            ),
            array(
                "id" => 5,
                "name" => "Cephalopods",
                "status" => 0,
                "created_by" => 0,
                "updated_by" => 0,
                "created_at" => now(),
                "updated_at" => now(),
                "deleted_at" => NULL,
            ),
            array(
                "id" => 6,
                "name" => "Tropical Fishes",
                "status" => 0,
                "created_by" => 0,
                "updated_by" => 0,
                "created_at" => now(),
                "updated_at" => now(),
                "deleted_at" => NULL,
            ),
            array(
                "id" => 7,
                "name" => "Cold Water Fishes",
                "status" => 0,
                "created_by" => 0,
                "updated_by" => 0,
                "created_at" => now(),
                "updated_at" => now(),
                "deleted_at" => NULL,
            ),
            array(
                "id" => 8,
                "name" => "Specialty Products",
                "status" => 0,
                "created_by" => 0,
                "updated_by" => 0,
                "created_at" => now(),
                "updated_at" => now(),
                "deleted_at" => NULL,
            ),

        ]);
    }
}
