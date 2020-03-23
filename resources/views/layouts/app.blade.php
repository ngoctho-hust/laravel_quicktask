<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">

</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand">
                    {{ trans('messages.task') }}
                </a>
            </div>

        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
