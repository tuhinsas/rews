<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REWS - Login</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.1/material.indigo-pink.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="uk-height-viewport auth-page">
        <div class="uk-grid uk-flex uk-flex-column uk-flex-space-between uk-height-1-1">
        <div></div>
        <div class="uk-width-4-10 uk-container-center">
            <div class="auth-card mdl-shadow--2dp">
                <h3 class="uk-panel-title">Register</h3>
                <hr>
                <form action="{{ url('/register')}}" role="form" method="POST" class="uk-form uk-form-stacked uk-form-horizontal">
                    {!! csrf_field() !!}
                    <div class="uk-form-row">
                        <label for="name" class="uk-form-label">Name</label>
                        <div class="uk-form-controls">
                            <input type="text" class="uk-width-1-1 uk-form-large {{ $errors->has('name') ? ' uk-form-danger' : '' }}" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <p class="uk-form-help-block uk-text-danger">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="uk-form-row">
                        <label for="email" class="uk-form-label">E-Mail Address</label>
                        <div class="uk-form-controls">
                            <input type="email" class="uk-width-1-1 uk-form-large {{ $errors->has('email') ? ' uk-form-danger' : '' }}" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <p class="uk-form-help-block uk-text-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="uk-form-row">
                        <label for="password" class="uk-form-label">Password</label>
                        <div class="uk-form-controls">
                            <input type="password" class="uk-width-1-1 uk-form-large {{ $errors->has('password') ? ' uk-form-danger' : '' }}" name="password">
                            @if ($errors->has('password'))
                                <p class="uk-form-help-block uk-text-danger">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="uk-form-row">
                        <label for="password" class="uk-form-label">Confirm Password</label>
                        <div class="uk-form-controls">
                            <input type="password" class="uk-width-1-1 uk-form-large {{ $errors->has('password_confirmation') ? ' uk-form-danger' : '' }}" name="password_confirmation">
                            @if ($errors->has('password_confirmation'))
                                <p class="uk-form-help-block uk-text-danger">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="uk-form-row">
                        <div class="uk-form-controls uk-width-3-4">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit">Register</button>
                            or
                            <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="{{ url('/login') }}">Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div></div>
    </div>
    </div>
    
    <script src="/js/main.js"></script>
    <script defer src="https://code.getmdl.io/1.1.1/material.min.js"></script>
</body>
</html>