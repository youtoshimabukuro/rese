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
                <div class="link">
                    <span>{{$reservations->links()}}</span>
                </div>
            @endforeach
            
        </div>
        <div class="favorite">
            <div class="user">
                <h3>testさん</h3>
            </div>
            <div class="reservation-ttl">
                <h3>お気に入り店舗</h3>
            </div>
            <div class="favorite-shop">
                <div class="shop-all_item">
                    <div class="shop-img-box">
                        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt=""
                            class="shop-img">
                    </div>
                    <h4 class="shop-name">仙人</h4>
                    <div class="shop-tag-box">
                        <p class="shop-city">#東京</p>
                        <p class="shop-genre">#寿司</p>
                    </div>
                    <div class="shop-bottom-box">
                        <div class="shop-btn">
                            <form action="">
                                <button>詳しく見る</button>
                            </form>
                        </div>
                        <form action="" class="favorite-form">
                            <input type="checkbox" id="1" name="favorite" onchange="this.form.submit()">
                            <label for="1" class="heart"></label>
                        </form>
                    </div>
                </div>
                <div class="shop-all_item">
                    <div class="shop-img-box">
                        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt=""
                            class="shop-img">
                    </div>
                    <h4 class="shop-name">仙人</h4>
                    <div class="shop-tag-box">
                        <p class="shop-city">#東京</p>
                        <p class="shop-genre">#寿司</p>
                    </div>
                    <div class="shop-bottom-box">
                        <div class="shop-btn">
                            <form action="">
                                <button>詳しく見る</button>
                            </form>
                        </div>
                        <form action="" class="favorite-form">
                            <input type="checkbox" id="1" name="favorite" onchange="this.form.submit()">
                            <label for="1" class="heart"></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection