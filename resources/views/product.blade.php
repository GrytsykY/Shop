@extends('layouts.master')

@section('title','Продукты')

@section('content')

    <h1>{{ $product->name }}</h1>
    <h2>{{ $product->category->name }}</h2>
    <p>Цена: <b>{{ $product->price }} грн.</b></p>
    <img style="height: 180px" src="{{ Storage::url($product->img) }}">
    <p>{{ $product->description }}</p>
    <form action="{{ route('basket-add', $product) }}" method="POST">
        @if($product->isAvaliable())
            <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>
        @else
            Не доступен
        @endif
        @csrf
    </form>
@endsection
