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
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        @include('frontend.partials.details-appbar')
        @include('frontend.partials.drawer')
        <div class="mdl-layout__content details-cover">
            <div class="uk-cover-background" style="height: 350px; background-image: url(img/ESA-EARTH.jpg);"></div>
            <div class="datails-description">
                <h1><strong>Hubble Telescope provides first look at a 'super-Earth' atmosphere</strong></h1>
                <h3 class="uk-text-muted">From <a href="#">Mashable</a> at <strong>February 17,2016</strong></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam enim laborum iure consequatur commodi exercitationem tenetur nisi laudantium debitis. Nobis adipisci possimus fugiat, maxime numquam sapiente, aperiam consequatur dolorum asperiores. Velit minima impedit et ex molestias ipsam eveniet quaerat nulla non cumque dignissimos aspernatur suscipit, error esse reiciendis numquam!</p>
            </div>
        </div>
    </div>
    <script src="/js/main.js"></script>
    <script defer src="https://code.getmdl.io/1.1.1/material.min.js"></script>
</body>
</html>