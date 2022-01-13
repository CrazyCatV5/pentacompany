<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

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
        $search =  $request->get('country');

        if($search!="страна"){
            $Tour = Tour::where('country','=',$search)->paginate(10);
            $Tour->appends(['q' => $search]);
        }
        else{
            $Tour = Tour::paginate(10);
        }
        $Tour->appends (['search' =>  $search]);
        return View('main1',['Tour' => $Tour])->with(['Tour' => $Tour]);
    }
}
