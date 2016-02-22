<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REWS(admin) - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body>
    @include('admin.shared.header')
    <div class="uk-container uk-container-center uk-margin-large-top">

        <div class="uk-grid">

            <div class="uk-width-medium-1-4">
                @include('admin.shared.sidebar')
            </div>
            <div class="uk-width-medium-3-4">
                @include('errors.common')
                @yield('content')
            </div>

        </div>

    </div>
    @include('admin.shared.footer')
    <script src="/js/main.js"></script>
    <script src="/js/admin.js"></script>
    @yield('sripts')
</body>
</html>
