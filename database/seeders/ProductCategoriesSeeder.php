<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->truncate();
        DB::table('product_categories')->insert([

            array(
                "id" => 1,
                "product_id" => 1,
                "name" => "SILVER / WHITE POMFRET",
                "path" => "images/dummy_images.png",
                "description" => "SILVER POMFRET IWP SIZE:100/200,200/300,300/400,400/500,500/UP PACKING 10 KG.",
                "price" => "USD 6500 -16000 PER MT",
                "origin" => "INDIA (MAHARASHTRA,GOA,GUJRAT,KERALA,ANDHRAPRADESH,TAMILNADU)",
                "features" => "Port Of Loading: ANY PORT IN INDIA Payment Term : LC OR TT Delivery Time Shipment 07-10 DAY AFTER CONFIRMATION",
                "order_size" => "Packing 5,10,20,25,40,50 Kg Bag , Minimum Order Quantity20 feet container.",
                "status" => 1,
                "created_by" => 0,
                "updated_by" => 0,
                "created_at" => "2022-09-14 07:43:09",
                "updated_at" => "2022-09-14 07:43:11",
                "deleted_at" => NULL,
            ),
            array(
                "id" => 2,
                "product_id" => 2,
                "name" => "BOMBAY DUCK",
                "path" => "images/dummy_images.png",
                "description" => "BOMBAY DUCK FISH SIZE : U/5,U/7,U/10,10/20,20/30 PACKINH : 10 KG.",
                "price" => "USD 1000-2000 PER MT",
                "origin" => "INDIA (MAHARASHTRA,GOA,GUJRAT,KERALA,ANDHRAPRADESH,TAMILNADU)",
                "features" => "Port Of Loading: ANY PORT IN INDIA Payment Term : LC OR TT Delivery Time Shipment 05- 07 DAY AFTER CONFIRMATION.",
                "order_size" => "",
                "status" => 1,
                "created_by" => 0,
                "updated_by" => 0,
                "created_at" => "2022-09-14 07:43:09",
                "updated_at" => "2022-09-14 07:43:11",
                "deleted_at" => NULL,
            ),
            array(
                "id" => 3,
                "product_id" => 3,
                "name" => "LEATHER SKIN FISH",
                "path" => "images/dummy_images.png",
                "description" => "LEATHER SKIN FISH WHOLE SIZE ; 100/200,200/300,300/400,400/700 PACKING : 10 KG.",
                "price" => "USD 1000-2000 PER MT",
                "origin" => "INDIA (MAHARASHTRA,GOA,GUJRAT,KERALA,ANDHRAPRADESH,TAMILNADU)",
                "features" => "Port Of Loading: ANY PORT IN INDIA Payment Term : LC OR TT Delivery Time Shipment 05- 07 DAY AFTER CONFIRMATION.",
                "order_size" => "",
                "status" => 1,
                "created_by" => 0,
                "updated_by" => 0,
                "created_at" => "2022-09-14 07:43:09",
                "updated_at" => "2022-09-14 07:43:11",
                "deleted_at" => NULL,
            ),
            array(
                "id" => 4,
                "product_id" => 3,
                "name" => "TOP SHELL / BAIGAI",
                "path" => "images/dummy_images.png",
                "description" => "TOP SHELL / BAIGAI WHOLE SIZE : 20/30,30/50,50/80,80/120 PACKING : 2 KG / 5 KG.",
                "price" => "USD 2000-3000 PER MT",
                "origin" => "INDIA (MAHARASHTRA,GOA,GUJRAT,KERALA,ANDHRAPRADESH,TAMILNADU)",
                "features" => "Port Of Loading: ANY PORT IN INDIA Payment Term : LC OR TT Delivery Time Shipment 05-07 DAY AFTER CONFIRMATION.",
                "order_size" => "",
                "status" => 1,
                "created_by" => 0,
                "updated_by" => 0,
                "created_at" => "2022-09-14 07:43:09",
                "updated_at" => "2022-09-14 07:43:11",
                "deleted_at" => NULL,
            ),
            array(
                "id" => 5,
                "product_id" => 3,
                "name" => "QUEEN FISH",
                "path" => "images/dummy_images.png",
                "description" => "QUEEN FISH WHOLE SIZE : 1/2,2/3,3/5,5/7 KG PACKING : 20 KG.",
                "price" => "USD 1500-2500 PER MT",
                "origin" => "INDIA (MAHARASHTRA,GOA,GUJRAT,KERALA,ANDHRAPRADESH,TAMILNADU)",
                "features" => "Port Of Loading: ANY PORT IN INDIA Payment Term : LC OR TT Delivery Time Shipment 05- 07 DAY AFTER CONFIRMATION.",
                "order_size" => "",
                "status" => 1,
                "created_by" => 0,
                "updated_by" => 0,
                "created_at" => "2022-09-14 07:43:09",
                "updated_at" => "2022-09-14 07:43:11",
                "deleted_at" => NULL,
            ),
            array(
                "id" => 6,
                "product_id" => 3,
                "name" => "CUTTLEFISH WHOLE CLEAN",
                "path" => "images/dummy_images.png",
                "description" => "CUTTLEFISH CLEAN IQF 20% & 30% SIZE (U/2,U/1,1/2,2/4,5/7,8/12,13/20,20/40, 40/60,60/UP) PACKING ; 10KG/15 KG.",
                "price" => "USD 4500- USD 5000 per MT",
                "origin" => "INDIA (MAHARASHTRA,GOA,GUJRAT,KERALA,ANDHRAPRADESH,TAMILNADU)",
                "features" => "Port Of Loading: ANY PORT IN INDIA Payment Term : LC Delivery Time Shipment 20-25 DAY AFTER CONFIRMATION.",
                "order_size" => "",
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
