
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
                <button>&lt;</button>
                <h2>仙人</h2>
            </div>
            <div class="shop-description-img">
                <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="">
            </div>
            <div class="shop-description-tag">
                <p class="shop-city">#東京</p>
                <p class="shop-genre">#寿司</p>
            </div>
            <div class="shop-description-text">
                <p>
                    料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日のお食事、ビジネス接待まで気軽に使用することができます。
                </p>
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
                            <td>仙人</td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>2021-04-01</td>
                        </tr>
                        <tr>
                            <th>Time</th>
                            <td>17:00</td>
                        </tr>
                        <tr>
                            <th>Number</th>
                            <td>1人</td>
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