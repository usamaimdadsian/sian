<style>
    .usama-imdad-sian
    {
        background-image: linear-gradient(to right, #4458dc 0%, #854fee 100%), radial-gradient(circle at top left, #4458dc, #854fee);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{route('main.landing')}}">
                    {!!file_get_contents("img/logo.svg")!!}
                    <span class="usama-imdad-sian" style="color: #1b1464;font-size: 24px;">Usama Imdad Sian</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        <li class="nav-item {{ Request::routeIs('main.landing') ? 'active' : '' }}"><a class="nav-link" href="{{route('main.landing')}}">Home</a></li>
                        <li class="nav-item {{ Request::routeIs('main.about') ? 'active' : '' }}"><a class="nav-link" href="{{route('main.about')}}">About</a></li>
                        <li class="nav-item {{ Request::routeIs('main.services') ? 'active' : '' }}"><a class="nav-link" href="{{route('main.services')}}">Services</a></li>
                        <li class="nav-item {{ Request::routeIs('main.portfolio') ? 'active' : '' }}"><a class="nav-link" href="{{route('main.portfolio')}}">Portfolio</a></li>
                        <li class="nav-item {{ Request::routeIs('main.contact') ? 'active' : '' }}"><a class="nav-link" href="{{route('main.contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>