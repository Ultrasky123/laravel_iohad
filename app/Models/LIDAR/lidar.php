<?php

namespace App\Models\LIDAR;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lidar extends Model
{
    use HasFactory;

    protected $table = 'lidar';
    protected $primarykey = 'event_id';
    protected $fillable = 'value';
}
