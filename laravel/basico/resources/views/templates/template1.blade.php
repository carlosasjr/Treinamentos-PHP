<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>{{ $title or 'Curso de laravel - Especializa T.I' }}</title>

    <!--BootStrap-->
    <link rel="stylesheet" href="{{ url ('../css/app.css') }}">

    <!--CSS-->
    <link rel="stylesheet" href="{{ url ('assets/painel/css/style.css') }}">
    @stack('css')


</head>
<body>
<div class="container">
    @yield('content')
</div>

@stack('scripts')
</body>
</html>

