<?php

namespace Database\Seeders;

use App\Models\MasterStateModel;
use Illuminate\Database\Seeder;

class MasterStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MasterStateModel::truncate();
        $file = fopen("database/seeders/csv/masterStateData.csv", "r");
        $counter = 1;
        while (($line = fgetcsv($file)) !== FALSE) {
            $line = array_map('trim', $line);
            if ($counter == 1) {
                $counter++;
                continue;
            }
            MasterStateModel::insert([
                'id'        => $line[0],
                'state_id'  => $line[1],
                'state_name' => $line[2],
                'state_code' => $line[3],
                'sequence'  => 1,
                'status'    => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        fclose($file);
    }
}
