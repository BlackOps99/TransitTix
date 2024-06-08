<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Trip extends Model
{
    use HasFactory;

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
