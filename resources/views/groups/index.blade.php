@extends('layouts.app')

@section('title', 'Группы')

@section('body')
@foreach($groups as $group)
    {{ $group->name; }}
@endforeach
<div class="d-flex justify-content-center">
    <a href="{{ route('groups.create') }}">
        <button type="button" class="btn btn-light">Добавить новую группу</button>
    </a>
</div>
<div class="d-flex justify-content-center">
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
        <tr>
        <th scope="row">1</th>
        <td>ПКЭСбд-31</td>
        <td>Иванова А.А.</td>
        <td>
            <button type="button" class="btn btn-light">Просмотреть</button>
            <button type="button" class="btn btn-warning">Редактировать</button>
            <button type="button" class="btn btn-danger">Удалить</button>
        </td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Рбв-31</td>
        <td>Квитчатый К.В.</td>
        <td>
            <button type="button" class="btn btn-light">Просмотреть</button>
            <button type="button" class="btn btn-warning">Редактировать</button>
            <button type="button" class="btn btn-danger">Удалить</button>
        </td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>ТМбд-31</td>
        <td>Савельев Н.С.</td>
        <td>
            <button type="button" class="btn btn-light">Просмотреть</button>
            <button type="button" class="btn btn-warning">Редактировать</button>
            <button type="button" class="btn btn-danger">Удалить</button>
        </td>
        </tr>
    </tbody>
    </table>
</div>
@endsection