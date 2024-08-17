
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('search')
<div class="search">
    <form action="">
        <select name="select">
            <option value="太郎">All area</option>
            <option value="次郎">次郎</option>
            <option value="三郎">三郎</option>
        </select>
        <select name="select">
            <option value="太郎">All genre</option>
            <option value="次郎">次郎</option>
            <option value="三郎">三郎</option>
        </select>
        <input type="search" placeholder="Search">
    </form>
</div>
@endsection

@section('main')

<div class="shop-all">
    <div class="shop-all_inner">
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
                    <button>詳しく見る</button>
                </div>
                <input type="checkbox" id="1" name="example2"><label for="1" class="heart"></label>
            </div>
        </div>
    </div>
</div>

@endsection