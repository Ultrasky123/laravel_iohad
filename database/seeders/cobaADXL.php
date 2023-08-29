<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cobaADXL extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $params = [
            'x_axis' => 20.1, 'y_axis' => 1.2, 'z_axis' => 22, 'sensor_id' => 201
        ];

        DB::table('adxl_tangan_kanan')->insert($params);
    }
}
