@extends('layouts.app')

@section('title', 'Создание новой группы')

@section('body')
<div class="d-flex justify-content-center">
    <label for="basic-url" class="form-label">Создание новой группы</label>
</div>
    @include('groups.form', ['method' => 'POST', 'action' => route('groups.store')])
@endsection