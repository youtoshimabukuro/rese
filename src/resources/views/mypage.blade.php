@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
@endsection

@section('main')

<div class="mypage">
    <div class="mypage_inner">
        <div class="reservation-status">
            <div class="reservation-status-ttl">
                <h3>予約状況</h3>
            </div>
            @foreach ($reservations as $reservation)
                <div class="reservation-description">
                    <div class="reservation-description-top">
                        <div class="reservation-description-ttl">
                            <span class="clock">
                            </span>
                            <h4>予約{{$reservation->id}}</h4>
                        </div>
                        <div class="reservation-description-close">
                            <span class="round_btn"></span>
                        </div>
                    </div>
                    <table class="reservation-table">
                        <tr>
                            <th>Shop</th>
                            <td>{{$reservation->shop->shop_name}}</td>
                            <input type="hidden" value="">
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>{{$reservation->date}}</td>
                            <input type="hidden" value="">
                        </tr>
                        <tr>
                            <th>Time</th>
                            <td>{{$reservation->time->reservation_time}}</td>
                            <input type="hidden" value="">
                        </tr>
                        <tr>
                            <th>Number</th>
                            <td>{{$reservation->number->number}}人</td>
                            <input type="hidden" value="">
                        </tr>
                    </table>
                </div>
            @endforeach
            <div class="link">
                <span>{{$reservations->links()}}</span>
            </div>
        </div>
        <div class="favorite">
            <div class="user">
                <h3>{{Auth::user()->name}}さん</h3>
            </div>
            <div class="reservation-ttl">
                <h3>お気に入り店舗</h3>
            </div>
            <div class="favorite-shop">
                @foreach ($favorites as $favorite)
                    <div class="shop-all_item">
                        <div class="shop-img-box">
                            <img src="{{$favorite->shop->shop_img}}" alt=""
                                class="shop-img">
                        </div>
                        <h4 class="shop-name">{{$favorite->shop->shop_name}}</h4>
                        <div class="shop-tag-box">
                            <p class="shop-city">#{{$favorite->shop->city->city}}</p>
                            <p class="shop-genre">#{{$favorite->shop->genre->genre}}</p>
                        </div>
                        <div class="shop-bottom-box">
                            <div class="shop-btn">
                                <form action="">
                                    <button>詳しく見る</button>
                                </form>
                            </div>
                            <form action="/mypage/favorite" class="favorite-form" method="post">
                            @csrf
                                <input type="checkbox" id="{{$favorite->shop->id}}" onchange="this.form.submit()" checked>
                                <input type="hidden" name="favorite" value="{{$favorite->shop->id}}">
                                <label for="{{$favorite->shop->id}}" class="heart"></label>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="favorite_link">
                <span>{{$favorites->links()}}</span>
            </div>
        </div>
    </div>
</div>

@endsection