<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин: @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    {{--    <link href="/css/bootstrap.min.css" rel="stylesheet">--}}

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
          integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <link href="/css/starter-template.css" rel="stylesheet">


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">Интернет магазин</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item" @routeactive(
                'index')><a class="nav-link" href="{{route('index')}}">Все товары</a></li>
                <li @routeactive(
                'categor*')><a class="nav-link" href="{{route('categories')}}">Категории</a></li>
                <li @routeactive(
                'basket*')><a class="nav-link" href="{{route('basket')}}">В корзину</a></li>
                <li><a class="nav-link" href="{{route('reset')}}">Cброс в нач-состояние</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Войти</a></li>
                @endguest

                @auth
                    @if(Auth::user()->isAdmin())
                        <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Панель администратора</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{route('person.orders.index')}}">Мои заказы</a>
                        </li>
                    @endif
                    <li class="nav-item"><a class="nav-link" href="{{route('get-logout')}}">Выйти</a></li>
                @endauth
            </ul>

        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        @if(session()->has('success'))
            <p class="alert alert-success">{{session()->get('success')}}</p>
        @endif
        @if(session()->has('warning'))
            <p class="alert alert-warning">{{session()->get('warning')}}</p>
        @endif
    </div>
    @yield('content')
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mask.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/myJS.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>