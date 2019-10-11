<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Mono&display=swap" rel="stylesheet">

    <title>Katas</title>
</head>

<body>
    <header id="header">
        <img src="" alt="Factoria's logotype">
        <nav>
            <ul>
                <li class="nav">Quienes somos</li>
                <li class="nav">Nuestr@s coders</li>
                <li class="nav"><a href="empresa">Empresas</a></li>
                <li class="nav">Encuentros</li>
                <li class="nav">Recursos</li>
            </ul>
        </nav>
        <input type="text" name="Searcher" id="Searcher" placeholder="Busca alguna cosa...">
        <input type="button" value="Buscar">
        <input type="button" value="Log In">
    </header>

    <main>
        @yield('content')
    </main>

    <footer>©factoriaf5 | All rights reserved</footer>
</body>
</html>