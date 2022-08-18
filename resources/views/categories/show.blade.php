@extends('layouts.app')

@section('content')
<main class="category-content">
    <h1 class="category-content__title">Подкатегория 2-1</h1>
    <sub class="category-content__subtitle">Категория 2 / Подкатегория 2-1</sub>
    <a href="{{ route('categories.product.create', $category) }}" class="d-block btn btn-primary mt-2">Создать
        товар</a>
    <div class="category-content__content">
        <div class="category-content__item category-content-item">
            @foreach ($products as $product)
            <img src="{{ asset("/storage/uploads" . $product->img) }}" class="category-content-item__image" alt="">
            <div class="category-content-item__name-and-price d-flex justify-content-between">
                <b class="category-content-item__name">{{$product->name}}</b>
                <span class="category-content-item__price">{{$product->price}}</span>
            </div>
            @endforeach
        </div>
    </div>
</main>

@endsection