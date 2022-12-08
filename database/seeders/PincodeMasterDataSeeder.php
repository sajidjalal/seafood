<?php

namespace Database\Seeders;

use App\Models\MasterPincodeModel;
use Illuminate\Database\Seeder;

class PincodeMasterDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MasterPincodeModel::truncate();
        $file = fopen("database/seeders/csv/pincodeMasterData.csv", "r");
        $counter = 1;
        while (($line = fgetcsv($file)) !== FALSE) {
            $line = array_map('trim', $line);
            if ($counter == 1) {
                $counter++;
                continue;
            }

            MasterPincodeModel::insert([
                'id'            => $line[0],
                'pincode'       => $line[1],
                'country_code'  => $line[2],
                'state_id'      => $line[3],
                'city_id'       => $line[4],
                'area'          => $line[5],
                'latitude'      => $line[6],
                'longitude'     => $line[7],
                'sequence'      =>  1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ]);
        }
        fclose($file);
    }
}
