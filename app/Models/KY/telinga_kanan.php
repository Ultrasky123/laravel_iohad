<?php

namespace App\Models\KY;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telinga_kanan extends Model
{
    use HasFactory;

    protected $table = 'ky_kanan';
    protected $primarykey = 'event_id';
    // protected $fillable = 'value';
}
