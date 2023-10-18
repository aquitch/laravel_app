@extends('layouts.app')

@section('title', 'Группы')

@section('body')
<div class="card" style="background-color:#263238">
    <div class="card-header bg-gradient" style="background-color:#141928">
        <div class="row">
            <div class="col-sm-6">
                <h5 class="card-title">Список групп</h5>
            </div>
            <div class="col-sm-6 d-flex flex-row-reverse"> 
                <a href="{{ route('groups.create') }}">
                    <button type="button" class="btn btn-success">Добавить новую группу</button>
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text">
            <table class="table text-light">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Староста</th>
                    <th scope="col" class="text-center">Управление группой</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($groups as $group)
                        <tr>
                        <th scope="row">{{ $group->id }}</th>
                        <td>{{ $group->name }}</td>
                        <td>{{ isset($group->leadOfGroup) ? $group->leadOfGroup->name : 'Не назначен' }}</td>
                        <td>
                            <div class="d-flex justify-content-center gap-1">
                                <a href='{{ route("groups.show", $group->id) }}'>
                                    <button type="button" class="btn btn-light">Просмотреть</button>
                                </a>
                                <a href='{{ route("groups.edit", $group->id) }}'>
                                    <button type="button" class="btn btn-warning">Редактировать</button>
                                </a>
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