@extends('layouts.app')

@section('title', 'Создание новой группы')

@section('body')
<div class="card" style="background-color:#263238">
    <div class="card-header bg-gradient" style="background-color:#141928">
        <div class="row">
            <div class="col">
                <div class="card-title"><center>Создание новой группы</center></div>
            </div>
        </div>
    </div>
    <div class="card-body">
        @include('groups.form', ['method' => 'POST', 'action' => route('groups.store'), 'students' => $students])
    </div>
</div>
@endsection