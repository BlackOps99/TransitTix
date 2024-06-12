<?php

namespace App\Http\Controllers;

use App\Models\BookedTrip;
use Illuminate\Http\Request;

class BookedTripController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'tripID' => 'required|numeric|exists:trips,id',
        ]);

        BookedTrip::create([
            'trip_id' => $request->tripID,
            'user_id' => auth()->user()->id,
        ]);

        return to_route('home');
    }
}
