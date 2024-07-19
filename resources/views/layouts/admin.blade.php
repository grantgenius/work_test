<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Административная панель</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css')}}">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Административная панель</a>
    <a class="navbar-brand" href="/home/">Главная</a>
    <a class="navbar-brand" href="{{route('items.posts')}}">Мои товары</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('items.create') }}">Добавить товар</a>
            </li>

        </ul>
    </div>
</nav>

@yield('content')

<script src="{{ asset('js/app.js') }}"></script>
<!-- Подключение скриптов Bootstrap или других JS -->
</body>
</html>
