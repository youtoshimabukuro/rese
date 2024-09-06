<?php

namespace App\Http\Controllers;
use App\Models\Favorite;
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
        $favorites = Favorite::with('user')->get();

        Session::put('shops', $shops);
        Session::put('favorites',$favorites);

        return view('index', compact('shops', 'cities', 'genres','favorites'));
    }

    public function search(Request $request)
    {
        $cities = City::all();
        $genres = Genre::all();
        $favorites = Favorite::all();

        $shops = Shop::where('city_id', $request->city == 1 ? '>' : '=', $request->city)->
                        where('genre_id', $request->genre == 1 ? '>' : '=', $request->genre)->
                        where('shop_name', 'LIKE', "%{$request->search}%")
                        ->get();

        Session::put('shops', $shops);

        return view('index', compact('cities', 'genres', 'shops','favorites'));
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

    public function favorite (Request $request)
    {
        $shops = Session::get('shops');
        $cities = City::all();
        $genres = Genre::all();

        $favorite = Favorite::where('user_id',Auth::id())->
                                where('shop_id',$request->favorite)
                                ->first();

        if ($favorite==null){
            $form = [
                        'user_id' => Auth::id(),
                        'shop_id' => $request->favorite,
                    ];
                    Favorite::create($form);
        } else {
            Favorite::find($favorite->id)->delete();
        }

        $favorites = Favorite::with('user')->get();

        return view('index', compact('shops', 'cities', 'genres','favorites'));
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
            'shop_id' => $request->shop_name,
            'date' => $request->date,
            'time_id' => $request->time,
            'number_id' => $request->number
        ];
        // dd($form);
        Reservation::create($form);
        return redirect('/');
    }

    public function myPage()
    {
        $reservations = Reservation::paginate(1);

        return view('mypage',compact('reservations'));
    }
}
