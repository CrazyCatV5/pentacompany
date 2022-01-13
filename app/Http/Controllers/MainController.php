<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getResult(float $price = 0.0, float $area = 0.0)
    {
        $query = [];
        if ($price) {
            $query = $query + ['price' => $price];
        }
        if ($area) {
            $query = $query + ['area' => $area];
        }
        if (empty($query)) {
            return $query;
        }

        return $this->where($query)->get();
    }

    public function main(Request $request){
        $search =  $request->post('country');
        $search1 =  $request->post('daterange');

        if($search!="страна"){
            $Members = Tour::where('country','=',$search)->paginate(10);
            $Members->appends(['q' => $search]);
        }
        else{
            $Members = Tour::paginate(10);
        }
        return View('main1')->with('data',$Members);
    }
}
