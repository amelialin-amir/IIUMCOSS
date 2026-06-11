<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'cafeteria_id',
        'day',
        'open_time',
        'close_time'
    ];

    public function cafeteria()
    {
        return $this->belongsTo(Cafeteria::class);
    }
}
