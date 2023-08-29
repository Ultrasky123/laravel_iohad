<?php

namespace App\Models\MQ;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hidung extends Model
{
    use HasFactory;

    protected $table = 'mq2';
    protected $primarykey = 'event_id';
    // protected $fillable = 'value';
}
