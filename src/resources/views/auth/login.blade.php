
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('symbol')
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
@endsection

@section('main')
<div class="login">
    <div class="login_inner">
        <h1>Login</h1>
        <form class="login_form" action="">
            <div class="login_form-item">
                <span class="material-symbols-outlined">mail</span>
                <input type="email" placeholder="Email">
            </div>
            <div class="login_form-item">
                <span class="material-symbols-outlined">lock</span>
                <input type="password" placeholder="password">
            </div>
            <div class="login_form-btn">
                <input class="" type="submit" value="ログイン">
            </div>
        </form>
    </div>
</div>
@endsection