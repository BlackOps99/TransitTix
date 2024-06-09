<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BookedTrip extends Model
{
    use HasFactory;

    protected $with = [
        'trip'
    ];

    public function trip(): HasOne
    {
        return $this->hasOne(Trip::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
