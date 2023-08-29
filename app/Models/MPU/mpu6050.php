<?php

namespace App\Models\MPU;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mpu6050 extends Model
{
    use HasFactory;

    protected $table = 'mpu6050';
    protected $primarykey = 'event_id';
    protected $fillable = [
        'temperature', 'x_acceleration', 'y_acceleration', 'z_acceleration', 'x_rotation', 'y_rotation', 'z_rotation'
    ];
}
