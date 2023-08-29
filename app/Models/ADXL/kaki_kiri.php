<?php

namespace App\Models\ADXL;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kaki_kiri extends Model
{
    use HasFactory;

    protected $table = 'adxl_kaki_kiri';
    protected $primarykey = 'event_id';
    protected $fillable = [
        'x_axis', 'y_axis', 'z_axis'
    ];
}
