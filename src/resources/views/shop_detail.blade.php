
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_
detail.css') }}">
@endsection

@section('main')

<div class="shop-detail">
    <div class="shop-detail_inner">
        <div class="shop-description">
            <div class="shop-description-top">
                <form action="/" method="get">
                @csrf
                    <button>&lt;</button>
                </form>
                <h2>{{$shop['shop_name']}}</h2>
            </div>
            <div class="shop-description-img">
                <img src="{{$shop['shop_img']}}" alt="">
            </div>
            <div class="shop-description-tag">
                <p class="shop-city">#{{$shop->city->city}}</p>
                <p class="shop-genre">#{{$shop->genre->genre}}</p>
            </div>
            <div class="shop-description-text">
                <p>{{$shop->shop_overview}}</p>
            </div>
        </div>
        <div class="reservation">
            <div class="reservation_inner">
                <div class="reservation-ttl">
                    <h3>予約</h3>
                </div>
                <div class="reservation-form">
                    <form action="" id="reservation">
                        <input type="date" min="2024-08-17">
                        <input class="time" type="time">
                        <select name="select">
                            <option value="太郎">All genre</option>
                            <option value="次郎">次郎</option>
                            <option value="三郎">三郎</option>
                        </select>
                    </form>
                </div>
                <div class="reservation-details">
                    <table class="reservation-table">
                        <tr>
                            <th>Shop</th>
                            <td><input type="text" name="shop" value="仙人" readonly></td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td><input type="text" name="date" value="2021-04-01" readonly></td>
                        </tr>
                        <tr>
                            <th>Time</th>
                            <td><input type="text" name="time" value="17:00" readonly></td>
                        </tr>
                        <tr>
                            <th>Number</th>
                            <td><input type="text" name="number" value="1人" readonly></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="reservation-btn">
                <input type="submit" form="reservation" value="予約する">
            </div>
        </div>
    </div>
</div>

@endsection