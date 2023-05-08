<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | JobsDemo</title>
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/png">
    <link rel="icon" type="image/gif" href='/img/animated_favicon.gif'>

    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    @vite(['./resources/css/app.min.css', './resources/js/app.min.js'])
    {{-- <link rel="stylesheet" href="../../../css/app.min.css"> --}}
</head>

<body>

    @include('partials.nav')

    @yield('content')

    <script src="../../../js/bootstrap530-a3.min.js"></script>

    @yield('scripts')

</body>

</html>
