<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Trip extends Model
{
    use HasFactory;

    protected $with = [
        'bus'
    ];

    public function bus(): BelongsTo
    {
        return $this->belongsTo(Bus::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['fromCity'] ?? null, function ($query, $filters) {
            $query->where(function ($query) use ($filters) {
                $query->where('from', $filters);
            });
        })->when($filters['toCity'] ?? null, function ($query, $filters) {
            $query->where(function ($query) use ($filters) {
                $query->where('to', $filters);
            });
        })->when($filters['date'] ?? null, function ($query, $filters) {
            $query->where(function ($query) use ($filters) {
                $query->whereBetween('trip_date', [now()->toDateString(), $filters]);
            });
        });
    }
}
