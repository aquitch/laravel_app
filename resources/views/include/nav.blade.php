<nav class="navbar navbar-expand-lg navbar-dark bg-dark.bg-gradient">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Навигация</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Главная</a>
        <a class="nav-link active" href="{{ route('groups.index') }}">Группы</a>
        <a class="nav-link disabled" href="#">Студенты</a>
        <a class="nav-link disabled" href="#">Предметы</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Преподаватели</a>
        <a class="nav-link disabled" href="#">Расписание</a>
      </div>
    </div>
  </div>
</nav>