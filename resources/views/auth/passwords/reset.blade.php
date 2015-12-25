@extends('layouts.app')

@section('content')
<div class="uk-grid">
    <div class="uk-width-3-5 uk-container-center">
        <div class="uk-panel uk-panel-box">
            <h3 class="uk-panel-title">Reset Password</h3>
            <hr>
            <form role="form" method="POST" action="{{ url('/password/reset') }}" class="uk-form uk-form-stacked uk-form-horizontal">
                {!! csrf_field() !!}
                <input type="hidden" name="token" value="{{ $token }}">
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
                        <button class="uk-button uk-button-primary" type="submit"><i class="uk-icon-refresh"></i> Reset Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
