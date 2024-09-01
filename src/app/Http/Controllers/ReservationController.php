<?php

namespace App\Http\Controllers;
use App\Models\Shop;
use App\Models\City;
use App\Models\Genre;
use App\Models\Time;
use App\Models\Number;
use App\Models\Reservation;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use DateTime;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $shops = Shop::with('city')->get();
        $cities = City::all();
        $genres = Genre::all();

        return view('index', compact('shops', 'cities', 'genres'));
    }

    public function search(Request $request)
    {
        $cities = City::all();
        $genres = Genre::all();

        $shops = Shop::where('city_id', $request->city == 1 ? '>' : '=', $request->city)->
            where('genre_id', $request->genre == 1 ? '>' : '=', $request->genre)->
            where('shop_name', 'LIKE', "%{$request->search}%")
            ->get();

        return view('index', compact('cities', 'genres', 'shops'));
    }

    public function shopDetail(Request $request)
    {
        $shop = Shop::find($request->id);
        $date = new DateTime();
        $times = Time::all();
        $numbers = Number::all();
        Session::put('shop', $shop);
        Session::put('date', $date);

        return view('shop_detail', compact('shop', 'times', 'numbers', 'date'));
    }

    public function Confirm(Request $request)
    {
        $confirm = [
            'date' => $request->date_select,
            'time' => $request->time_select,
            'number' => $request->number_select
        ];
        $shop = Session::get('shop');
        $date = new DateTime();
        $times = Time::all();
        $numbers = Number::all();
        $timeId = Time::find($request->time_select);
        $numberId = Number::find($request->number_select);

        return view('shop_detail', compact('confirm', 'shop', 'date', 'times', 'numbers', 'timeId', 'numberId'));
    }

    public function reserve(Request $request)
    {
        $form = [
            'user_id' => Auth::id(),
            'date' => $request->date,
            'time_id' => $request->time,
            'number_id' => $request->number
        ];
        // dd($form);
        Reservation::create($form);
        return redirect('/');
    }
}
