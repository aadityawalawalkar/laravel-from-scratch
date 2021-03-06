<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>
        @unless (empty($title))
            {{ $title }}
        @else
            Laravel
        @endunless
        </title>

        <style type="text/css">
        .highlight {
            color: green !important;
        }
        .highlight-red {
            color: red !important;
        }
        .float-right{
            float:right;
        }
        </style>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- <link rel="stylesheet" href="{{ elixir('css/app.css') }}"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        @yield('header')
    </head>
    <body>
        <div class="container">
            <hr>
            @yield('content')
            <hr>
            <div class="row">
                @yield('footer')
                <div class="col-md-6 col-md-offset-3"><a class="highlight" href="/">BACK HOME</a></div>
            </div>
        </div>
    </body>
</html>
