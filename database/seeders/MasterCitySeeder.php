<?php

namespace Database\Seeders;

use App\Models\MasterCityModel;
use Illuminate\Database\Seeder;

class MasterCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MasterCityModel::truncate();
        $file = fopen("database/seeders/csv/masterCityData.csv", "r");
        $counter = 1;
        while (($line = fgetcsv($file)) !== FALSE) {
            $line = array_map('trim', $line);
            if ($counter == 1) {
                $counter++;
                continue;
            }

            MasterCityModel::insert([
                'id'            => $line[0],
                'city_id'       => $line[1],
                'city_name'     => $line[2],
                'state_id'      => $line[3],
                'zone_id'       => $line[4],
                'sequence'      => 1,
                'status'        => 1,
                'created_at'    => now(),
                'updated_at'    => now()
            ]);
        }
        fclose($file);
    }
}
