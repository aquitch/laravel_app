@extends('layouts.app')

@section('title', 'Редактирование Группы')

@section('body')
<div class="d-flex justify-content-center">
    <label for="basic-url" class="form-label">Редактор групп</label>
</div>
@include('groups.form', ['method' => 'PUT', 'action' => route('groups.update', $group, $students)])
@endsection