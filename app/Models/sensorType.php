<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sensorType extends Model
{
    use HasFactory;

    protected $table = 'sensor_types';
    protected $primarykey = 'sensor_type_id';
}
