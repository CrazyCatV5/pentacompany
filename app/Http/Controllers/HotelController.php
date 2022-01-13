<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Tour;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function getDetails(string $id)
    {
        $hotel = Tour::query()
            ->where('id', $id)->first();

        if ($hotel === null) {
            abort(404);
        }
        return view('hotel', ['hotel_item' => $hotel]);
    }
}
