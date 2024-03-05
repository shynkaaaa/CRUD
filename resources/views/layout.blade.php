<!doctype html>
<html lang="en" data-bs-theme="auto">
<head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <meta name="theme-color" content="#712cf9">


    <link href="https://getbootstrap.com/docs/5.3/examples/checkout/checkout.css" rel="stylesheet">
</head>

<body class="bg-body-tertiary">

<div class="container">
    <h1>@yield('title')</h1>
    <main>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endisset
        @if(session('danger'))
            <div class="alert alert-danger">{{ session('danger') }}</div>
        @endisset
        @yield('content')
    </main>
</div>

<script src="https://getbootstrap.com/docs/5.3/examples/checkout/checkout.js"></script></body>
</html>
