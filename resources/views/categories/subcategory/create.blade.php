@extends('layouts.app')

@section('content')

@include('error')

{{ Form::model($category, ['route' => ['categories.category.store', $category], 'class' => 'd-flex justify-content-between flex-column gap-10 mt-4 m-auto'], 'enctype') }}

<div class="mb-2">
    <label for="staticEmail" class="col-form-label">Название</label>
    <div class="input-form">
        {{ Form::text('name', '', ['placeholder' => 'Кухни...']) }}
    </div>

    {{ Form::hidden('category_id', $category->id) }}
</div>

{{ Form::submit('Изменить', ['class' => 'form-control mb-4 btn btn-primary']) }}
{{ Form::close() }}

@endsection