<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>{{ $title or 'Curso de laravel - Especializa T.I' }}</title>
    @stack('css')


</head>
<body>
    @yield('content')


    @stack('scripts')
</body>
</html>

