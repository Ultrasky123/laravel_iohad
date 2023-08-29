<?php

namespace App\Models\INMP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inmp_kiri extends Model
{
    use HasFactory;

    protected $table = 'inmp_kanan';
    protected $primarykey = 'event_id';
    // protected $fillable = 'value';
}
