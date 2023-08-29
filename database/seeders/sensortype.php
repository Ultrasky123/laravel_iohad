<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class sensortype extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ['sensor_type_id' => 1, 'sensor_type' => 'Penciuman'],
            ['sensor_type_id' => 2, 'sensor_type' => 'Gerak dan Gyro'],
            ['sensor_type_id' => 3, 'sensor_type' => 'Getar'],
            ['sensor_type_id' => 4, 'sensor_type' => 'GPS'],
            ['sensor_type_id' => 5, 'sensor_type' => 'Pengelihatan'],
            ['sensor_type_id' => 6, 'sensor_type' => 'Suara'],
            ['sensor_type_id' => 7, 'sensor_type' => 'Suhu dan Kelembaban'],
            ['sensor_type_id' => 8, 'sensor_type' => 'Berat'],
            ['sensor_type_id' => 9, 'sensor_type' => 'Jarak'],
            ['sensor_type_id' => 10, 'sensor_type' => 'Multi'],
        ];

        DB::table('sensor_types')->insert($data);
    }
}
