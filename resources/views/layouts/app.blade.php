<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {!! SEO::generate(true) !!}
        @livewireStyles
        <link href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">
        <link
            href="//fonts.googleapis.com/css?family=Titillium+Web:700|Source+Serif+Pro:400,700|Merriweather+Sans:400,700|Source+Sans+Pro:400,300,600,700,300italic,400italic,600italic,700italic"
            rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//demo.productionready.io/main.css">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-HK4XWWXRK0"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-HK4XWWXRK0');
        </script>
    </head>

    <body>
        <nav class="navbar navbar-light">
            <div class="container">
            <a href="https://github.com/sawirricardo" target="_blank"
                        rel="noopener noreferrer">Gal Cegla!</a>
                <a class="navbar-brand" href="{{ route('front.index') }}">conduit2!!!</a>
                {!! Menu::app() !!}
                {{-- <ul class="nav navbar-nav pull-xs-right">
                    <li class="nav-item">
                        <!-- Add "active" class when you're on that page" -->
                        <a class="nav-link" href="{{ route('front.index') }}">Home</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('app.article.create') }}">
                        <i class="ion-compose"></i>&nbsp;New Post
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('app.setting') }}">
                        <i class="ion-gear-a"></i>&nbsp;Settings
                    </a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        <a href="#" class="nav-link" onclick="event.preventDefault();this.closest('form').submit()">
                            Logout
                        </a>
                        @csrf
                    </form>
                </li>
                @endauth
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('app.login') }}">Sign in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('app.register') }}">Sign up</a>
                </li>
                @endguest
                </ul> --}}
            </div>
        </nav>
        {{ $slot }}
        <footer>
            <div class="container">
                <a href="{{ route('front.index') }}" class="logo-font">conduit</a>
                <span class="attribution">
                    An interactive learning project from <a href="https://thinkster.io">Thinkster</a>. Code &amp; design
                    licensed under MIT. Implementation by
                </span>
            </div>
        </footer>
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </body>

</html>
