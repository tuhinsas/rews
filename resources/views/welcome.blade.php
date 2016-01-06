<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REWS</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <section id="teaser">
        <div class="uk-container uk-container-center uk-height-viewport uk-position-relative">
            <div id="teaser-header" class="uk-flex uk-flex-middle uk-flex-space-between uk-position-top">
                <h1 class="text-white text-thin"><i class="uk-icon-newspaper-o"></i> <span class="uk-text-bold">R</span>EWS</h1>
                <div></div>
                <div id="teaser-nav">
                    <a href="#contact" data-uk-smooth-scroll>Contact</a>
                    <a class="active" href="{{ url('/login')}}">Login</a>
                </div>
            </div>
            <div class="vertical-align uk-text-center">
                <h1 class="uk-heading-large text-white text-thin">Discover & Read News in a Different Way</h1>
                <h2 class="text-white">Fine tuned & personalized only for you.</h2>
                <div class="uk-margin-large-top">
                    <a href="" class="uk-button uk-button-large"><i class="uk-icon-google"></i> Sign up with Google</a>
                    <a href="" class="uk-button uk-button-large"><i class="uk-icon-facebook"></i> Sign up with Facebook</a>
                </div>
            </div>
        </div>
    </section>
    <section id="features">
        <div class="uk-container uk-container-center">
            <h2 class="uk-text-center uk-margin-large-bottom">Features</h2>
            <div class="uk-width-3-4 uk-container-center">
                <div class="uk-grid uk-grid-width-medium-1-2 uk-text-center" data-uk-grid-margin>
                    <div>
                        <h2><i class="uk-icon-large uk-icon-bolt"></i></h2>
                        <h3 class="uk-text-bold">Lorem ipsum dolor.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas dicta voluptas aliquam magnam possimus dolores similique officiis enim perferendis eum aspernatur, magni aut sit dolorem.</p>
                    </div>
                    <div>
                        <h2><i class="uk-icon-large uk-icon-binoculars"></i></h2>
                        <h3 class="uk-text-bold">Non accusantium soluta</h3>
                        <p>Alias vitae, non accusantium soluta doloribus laudantium placeat corporis, molestiae consequatur! Quos doloribus inventore enim, quaerat esse. Iure, ratione eaque eos non explicabo, nemo error!</p>
                    </div>
                    <div>
                        <h2><i class="uk-icon-large uk-icon-diamond"></i></h2>
                        <h3 class="uk-text-bold">Esse nostrum laborum</h3>
                        <p>Omnis impedit et, earum, esse nostrum laborum, minus qui dicta cumque aliquam velit natus eius delectus sit deleniti culpa tempora aspernatur similique ipsum. Quos, ratione?</p>
                    </div>
                    <div>
                        <h2><i class="uk-icon-large uk-icon-cube"></i></h2>
                        <h3 class="uk-text-bold">Eaque nesciunt id</h3>
                        <p>Facere saepe autem blanditiis maxime ducimus architecto rem cupiditate suscipit, eaque nesciunt id. Reprehenderit asperiores iusto eveniet, quisquam exercitationem cum ab reiciendis voluptatum sapiente illum!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="uk-container uk-container-center">
            <h2 class="text-white uk-text-center uk-margin-large-bottom">Contact</h2>
            <div class="uk-grid">
                <div class="uk-width-medium-1-2">
                    <h1 class="text-white text-thin"><i class="uk-icon-newspaper-o"></i> <span class="uk-text-bold">R</span>EWS</h1>
                    <h4>&copy; Rews by Fahim Shahriyer. 2016</h4>
                </div>
                <div class="uk-width-medium-1-2">
                    <div id="contact-social">
                        <a href="#" class="uk-icon-hover uk-icon-github"></a>
                        <a href="#" class="uk-icon-hover uk-icon-facebook"></a>
                        <a href="#" class="uk-icon-hover uk-icon-google-plus"></a>
                    </div>
                    <ul class="uk-subnav uk-subnav-line uk-align-right uk-margin-top">
                        <li>FAQ</li>
                        <li>Help</li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <script src="/js/main.js"></script>
</body>
</html>