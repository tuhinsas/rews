@if(Session::has('info'))
    <div class="uk-alert uk-alert-" data-uk-alert>
        <a href="#" class="uk-alert-close uk-close"></a>
        <p>{{ Session::get('info') }}</p>
    </div>
@endif
@if(Session::has('warning'))
    <div class="uk-alert uk-alert-warning" data-uk-alert>
        <a href="#" class="uk-alert-close uk-close" ></a>
        <p>{{ Session::get('warning') }}</p>
    </div>
@endif
@if(Session::has('success'))
    <div class="uk-alert uk-alert-success" data-uk-alert>
        <a href="#" class="uk-alert-close uk-close" ></a>
        <p>{{ Session::get('success') }}</p>
    </div>
@endif
@if (count($errors) > 0)
    <!-- Form Error List -->
    <div class="uk-alert uk-alert-danger" data-uk-alert>
        <strong>Whoops! Something went wrong!</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


