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
                "status" => 1,
                "created_by" => 0,
                "updated_by" => 0,
                "created_at" => "2022-09-14 07:43:09",
                "updated_at" => "2022-09-14 07:43:11",
                "deleted_at" => NULL,
            ),
            array(
                "id" => 2,
                "name" => "FROZEN SHRIMPS",
                "status" => 1,
                "created_by" => 0,
                "updated_by" => 0,
                "created_at" => "2022-09-14 07:43:09",
                "updated_at" => "2022-09-14 07:43:11",
                "deleted_at" => NULL,
            ),
            array(
                "id" => 3,
                "name" => "FROZEN SHELLFISH & CEPHALOPOD",
                "status" => 1,
                "created_by" => 0,
                "updated_by" => 0,
                "created_at" => "2022-09-14 07:43:09",
                "updated_at" => "2022-09-14 07:43:11",
                "deleted_at" => NULL,
            ),

        ]);
    }
}
