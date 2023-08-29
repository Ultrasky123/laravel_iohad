<?php

namespace App\Models\BME;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bme280 extends Model
{
    use HasFactory;

    protected $table = 'bme280';
    protected $primarykey = 'event_id';
    protected $fillable = [
        'temp', 'pressure', 'approximate_altitude', 'humidity'
    ];
}
