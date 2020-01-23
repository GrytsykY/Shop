@extends('layouts.master')

@section('title','Продукты')

@section('content')

    <h1>{{ $product->name }}</h1>
    <h2>{{ $product->name }}</h2>
    <p>Цена: <b>{{ $product->price }} грн.</b></p>
    <img src="{{ Storage::url($product->img) }}">
    <p>{{ $product->description }}</p>
    <form action="{{ route('basket-add', $product) }}" method="POST">
{{--        @if($product->isAvailable())--}}
{{--            <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>--}}
{{--        @else--}}
{{--            Не доступен--}}
{{--        @endif--}}
        @csrf
    </form>
@endsection
