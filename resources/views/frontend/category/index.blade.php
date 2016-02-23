@section('title','Home')
@extends('layouts.app')

@section('content')
    <h2>From - '{{ $category->title }}'</h2>
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
                            <a href="{{ route('story.show', $article->id) }}" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                              Details
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
@endsection