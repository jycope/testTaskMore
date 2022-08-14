@extends('layouts.app')

@section('content')

<aside>
    <b>Категория 1</b>
    <ul class="categories">
        <li class="categories__item">Подкатегория 1-1</li>
        <li class="categories__item">Подкатегория 1-2</li>
    </ul>
</aside>
<main class="category-content">
    <h1 class="category-content__title">Подкатегория 2-1</h1>
    <sub class="category-content__subtitle"> Категория 2 / Подкатегория 2-1</sub>
    <div class="category-content__content">
        <div class="category-content__item category-content-item">
            <img src="" class="category-content-item__image" alt="">
            <div class="category-content-item__name-and-price d-flex justify-content-between">
                <b class="category-content-item__name">Название</b>
                <span class="category-content-item__price">10 000 руб.</span>
            </div>
        </div>
    </div>
</main>

@endsection