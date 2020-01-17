@extends('layouts.master')

@section('title','Продукты')

@section('content')
    <h1>iPhone 5SE</h1>
    <h2>Мобильные телефоны</h2>
    <p>Цена: <b>17221 руб.</b></p>
    <img src="http://internet-shop.tmweb.ru/storage/products/iphone_5.jpg">
    <p>Отличный классический iPhone</p>
    <form action="http://internet-shop.tmweb.ru/basket/add/4" method="POST">
        <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>
        @csrf
    </form>

@endsection
