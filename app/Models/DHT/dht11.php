<?php

namespace App\Models\DHT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dht11 extends Model
{
    use HasFactory;

    protected $table = 'dht11';
    protected $primarykey = 'event_id';
    protected $fillable = [
        'temperature', 'humidity'
    ];
}
