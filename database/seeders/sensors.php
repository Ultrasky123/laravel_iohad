<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class sensors extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ['sensor_id' => 101, 'sensor_name' => 'MQ2', 'sensor_type_id' => 1],
            ['sensor_id' => 201, 'sensor_name' => 'ADXL_tangan_kanan', 'sensor_type_id' => 2],
            ['sensor_id' => 202, 'sensor_name' => 'ADXL_tangan_kiri', 'sensor_type_id' => 2],
            ['sensor_id' => 203, 'sensor_name' => 'ADXL_kaki_kanan', 'sensor_type_id' => 2],
            ['sensor_id' => 204, 'sensor_name' => 'ADXL_kaki_kiri', 'sensor_type_id' => 2],
            ['sensor_id' => 301, 'sensor_name' => 'MPU6050_vibrate', 'sensor_type_id' => 3],
            ['sensor_id' => 601, 'sensor_name' => 'INMP_kanan', 'sensor_type_id' => 6],
            ['sensor_id' => 602, 'sensor_name' => 'INMP_kiri', 'sensor_type_id' => 6],
            ['sensor_id' => 603, 'sensor_name' => 'KY_kanan', 'sensor_type_id' => 6],
            ['sensor_id' => 604, 'sensor_name' => 'KY_kiri', 'sensor_type_id' => 6],
            ['sensor_id' => 701, 'sensor_name' => 'DHT11', 'sensor_type_id' => 7],
            ['sensor_id' => 801, 'sensor_name' => 'Loadcell_1', 'sensor_type_id' => 8],
            ['sensor_id' => 802, 'sensor_name' => 'Loadcell_2', 'sensor_type_id' => 8],
            ['sensor_id' => 803, 'sensor_name' => 'Loadcell_3', 'sensor_type_id' => 8],
            ['sensor_id' => 804, 'sensor_name' => 'Loadcell_4', 'sensor_type_id' => 8],
            ['sensor_id' => 805, 'sensor_name' => 'Loadcell_5', 'sensor_type_id' => 8],
            ['sensor_id' => 901, 'sensor_name' => 'Lidar', 'sensor_type_id' => 9],
            ['sensor_id' => 1001, 'sensor_name' => 'BME280', 'sensor_type_id' => 10],
            ['sensor_id' => 1002, 'sensor_name' => 'MPU6050', 'sensor_type_id' => 10],
        ];

        DB::table('sensors')->insert($data);
    }
}
