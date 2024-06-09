<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Bus extends Model
{
    use HasFactory;

    protected $with = [
        'driver',
        'trips'
    ];

    public function driver(): HasOne
    {
        return $this->hasOne(Driver::class);
    }

    public function trips(): HasMany
    {
        return $this->hasMany(Trip::class);
    }
}
