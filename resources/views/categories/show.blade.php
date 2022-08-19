@extends('layouts.app')

@section('content')
<h1 class="category-content__title">{{$category->name}}</h1>
<sub class="category-content__subtitle d-block">Категория 2 / Подкатегория 2-1</sub>
<a href="{{ route('categories.product.create', $category) }}" class="btn btn-primary mt-2">Создать
    товар</a>
<div class="category-content__content">
    @foreach ($products as $product)
    <a href="{{ route('categories.product.show', [$category, $product]) }}"
        class="category-content__item category-content-item">
        <img src="{{ asset("/storage/uploads" . $product->img) }}" class="category-content-item__image" alt="">
        <div class="category-content-item__name-and-price d-flex justify-content-between">
            <b class="category-content-item__name">{{$product->name}}</b>
            <span class="category-content-item__price">{{$product->price}} руб</span>
        </div>
    </a>
    @endforeach
</div>

@endsection