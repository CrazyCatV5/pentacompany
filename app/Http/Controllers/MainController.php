<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function buy(Request $request){
        if(!Auth::check()){
            return redirect(route('user.login'));
        }
        $id =  $request->get('id');
        $tour = Tour::all()->find($id);
        $test = new Contract();
        $test->user_id = Auth::user()->id;
        $test->tour_id = $tour->id;
        $test->start = $tour->start;
        $test->price = $tour->cost;
        $test->save();
        return redirect(route('main'));

    }
}
