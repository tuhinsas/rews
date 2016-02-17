@section('title','Home')
@extends('layouts.app')

@section('content')
    <div class="uk-grid">
        <div class="uk-width-3-4">
            @foreach($articles as $article)
            <div class="news-card-wide mdl-card mdl-shadow--2dp">
                <div class="mdl-grid mdl-grid--no-spacing">
                    <div class="thumbnail mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone"

                        @if($article->media != null)
                            style="background-image: url('/images/{{ $article->media->path}}');"
                        @endif
                    >
                        
                    </div>
                    <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone uk-flex uk-flex-column uk-flex-space-between">
                        <div class="mdl-card__supporting-text">
                            <h6 class="uk-text-muted uk-margin-top-remove">{{ $article->published_at->diffForHumans()}}</h6>
                            <h3 class="uk-margin-top-remove">{{$article->title}}</h3>
                            <p class="uk-text-truncate">{{$article->description}}</p>
                        </div>
                        <div></div>
                        <div class="mdl-card__actions mdl-card--border">
                            <a href="{{ $article->url }}" target="_blank" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                              Read More
                            </a>
                            <button class="mdl-button mdl-js-button mdl-button--icon">
                              <i class="material-icons">favorite_border</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="uk-width-1-4">
            <div class="weather-card mdl-card mdl-shadow--2dp">
              <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Chittagong</h2>
              </div>
              <div class="mdl-card__supporting-text">
                <div class="uk-flex uk-flex uk-flex-row uk-flex-space-between">
                    <div>
                        <h1 class="uk-text-bold uk-heading-large">27&deg; </h1>
                        <h6 class="uk-margin-top-remove"><span class="uk-text-bold">2</span> km/h / <span class="uk-text-bold">65%</span></h6>
                    </div>
                    <div>
                        <h1 class="uk-heading-large"><i class="uk-icon-cloud"></i></h1>
                    </div>
                </div>
                
              </div>
              <div class="uk-grid uk-grid-width-1-3 uk-grid-collapse uk-text-center uk-margin-bottom">
                    <div class="">
                        <h6>Wed</h6>
                        <h1 class="uk-margin-top-remove"><strong>28&deg;</strong></h1>
                    </div>
                    <div>
                        <h6>Thu</h6>
                        <h1 class="uk-margin-top-remove"><strong>32&deg;</strong></h1>
                    </div>
                    <div>
                        <h6>Fri</h6>
                        <h1 class="uk-margin-top-remove"><strong>31&deg;</strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
