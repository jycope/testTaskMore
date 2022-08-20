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
    <div class="d-flex justify-content-between">
        <a href="{{ route('categories.product.edit', [$category, $product]) }}"
            class="btn btn-primary mt-2 d-block">Редактировать
            товар</a>

        <form action="{{ route('categories.product.destroy', [$category, $product]) }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-primary mt-2"
                onClick="return confirm('Вы подтверждаете удаление?');">Удалить товар</button>
        </form>
    </div>
</div>

@endsection