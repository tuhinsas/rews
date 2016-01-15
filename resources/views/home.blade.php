@section('title','Home')
@extends('layouts.app')

@section('content')
<body class="wrapper-home">
    <div id="left-sidebar">
        <div class="uk-flex uk-flex-center uk-flex-space-between uk-flex-column uk-height-1-1">
            <div>
                <h1 class="text-white text-thin"><i class="uk-icon-newspaper-o"></i> <span class="uk-text-bold">R</span>EWS</h1>
            </div>
            <div>
                <ul id="right-sidebar-nav">
                    <li><a href="#"><i class="uk-icon-bolt"></i> Recent</a></li>
                    <li><a href="#"><i class="uk-icon-fire"></i> Rocemmended</a></li>
                    <li><a href="#"><i class="uk-icon-thumb-tack"></i> Pinned</a></li>
                    <li><a href="#"><i class="uk-icon-heartbeat"></i> Favourites</a></li>
                    <li><a href="#"><i class="uk-icon-user-secret"></i> People</a></li>
                </ul>
            </div>
            <div>
                <a href="#">
                    <div class="uk-flex uk-flex-middle uk-flex-space-between">
                        <div>   
                            <img src="{{ url('thumbs/avatar.png')}}" alt="avatar" class="uk-border-circle" width="42px">
                        </div>
                        <div>Fahim Shahriyer</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div id="right-sidebar">
        
    </div>
</body>
@endsection
