<form method="POST" action="{{ $action }}">
    @csrf
    @method($method)

    <!-- Group name -->
    <label for="nameOfGroup" class="form-label mt-1">Имя группы</label>
    <input type="group" class="form-control" name="name" id="nameOfGroup" placeholder="Введите имя группы" value="{{ isset($group->name) ? $group->name : '' }}">

    <!-- Students -->
    <label for="students" class="form-label mt-2">Список студентов</label>
    <!-- We need 5 rows only --> 
    @if (isset($group))
        @foreach ($group->students as $member)
            <select class="form-select mb-1" aria-label="Default select example" name="students">
                @foreach ($students as $student)
                    <option value="{{ $student->id }}" {{ $member->id == $student->id ? 'selected' : '' }}>{{ $student->name }}</option>
                @endforeach
            </select>
            @if ($loop->last && $loop->count < 5)
                @for ($i = 5 - $loop->count; $i > 0; $i--)
                    <select class="form-select mb-1" aria-label="Default select example" name="students">
                            <option selected>Выберите студента из списка</option>
                        @foreach ($students as $student)
                            <option value="{{ $student->id }}">{{ $student->name }}</option>
                        @endforeach
                    </select>
                @endfor
            @endif
        @endforeach
    @else
        @for ($i = 0; $i < 5; $i++)
            <select class="form-select mb-1" aria-label="Default select example" name="students">
                <option selected>Выберите студента из списка</option>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
        @endfor
    @endif

    <!-- Group leader (for editing only) -->
    @if(isset($group))
        <label for="leadOfGroup" class="form-label mt-2">Староста</label>
        <select class="form-select" aria-label="Default select example" name="user_id">
            <option selected>Выберите старосту из списка</option>
            @foreach ($students as $student)
                <option value="{{ $student->id }}" {{ isset($group->leadOfGroup) && $group->leadOfGroup->id == $student->id ? 'selected' : '' }}>{{ $student->name }}</option>
            @endforeach
        </select>
    @endif

    <!-- Submit button-->
    <div class="d-grid mt-3">
        <button class="btn btn-success" type="submit">Сохранить</button>
    </div>
</form>