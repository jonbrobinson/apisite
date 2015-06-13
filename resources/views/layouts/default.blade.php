<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Apisite</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/video.css">

</head>

<body>

    @include('layouts.partials.nav')

    <div class="container">

        @yield('content')
    </div>

    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    @yield('javascript')
</body>
</html>