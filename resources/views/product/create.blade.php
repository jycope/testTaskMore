@extends('layouts.app')

@section('content')

@include('error')

{{ Form::model($product, ['route' => ['categories.product.store', $category], 'class' => 'd-flex justify-content-between flex-column gap-10 mt-4 m-auto', 'enctype' => 'multipart/form-data']) }}
<div class="mb-2">
    <label class="col-form-label">Цена</label>
    <div class="input-form">
        {{ Form::number('price') }}
    </div>
</div>
<div class="mb-2">
    <label class="col-form-label">Название</label>
    <div class="input-form">
        {{ Form::text('name') }}
    </div>
</div>

<div class="mb-2">
    <label class="col-form-label">Описание</label>
    <div class="input-form">
        {{ Form::textarea('description') }}
    </div>
</div>

<div class="mb-2">
    <label class="col-form-label">Изображение</label>
    <div class="input-form">
        {{ Form::file('img') }}
    </div>
</div>
{{ Form::hidden('category_id', $category->id) }}
{{ Form::submit('Создать', ['class' => 'form-control mb-4 btn btn-primary']) }}
{{ Form::close() }}

@endsection