@extends('layouts.app')

@section('content')

<a class="button-to-prev" href="{{ url()->previous() }}">Назад</a>

<div class="product">
    <img class="product__image" src="{{ asset("/storage/uploads" . $product->img) }}" alt="">
    <div class="product__info product-info">
        <div class="product-info__top-part">
            <span class="product__name">{{ $product->name }}</span>
            <b class="product__price">{{ $product->price }} руб.</b>
        </div>
        <p class="product__description">{{ $product->description }}</p>
    </div>
</div>

@endsection