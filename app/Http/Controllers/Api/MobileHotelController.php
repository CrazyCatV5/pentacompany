<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\HotelReview;
use Illuminate\Http\Request;

class MobileHotelController extends Controller
{
    public function test(){
        return Hotel::with("comment")->with("nutrition")->get();
    }

    public function return(Request $request){
        $review = new HotelReview;
        $review->name = $request->name;
        $review->text = $request->text;
        $review->rating = $request->rating;
        $review->like = $request->like;
        $review->dislike = $request->dislike;
        $review->hotel_id = $request->hotel_id;
        $review->save();
    }
}
