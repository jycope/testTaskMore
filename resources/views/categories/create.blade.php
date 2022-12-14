@extends('layouts.app')

@section('content')

@include('error')

{{ Form::model($category, ['route' => 'categories.store', 'class' => 'd-flex justify-content-between flex-column gap-10 mt-4 m-auto'], 'enctype') }}

<div class="mb-2">
    <label for="staticEmail" class="col-form-label">Название</label>
    <div class="input-form">
        {{ Form::text('name', '', ['placeholder' => 'Кухни...']) }}
    </div>
</div>

{{ Form::submit('Добавить', ['class' => 'form-control mb-4 btn btn-primary']) }}
{{ Form::close() }}

@endsection