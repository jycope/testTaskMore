@extends('layouts.app')

@section('content')

@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

{{ Form::model($worker, ['route' => 'staff.store', 'class' => 'd-flex justify-content-between flex-column gap-10 mt-4 w-25 m-auto', 'enctype' 
<div class="mb-1">
    <label for="staticEmail" class="col-form-label">Email</label>
    <div class="input-form">
        {{ Form::text('email') }}
</div>
</div>

<div class="mb-2">
    <label for="staticEmail" class="col-form-label">ФИО</label>
    <div class="input-form">
        {{ Form::text('fio') }}
    </div>
</div>

<div class="mb-2">
    <label for="staticEmail" class="col-form-label">Опыт работы</label>
    <div class="input-form">
        {{ Form::text('work_experience') }}
    </div>
</div>

<div class="mb-2">
    <label for="staticEmail" class="col-form-label">Фото</label>
    {{csrf_field()}}
    <div class="input-form">
        {{ Form::file('photo') }}
    </div>
</div>

<div class="mb-2">
    <label for="staticEmail" class="col-form-label">Средняя З/П</label>
    <div class="input-form">
        {{ Form::number('average_salary') }}
    </div>
</div>
{{ Form::submit('Добавить', ['class' => 'form-control mb-4 btn btn-primary']) }}
{{ Form::close() }}

@endsection