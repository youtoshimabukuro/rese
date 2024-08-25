
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('symbol')
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
@endsection

@section('main')
<div class="register">
    <div class="register_inner">
        <h1>Registration</h1>
        <form class="register_form" action="\register" method="post">
            @csrf
            <div class="register_form-item">
                <span class="material-symbols-outlined">person</span>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Username">
            </div>
            <div class="form__error">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div class="register_form-item">
                <span class="material-symbols-outlined">mail</span>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
            </div>
            <div class="form__error">
                @error('email')
                    {{ $message }}
                @enderror
            </div>
            <div class="register_form-item">
                <span class="material-symbols-outlined">lock</span>
                <input type="password" name="password" placeholder="password">
            </div>
            <div class="form__error">
                @error('password')
                    {{ $message }}
                @enderror
            </div>
            <div class="register_form-btn">
                <input class="" type="submit" value="登録">
            </div>
        </form>
    </div>
</div>
@endsection