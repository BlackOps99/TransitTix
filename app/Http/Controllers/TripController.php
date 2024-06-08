<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class TripController extends Controller
{
    public function index(Request $request): Response
    {
        $request->validate([
            'fromCity' => ['required', 'max:50'],
            'toCity' => ['required', 'max:50'],
            'date' => ['required', 'max:50'],
        ]);

        $trips = Trip::filter($request->only('fromCity', 'toCity', 'date'))
            ->paginate(15)
            ->withQueryString()
            ->through(fn ($trip) => [
                'id' => $trip->id,
                'trip_type' => $trip->trip_type,
                'from' => Str::ucfirst($trip->from),
                'to' => Str::ucfirst($trip->to),
                'trip_price' => $trip->trip_price,
                'trip_time' => Carbon::createFromFormat('H:i:s', $trip->trip_time)->format('g:i A'),
                'trip_date' => $trip->trip_date,
            ]);

        return Inertia::render('Trips/Index', [
            'filters' => $request->only('fromCity', 'toCity', 'date'),
            'triosCount' => $trips->count(),
            'trips' => $trips,
        ]);
    }
}
