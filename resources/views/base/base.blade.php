<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    @yield('header')
    <!-- Styles -->

</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        @yield('content')
    </div>
</div>
@yield('footer')

</body>
</html>
