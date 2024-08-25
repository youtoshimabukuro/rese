<?php

namespace App\Http\Controllers;
use App\Models\Shop;
use App\Models\City;
use App\Models\Genre;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $shops = Shop::with('city')->get();
        $cities = City::all();
        $genres = Genre::all();

        return view('index' ,compact('shops','cities','genres'));
    }

    public function search(Request $request)
    {
        $cities = City::all();
        $genres = Genre::all();
        if ($request->city == 1) {
            $cityJudge = '>';
        } else {
            $cityJudge = '=';
        }
        $shops = Shop::where('city_id', $request->city == 1 ?'>':'=', $request->city)->
                where('genre_id',$request->genre == 1 ?'>':'=',$request->genre)->
                where('shop_name','LIKE',"%{$request->search}%")
                ->get();

        return view('index', compact('cities','genres','shops'));
    }

    public function shopDetail(Request $request)
    {
        $shop = Shop::find($request->id);
        return view('shop_detail',['shop'=>$shop]);
    }
}
