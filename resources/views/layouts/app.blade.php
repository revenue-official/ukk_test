<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @vite('resources/sass/app.sass')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,600;0,700;0,800;1,400&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="https://laravel.com/img/logomark.min.svg" type="image/x-icon">

</head>

<body>
    <div class="container-fluid">
        @yield('content')
    </div>
</body>

</html>
