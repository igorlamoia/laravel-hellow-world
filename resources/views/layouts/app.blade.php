<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem vindo!</title>
</head>

<body style="margin: 0; padding: 0;">
    @section('header')
        <x-header>
        </x-header>
    @show

    <main>
        @yield('content')
    </main>

    @section('footer')
        <x-footer>
        </x-footer>
    @show

</body>

</html>
