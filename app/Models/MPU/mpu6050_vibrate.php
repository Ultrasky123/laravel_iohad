<?php

namespace App\Models\MPU;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mpu6050_vibrate extends Model
{
    use HasFactory;

    protected $table = 'mpu6050_vibrate';
    protected $primarykey = 'event_id';
    // protected $fillable = 'value';
}
