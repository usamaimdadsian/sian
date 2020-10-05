<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uselooper.com/auth-signin-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 09:39:05 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Sign In | Looper - Bootstrap 4 Admin Theme </title>
    <meta property="og:title" content="Sign In">
    <meta name="author" content="Beni Arisandi">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
    <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
    <link rel="canonical" href="index-2.html">
    <meta property="og:url" content="index-2.html">
    <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">
    <script type="application/ld+json">
        {
            "name": "Looper - Bootstrap 4 Admin Theme",
            "description": "Responsive admin theme build on top of Bootstrap 4",
            "author": {
                "@type": "Person",
                "name": "Beni Arisandi"
            },
            "@type": "WebSite",
            "url": "",
            "headline": "Sign In",
            "@context": "http://schema.org"
        }
    </script><!-- End SEO tag -->
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="144x144" href={{asset("assets/apple-touch-icon.png")}}>
    <link rel="shortcut icon" href={{asset("assets/favicon.ico")}}>
    <meta name="theme-color" content="#3063A0"><!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End Google font -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href={{asset("assets/css/font-awesome.min.css")}}>
    <!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href={{asset("assets/stylesheets/theme.min.css")}} data-skin="default">
    <link rel="stylesheet" href={{asset("assets/stylesheets/theme-dark.min.css")}} data-skin="dark">
    <link rel="stylesheet" href={{asset("assets/stylesheets/custom.css")}}>
    <script>
        var skin = localStorage.getItem('skin') || 'default';
        var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
        // Disable unused skin immediately
        disabledSkinStylesheet.setAttribute('rel', '');
        disabledSkinStylesheet.setAttribute('disabled', true);
        // add loading class to html immediately
        document.querySelector('html').classList.add('loading');
    </script><!-- END THEME STYLES -->
</head>

<body>
    <!--[if lt IE 10]>
    <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
    <![endif]-->
    <!-- .auth -->
    <main class="auth auth-floated">
        <!-- form -->
        <form class="auth-form" method="POST" action="{{ route('login') }}">
            @csrf
            <input type="hidden" name="type" value="{{$type}}">
            <div class="mb-4">
                <div class="mb-3">
                    {!!file_get_contents("img/logo.svg")!!}
                </div>
                <h1 class="h3"> Sign In </h1>
            </div>
            <p class="text-left mb-4"> Don't have a account? <a href={{route('register')}}>Create One</a>
            </p><!-- Email -->
            <div class="form-group mb-4">
                <label class="d-block text-left" for="inputUser">{{__('Email')}}</label> 
                <input id="inputUser" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div><!-- /Email -->
            <!-- Password -->
            <div class="form-group mb-4">
                <label class="d-block text-left" for="inputPassword">{{__('Password')}}</label>
                <input id="inputPassword" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div><!-- /Password -->
            <!-- .form-group -->
            <div class="form-group mb-4">
                <button class="btn btn-lg btn-primary btn-block" type="submit">{{__('Sign In')}}</button>
            </div><!-- /.form-group -->
            <!-- Remember me -->
            <div class="form-group text-center">
                <div class="custom-control custom-control-inline custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="remember" id="remember-me" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="remember-me">Keep me sign in</label>
                </div>
            </div><!-- /Remember me -->
            <!-- recovery links -->
            <p class="py-2">
                <a href="auth-recovery-username.html" class="link">Forgot Username?</a> <span class="mx-2">·</span> <a
                    href="auth-recovery-password.html" class="link">Forgot Password?</a>
            </p><!-- /recovery links -->
            <!-- copyright -->
            <p class="mb-0 px-3 text-muted text-center"> © 2018 All Rights Reserved. Loper is Responsive Admin Theme
                build on top of latest Bootstrap 4. <a href="#">Privacy</a> and <a href="#">Terms</a>
            </p>
        </form><!-- /.auth-form -->
        <!-- .auth-announcement -->
        <div id="announcement" class="auth-announcement"
            style="background-image: url('{{asset('assets/images/illustration/img-1.png')}}');">
            <div class="announcement-body">
                <h2 class="announcement-title"> Go to Main Website </h2><a href="{{route('main.landing')}}"
                    class="btn btn-warning"><i class="fa fa-fw fa-angle-right"></i> Go Now</a>
            </div>
        </div><!-- /.auth-announcement -->
    </main><!-- /.auth -->
    <!-- BEGIN BASE JS -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script> <!-- END ')}}BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="{{asset('assets/js/particles.js')}}"></script>
    <script>
        /**
         * Keep in mind that your scripts may not always be executed after the theme is completely ready,
         * you might need to observe the `theme:load` event to make sure your scripts are executed after the theme is ready.
         */
        $(document).on('theme:init', () => {
            var addr = {!! asset('assets/javascript/pages/particles.json') !!}
            /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
            particlesJS.load('announcement', addr);
        })
    </script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="{{asset('assets/javascript/theme.min.js')}}"></script> <!-- END THEME JS -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116692175-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-116692175-1');
    </script>
</body>

<!-- Mirrored from uselooper.com/auth-signin-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 09:39:05 GMT -->

</html>