<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REWS - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.1/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.9/css/weather-icons-wind.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="df">
        
    </div>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        @include('frontend.partials.appbar')
        @include('frontend.partials.drawer')
        <div class="mdl-layout__content content-wrapper">
            @yield('content')
        </div>
    </div>
    <script src="/js/main.js"></script>
    <script defer src="https://code.getmdl.io/1.1.1/material.min.js"></script>
</body>
</html>
