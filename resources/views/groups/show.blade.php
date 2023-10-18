@extends('layouts.app')

@section('title', 'Просмотр группы')

@section('body')
<div class="card" style="background-color:#263238">
    <div class="card-header bg-gradient" style="background-color:#141928">
        <div class="row">
            <div class="col-sm-6">
                <h5 class="card-title">Группа {{ $group->name }}</h5>
            </div>
        </div>
    </div>
    <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text">
            Староста: {{ isset($group->leadOfGroup->name) ? $group->leadOfGroup->name : 'Не назначен' }}
            <table class="table text-light">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Студент</th>
                    <th scope="col" class="text-center">Управление группой</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($group->students as $student)
                        <tr>
                        <th scope="row">{{ $i=$i+1 }}</th>
                        <td>{{ $student->name }}</td>
                        <td>
                            <div class="d-flex justify-content-center gap-1">
                                <button type="button" class="btn btn-light">Просмотреть</button>
                                <button type="button" class="btn btn-warning">Редактировать</button>
                                <button type="button" class="btn btn-danger">Удалить</button>
                            </div>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </p>
    </div>
</div>
@endsection