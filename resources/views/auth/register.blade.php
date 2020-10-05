<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uselooper.com/auth-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 09:39:05 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Sign Up | Looper - Bootstrap 4 Admin Theme </title>
    <meta property="og:title" content="Sign Up">
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
            "headline": "Sign Up",
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
    @include('inc.dashboard.message',['name' => 'Good News'])
    <main class="auth">
        <header id="auth-header" class="auth-header"
            style="background-image: url(assets/images/illustration/img-1.png);">
            <h1>
                {!!file_get_contents("img/logo.svg")!!}<span class="sr-only">Sign Up</span>
            </h1>
            <p> Already have an account? please <a href={{route('login')}}>Sign In</a>
            </p>
        </header><!-- form -->
        <form class="auth-form" method="POST" action="{{ route('register') }}">
            @csrf
            <!-- .form-group -->
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <div class="form-label-group">
                        <input id="f_name" placeholder="First Name" type="text" class="form-control @error('f_name') is-invalid @enderror" name="f_name" value="{{ old('f_name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="f_name">First Name</label>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-label-group">
                        <input id="l_name" placeholder="Last Name" type="text" class="form-control @error('l_name') is-invalid @enderror" name="l_name" value="{{ old('l_name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="l_name">Last Name</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input id="inputEmail" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="inputEmail">Email</label>
                </div>
            </div><!-- /.form-group -->
            <!-- .form-group -->
            <div class="form-group">
                <div class="form-label-group">
                    <input id="inputPassword" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="inputPassword">Password</label>
                </div>
            </div><!-- /.form-group -->
            <div class="form-group">
                <div class="form-label-group">
                    <input id="confirmPassword" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <label for="confirmPassword">Confirm Password</label>
                </div>
            </div><!-- /.form-group -->
            <!-- .form-group -->
            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
            </div><!-- /.form-group -->
            <!-- .form-group -->
            <div class="form-group text-center">
                <div class="custom-control custom-control-inline custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="newsletter"> <label
                        class="custom-control-label" for="newsletter">Sign me up for the newsletter</label>
                </div>
            </div><!-- /.form-group -->
            <!-- recovery links -->
            <p class="text-center text-muted mb-0"> By creating an account you agree to the <a href="#">Terms of Use</a>
                and <a href="#">Privacy Policy</a>. </p><!-- /recovery links -->
        </form><!-- /.auth-form -->
        <!-- copyright -->
        <footer class="auth-footer"> © 2018 All Rights Reserved. </footer>
    </main><!-- /.auth -->
    <!-- BEGIN BASE JS -->
    <script src={{asset('assets/js/jquery.min.js')}}></script>
    <script src={{asset('assets/js/popper.min.js')}}></script>
    <script src={{asset('assets/js/bootstrap.min.js')}}></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src={{asset('assets/js/particles.js')}}}></script>
    <script>
        /**
         * Keep in mind that your scripts may not always be executed after the theme is completely ready,
         * you might need to observe the `theme:load` event to make sure your scripts are executed after the theme is ready.
         */
        $(document).on('theme:init', () => {
            /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
            particlesJS.load('auth-header', 'assets/javascript/pages/particles.json');
        })
    </script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src={{asset("assets/javascript/theme.min.js")}}></script> <!-- END THEME JS -->
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

<!-- Mirrored from uselooper.com/auth-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 09:39:05 GMT -->

</html>