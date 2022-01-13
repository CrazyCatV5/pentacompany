<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use function PHPUnit\Framework\isEmpty;

class MainController extends Controller
{
    public function main(Request $request){
        $search =  $request->get('country');
        $price_min = $request->get('price_min');
        $price_max = $request->get('price_max');
        $rating = $request->get('rating');

        if(empty($price_min)){$price_min = 0;}
        if(empty($price_max)){$price_max = 99999999;}
        if($search!="страна"){
            $Tour = Tour::where('country','=',$search)->where('cost', '>', $price_min)->paginate(10);
        }
        else{
            $Tour = Tour::where('cost', '>', $price_min)->where('cost', '<', $price_max)->where('rating', '>=', $rating)->paginate(10);
        }
        $Tour->appends (['search' =>  $search,'price_min' =>  $price_min,]);
        return View('main1')->with(['Tour' => $Tour]);
    }
}
