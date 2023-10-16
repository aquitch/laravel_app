<form class="mb-4 row container-sm justify-content-center" method='POST' action="{{ $action }}">
    @csrf
    @method($method)
    <div class="row">
        <label class="col-auto" for="name">Название</label> 
        <input class="form-control" type='text' name='name' id='name' value="{{ isset($group) ? $group->name : '' }}">
    </div>
    <div class="mt-2 row">
        <button class="btn btn-light" action='submit'>Сохранить</button>
    </div>
</form>
