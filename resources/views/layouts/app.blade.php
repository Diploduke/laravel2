<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-block')</title>
    <base href="{{ URL::to('/') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
{{--    <link rel="stylesheet" href="css/app.css">--}}
    <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" href="favicon.ico">
</head>
<body>
    @include('inc.header')

    @if(Request::is('/'))
        @include('inc.hero')
    @endif

    <div class="container mt-5">
        @include('inc.messages')

        <div class="row">
            <div class="col-4">
                @include('inc.aside')
            </div>
            <div class="col-8">
                @yield('content')
            </div>
        </div>
    </div>

    @include('inc.footer')

</body>
</html>
