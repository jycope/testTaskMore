@extends('layouts.app')

@section('content')

{{ Form::model($category, ['route' => ['categories.category.update', $category], 'method' => 'PATCH',  'class' => 'd-flex justify-content-between flex-column gap-10 mt-4 m-auto', 'enctype' => 'multipart/form-data']) }}

<div class="mb-2">
    <label for="staticEmail" class="col-form-label">Название</label>
    <div class="input-form">
        {{ Form::text('name') }}
    </div>
</div>

{{ Form::submit('Добавить', ['class' => 'form-control mb-4 btn btn-primary']) }}
{{ Form::close() }}

@endsection