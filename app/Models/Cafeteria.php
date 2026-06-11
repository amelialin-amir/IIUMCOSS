<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cafeteria extends Model
{
    protected $fillable = [
        'cafeteria_name',
        'location',
        'status'
    ];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}