<?php

namespace App\Models\ADXL;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tangan_kanan extends Model
{
    use HasFactory;

    protected $table = 'adxl_tangan_kanan';
    protected $primarykey = 'event_id';
    protected $fillable = [
        'x_axis', 'y_axis', 'z_axis'
    ];
}
