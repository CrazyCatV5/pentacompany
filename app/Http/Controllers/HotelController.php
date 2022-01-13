<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function getDetails(string $id)
    {
        $hotel = Hotel::query()
            ->where('id', $id)->first();

        if ($hotel === null) {
            abort(404);
        }
        return view('hotel', ['hotel_item' => $hotel]);
    }
}
