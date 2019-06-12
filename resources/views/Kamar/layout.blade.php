<!doctype html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>
<body>

<div class="container">
    <div class="alert alert-success">
        <h2>Data Kamar</h2>
    </div>

    <hr>

    @yield('content')

</div>

<script src="js/app.js"></script>
</body>
</html>